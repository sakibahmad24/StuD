<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Shop extends CI_Model {

    public function catSlider($cat) {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('slider_isActive',1);
        $this->db->where('slider_brand_category',$cat);
        $this->db->order_by("slider_id", "DESC");
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $catSlider = $query_result->result_array();

        return $catSlider;
    }

    public function catOffer($cat) {
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->where('offer_isFeatured',1);
        $this->db->where('offer_category',$cat);
        $this->db->order_by("offer_id", "DESC");
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $homeoffer = $query_result->result_array();

        return $homeoffer;
    }

    public function catblog($cat) {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->where('review_sale_cat',$cat);
        $this->db->order_by("review_id", "DESC");
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $catblog = $query_result->result_array();

        return $catblog;
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
    
    

    
    
    public function blogs($limit,$start) {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");
        $this->db->limit($limit,$start);

        $query_result=$this->db->get();
      
        $blogs = $query_result->result_array();

        return $blogs;
    }
    
    public function blogs_total_number_of_rows() {
        $total_rows = $this->db->query('SELECT * FROM review');
        return $total_rows->num_rows();
    }

        

}