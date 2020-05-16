<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Brands extends CI_Model {



    function getAllBrands(){
        
        $this->db->select('*');
		$this->db->from('brand');

		$query_result=$this->db->get();

		$allbrands = $query_result->result_array();

		return $allbrands;
	}


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

        $this->db->select('promocode');
        $this->db->from('user');
        $this->db->where('user_phone', $_POST['phone']);

        $phone_result=$this->db->get();
      
        $check_phone = $phone_result->row_array();

        $this->db->select('*');
        $this->db->from('sale');
        $this->db->where('sale_promocode', $_POST['promocode']);
        $this->db->order_by("sale_id", "DESC");
        $this->db->limit(1);

        $promo_res = $this->db->get();
        $check_promo = $promo_res->row_array();


        //time difference count
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $current_time = $dt->format('F j, Y, g:i a');
                
        $saletime = $check_promo['sale_time'];
        $saletime = strtotime($saletime);
                
        $current_time = strtotime($current_time);
        $time_diff = abs($current_time - $saletime)/3600;

        if(($check_phone != NULL) && ($check_phone['promocode'] == $_POST['promocode'])){
            
                

                if(($check_promo != NULL) && ($check_promo['sale_brand_name'] != $_POST['brand_name'])){
                    
                    goto sale_code;
                    
                } else if(($check_promo != NULL) && ($check_promo['sale_brand_name'] == $_POST['brand_name']) && $time_diff > 24){
                    goto sale_code;
                }
                else{
                    return '2';
                }

        } else{
            return '3';
        }

        //actual code for sale starts

        sale_code:
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where('brand_name', $_POST['brand_name']);

        $query_result=$this->db->get();
    
        $brand_category = $query_result->row_array();

        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_brand_category']= $brand_category['brand_category'];
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);

        return '1';

        // actual code for sale ends



        // if(($check_promo != NULL) && ($check_promo['sale_brand_name'] == $_POST['brand_name'])){


        //     $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        //     $current_time = $dt->format('F j, Y, g:i a');
		
		//     $saletime = $check_promo['sale_time'];
		//     $saletime = strtotime($saletime);
		
        //     $current_time = strtotime($current_time);
        //     $time_diff = abs($current_time - $saletime)/3600;

        //         if($time_diff > 24 && ($check_phone !=NULL && $check_phone['promocode'] == $_POST['promocode'])) {
                    
        //             // return $this->db->insert_id();
        //             return '1';
        //         }
        //         else{
        //             return '2';
        //         }
            

        // }
        // else{
        //     return '3';
        // }

    
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

    public function allSales(){
        
        $this->db->select('*');
        $this->db->from('sale');
        $this->db->order_by("sale_id", "DESC");

        $query_result=$this->db->get();
      
        $allSales = $query_result->result_array();

        return $allSales;
    }

}