<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Search extends CI_Model {

    public function allResults($searchData,$limit,$start) {
        
        $this->db->select('*');
        $this->db->from('review');
        $this->db->like('sale.sale_brand_name', $searchData);
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");
        $this->db->limit($limit,$start);

        $query_result=$this->db->get();
      
        $allResults = $query_result->result_array();

        return $allResults;
    }

    public function review_total_number_of_rows($searchData) {
        $total_rows = $this->db->query("SELECT * FROM `review` WHERE `review_title` LIKE '%{$searchData}%' OR `review_subtitle` LIKE '%{$searchData}%' OR `review_body` LIKE '%{$searchData}%'");
        return $total_rows->num_rows();
    }
    
    public function avgReview($searchData) {
        $this->db->select('AVG(review_rating) as avgReview');
        $this->db->from('review');
        $this->db->like('sale.sale_brand_name', $searchData);
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");
        $ratingquery = $this->db->get();
    
        $ratingResult = $ratingquery->result_array();
    
        $avgReview = $ratingResult[0]['avgReview'];
    
        if($avgReview == ''){
           $avgReview = 0;
        }
    
        return $avgReview;
    }
    
    public function searchOffers($searchData) {
        
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->like('offer_brand', $searchData);
        $this->db->order_by("offer_id", "DESC");

        $query_result=$this->db->get();
      
        $searchOffers = $query_result->result_array();

        return $searchOffers;
    }

    public function apiAllResults($searchData) {
        
        $this->db->select('*');
        $this->db->from('review');
        $this->db->like('sale.sale_brand_name', $searchData);
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");

        $query_result=$this->db->get();
      
        $allResults = $query_result->result_array();

        return $allResults;
    }
        

}