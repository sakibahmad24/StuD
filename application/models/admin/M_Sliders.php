<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sliders extends CI_Model {

    function sliders_entry($data) {

        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['slider_name']);

        $query_result=$this->db->get();
      
        $slider_brand_category = $query_result->row_array();

        $data = array(
            'slider_name' => $_POST['slider_name'],
            'slider_title' => $_POST['slider_title'],
            'slider_subtitle' => $_POST['slider_subtitle'],
            'slider_isActive' => $_POST['slider_isActive'],
            'slider_brand_category' => $slider_brand_category['brand_category'],
            'created_at' => current_time(),
            'slider_image' => $data
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->insert('slider', $data);
        return $this->db->insert_id();
    }

    public function sell_entry() {
        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);
    }

    public function allSlider() {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->order_by("slider_id", "DESC");

        $query_result=$this->db->get();
      
        $allSlider = $query_result->result_array();

        return $allSlider;
    }

    public function deleteSlider($id) {
        $this->db->where('slider_id',$id);
        $this->db->delete('slider');
    }
    
    public function editSlider($id) {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where("slider_id", $id);

        $query_result=$this->db->get();
      
        $editSlider = $query_result->row_array();

        return $editSlider;
    }

    function sliders_update($data) {
        
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['slider_name']);

        $query_result=$this->db->get();
      
        $slider_brand_category = $query_result->row_array();


        $slider_id= $this->input->post('slider_id',true);
        $data = array(
            'slider_name' => $_POST['slider_name'],
            'slider_title' => $_POST['slider_title'],
            'slider_subtitle' => $_POST['slider_subtitle'],
            'slider_isActive' => $_POST['slider_isActive'],
            'slider_brand_category' => $slider_brand_category['brand_category'],
            'slider_image' => $data,
            'updated_at' => current_time()
        );    
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('slider_id',$slider_id);
        $this->db->update('slider', $data);
        return $this->db->insert_id();
    }
    
    function sliders_update_only_text() {

        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['slider_name']);

        $query_result=$this->db->get();
      
        $slider_brand_category = $query_result->row_array();


        $slider_id= $this->input->post('slider_id',true);
        $data = array(
            'slider_name' => $_POST['slider_name'],
            'slider_title' => $_POST['slider_title'],
            'slider_subtitle' => $_POST['slider_subtitle'],
            'slider_isActive' => $_POST['slider_isActive'],
            'slider_brand_category' => $slider_brand_category['brand_category'],
            'updated_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('slider_id',$slider_id);
        $this->db->update('slider', $data);
        return $this->db->insert_id();
    }

}