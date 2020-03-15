<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Brands extends CI_Model {

    function brands_entry($data) {
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_active' => $_POST['brand_active'],
            'brand_image' => $data,
            'brand_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->insert('brand', $data);
        return $this->db->insert_id();
    }

    public function sell_entry() {
        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);
    }

    public function allBrands() {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->order_by("brand_id", "DESC");

        $query_result=$this->db->get();
      
        $allBrands = $query_result->result_array();

        return $allBrands;
    }

    public function editBrand($id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where("brand_id", $id);

        $query_result=$this->db->get();
      
        $editBrand = $query_result->row_array();

        return $editBrand;
    }

    function brands_update($data) {
        $brand_id= $this->input->post('brand_id',true);
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_active' => $_POST['brand_active'],
            'brand_image' => $data,
            'brand_updated_at' => current_time()
        );    
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('brand_id',$brand_id);
        $this->db->update('brand', $data);
        return $this->db->insert_id();
    }

    function brands_update_only_text() {
        $brand_id= $this->input->post('brand_id',true);
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_active' => $_POST['brand_active'],
            'brand_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('brand_id',$brand_id);
        $this->db->update('brand', $data);
        return $this->db->insert_id();
    }

    public function deleteBrand($id) {
        $this->db->where('brand_id',$id);
        $this->db->delete('brand');
    }

}