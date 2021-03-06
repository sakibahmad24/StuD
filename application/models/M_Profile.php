<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Profile extends CI_Model {

    public function getHistory($phone_number){

        $this->db->select('*');
        $this->db->from('sale');
        $this->db->join('brand', 'brand.brand_name = sale.sale_brand_name');
        $this->db->where('sale.sale_phone_number',$phone_number);

        $query_result=$this->db->get();
       
        $purchase_history = $query_result->result();

        return $purchase_history;
       
      }

      function review_entry($image_data, $phone_number) {
        
        $sale_id = $_POST['sale_id'];

        $this->db->select('sale_brand_category');
        $this->db->from('sale');
        $this->db->where('sale_id',$sale_id);

        $res = $this->db->get();
        $sale_category = $res->row_array();

        $data = array(
            'review_sale_id' => $_POST['sale_id'],
            'review_sale_cat' => $sale_category['sale_brand_category'],
            'review_rating' => $_POST['rating'],
            'review_title' => $_POST['title'],
            'review_subtitle' => 'NULL',
            'review_body' => $_POST['description'],
            'review_user_phone' => $phone_number,
            'review_image' => $image_data,
            'review_image_url' => base_url('/assets/assets_user/review_image/').$image_data,
            'review_created_at'=> current_time()
        );

        // echo "<pre>"; print_r($_POST); exit();
        $success = $this->db->insert('review', $data);
        $data = array(
          'sale_review' => '1'
      );

        if($success){
            $this->db->update('sale', $data, array('sale_id' => $sale_id));
            return $this->db->insert_id();
        }
        
        return $this->db->insert_id();
    }


    public function get_review_history($phone_number){

        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->where('review.review_user_phone',$phone_number);

        $query_result=$this->db->get();
      
        $purchase_history = $query_result->result();

        return $purchase_history;
     
    }
    
    
    public function review_details($review_id){

        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->join('user', 'user.user_phone = review.review_user_phone');
        $this->db->where('review_id',$review_id);
        $query_result=$this->db->get();
      
        $review_details = $query_result->row_array();

        return $review_details;
     
    }

    public function last_promo_details($phone_number){

        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->join('user', 'user.user_phone = review.review_user_phone');
        $this->db->where('review_user_phone',$phone_number);
        $this->db->order_by("review_id", "desc");
        $query_result=$this->db->get();
      
        $last_promo_details = $query_result->row_array();

        return $last_promo_details;
     
    }

    public function get_last_sale($phone_number){
        $this->db->select('*');
        $this->db->from('sale');
        $this->db->where('sale_phone_number',$phone_number);
        $this->db->order_by("sale_id", "desc");
        $this->db->limit(1);

        $query_result=$this->db->get();

        return $last_sale_details = $query_result->row_array();
    }

    public function updatePromocode($phone_number, $promocode){

        $data=array(
            'promocode'=>$promocode,
            'user_modified_at' => current_time(),
        );

        return $this->db->where('user_phone', $phone_number)->update('user', $data);

//        $query_result=$this->db->get();
//
//        return $last_sale_details = $query_result->row_array();
    }

    public function get_user_promocode($phone_number){

        $this->db->select('promocode');
        $this->db->from('user');
        $this->db->where('user_phone', $phone_number);

        $query_result=$this->db->get();

        $getUserPromocode = $query_result->row_array();


        return $getUserPromocode;
    }

        

}