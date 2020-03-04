<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Brands extends CI_Model {

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
        $data['sale_brand_id']= $this->input->post('brand_name',true);
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);
    }

}