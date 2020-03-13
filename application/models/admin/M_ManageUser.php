<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageUser extends CI_Model {

    function brands_entry($data) {
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_promo_pct' => $_POST['brand_promo_pct'],
            'brand_sub_heading' => $_POST['brand_sub_heading'],
            'brand_valid_till' => $_POST['brand_valid_till'],
            'brand_active' => $_POST['brand_active'],
            'brand_image' => $data
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

    public function allAdmins() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_isApproved', 10);
        $this->db->order_by("user_id", "DESC");

        $query_result=$this->db->get();
      
        $allPendingUser = $query_result->result_array();

        return $allPendingUser;
    }
    
    public function allPendingUser() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_isApproved', 0);
        $this->db->order_by("user_id", "DESC");

        $query_result=$this->db->get();
      
        $allPendingUser = $query_result->result_array();

        return $allPendingUser;
    }
    
    
    public function allapprovedUser() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_isApproved', 1);
        $this->db->order_by("user_id", "DESC");

        $query_result=$this->db->get();
      
        $allapprovedUser = $query_result->result_array();

        return $allapprovedUser;
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
            'brand_promo_pct' => $_POST['brand_promo_pct'],
            'brand_sub_heading' => $_POST['brand_sub_heading'],
            'brand_valid_till' => $_POST['brand_valid_till'],
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
            'brand_promo_pct' => $_POST['brand_promo_pct'],
            'brand_sub_heading' => $_POST['brand_sub_heading'],
            'brand_valid_till' => $_POST['brand_valid_till'],
            'brand_active' => $_POST['brand_active'],
            'brand_updated_at' => current_time()
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