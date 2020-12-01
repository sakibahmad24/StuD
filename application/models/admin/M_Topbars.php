<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Topbars extends CI_Model {

    function getAllBrands(){

        $this->db->select('*');
        $this->db->from('brand');

        $query_result=$this->db->get();

        $allbrands = $query_result->result_array();

        return $allbrands;
    }

    function Topbar_entry($data) {

        // get Topbar category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['Topbar_brand']);

        $query_result=$this->db->get();

        $Topbar_category = $query_result->row_array();

        // return $Topbar_category; exit;


        $data = array(
            'Topbar_name' => $_POST['Topbar_name'],
            'Topbar_details' => $_POST['Topbar_details'],
            'Topbar_brand' => $_POST['Topbar_brand'],
            'Topbar_category' => $Topbar_category['brand_category'],
            'Topbar_isFeatured' => $_POST['Topbar_isFeatured'],
            'Topbar_image' => $data,
            'Topbar_image_url' => 'http://studbd.com/assets/common/Topbars_picture/'.$data,
            'Topbar_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->insert('Topbar', $data);
        return $this->db->insert_id();
    }

    public function sell_entry() {
        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);
    }

    public function allTopbar() {
        $this->db->select('*');
        $this->db->from('Topbar');
        $this->db->order_by("Topbar_id", "DESC");

        $query_result=$this->db->get();

        $allTopbar = $query_result->result_array();

        return $allTopbar;
    }

    public function deleteTopbar($id) {
        $this->db->where('Topbar_id',$id);
        $this->db->delete('Topbar');
    }

    public function editTopbar($id) {
        $this->db->select('*');
        $this->db->from('Topbar');
        $this->db->where("Topbar_id", $id);

        $query_result=$this->db->get();

        $editTopbar = $query_result->row_array();

        return $editTopbar;
    }

    function Topbars_update($data) {

        // get Topbar category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['Topbar_brand']);

        $query_result=$this->db->get();

        $Topbar_category = $query_result->row_array();


        $Topbar_id= $this->input->post('Topbar_id',true);
        $data = array(
            'Topbar_name' => $_POST['Topbar_name'],
            'Topbar_details' => $_POST['Topbar_details'],
            'Topbar_brand' => $_POST['Topbar_brand'],
            'Topbar_category' => $Topbar_category['brand_category'],
            'Topbar_isFeatured' => $_POST['Topbar_isFeatured'],
            'Topbar_image' => $data,
            'Topbar_image_url' => 'http://studbd.com/assets/common/Topbars_picture/'.$data,
            'Topbar_updated_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('Topbar_id',$Topbar_id);
        $this->db->update('Topbar', $data);
        return $this->db->insert_id();
    }

    function Topbars_update_only_text() {

        // get Topbar category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['Topbar_brand']);

        $query_result=$this->db->get();

        $Topbar_category = $query_result->row_array();


        $Topbar_id= $this->input->post('Topbar_id',true);
        $data = array(
            'Topbar_name' => $_POST['Topbar_name'],
            'Topbar_details' => $_POST['Topbar_details'],
            'Topbar_brand' => $_POST['Topbar_brand'],
            'Topbar_category' => $Topbar_category['brand_category'],
            'Topbar_isFeatured' => $_POST['Topbar_isFeatured'],
            'Topbar_updated_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('Topbar_id',$Topbar_id);
        $this->db->update('Topbar', $data);
        return $this->db->insert_id();
    }

}
