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
            'review_subtitle' => $_POST['subheading'],
            'review_body' => $_POST['description'],
            'review_user_phone' => $phone_number,
            'review_image' => $image_data
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
        $this->db->where('review_id',$review_id);

        $query_result=$this->db->get();
      
        $review_details = $query_result->row_array();

        return $review_details;
     
    }

        

}