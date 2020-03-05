<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function homeblog() {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $homeblog = $query_result->result_array();

        return $homeblog;
    }
    
    
    public function blogDetails($review_id) {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->join('user', 'user.user_phone = review.review_user_phone');
        $this->db->where('review_id',$review_id);
        $query_result=$this->db->get();
      
        $blogDetails = $query_result->row_array();

        return $blogDetails;
    }
    
    
    // public function review_details($review_id){

    //     $this->db->select('*');
    //     $this->db->from('review');
    //     $this->db->where('review_id',$review_id);

    //     $query_result=$this->db->get();
      
    //     $review_details = $query_result->row_array();

    //     return $review_details;
     
    // }

        

}