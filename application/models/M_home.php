<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function homeblog() {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");
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
        // $this->db->join('report', 'report.report_userphone = review.review_user_phone');
        $this->db->where('review_id',$review_id);
        $query_result=$this->db->get();
      
        $blogDetails = $query_result->row_array();

        return $blogDetails;
    }

    public function blogIsReportedByUser($review_id) {
        $getUserphone= $this->session->userdata('phone_number');
        $this->db->select('*');
        $this->db->from('report');
        $this->db->where('report_review_id', $review_id);
        $this->db->where('report_userphone', $getUserphone);
        $this->db->where('is_reported', '1');

        $query_result=$this->db->get();
      
        $isReported = $query_result->row_array();

        return $isReported;
    }
    
    public function homesliders() {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->where('slider_isActive',1);
        $this->db->order_by("slider_id", "DESC");
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $homeblog = $query_result->result_array();

        return $homeblog;
    }

    public function homeoffers() {
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->where('offer_isFeatured',1);
        $this->db->order_by("offer_id", "DESC");
        $this->db->limit(4);

        $query_result=$this->db->get();
      
        $homeoffer = $query_result->result_array();

        return $homeoffer;
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
        // echo $total_rows; exit;
        return $total_rows->num_rows();
    }


    public function report($username,$userphone,$blog_id) {
        $data=array(
            'is_reported'=> 1,
            'report_userphone'=> $userphone,
            'report_username'=> $username,
            'report_review_id' => $blog_id,
            'updated_at' => current_time()
            );
        
        $this->db->select('count(*)');
        $this->db->from('report');
        $this->db->where('report_review_id', $blog_id);
        $this->db->where('report_userphone', $userphone);

        $query_result=$this->db->get();
      
        $result = $query_result->row_array();

        if($result['count(*)'] > 0)  {
            $this->db->where('report_review_id', $blog_id);
            $this->db->where('report_userphone', $userphone);
            $this->db->update('report', $data);  
            return $this->db->insert_id();
        } else {
            $this->db->insert('report', $data);
            return $this->db->insert_id();
        }
    }

    public function undoReport($username,$userphone,$report_id) {
        $data=array(
            'is_reported'=> '0',
            'report_userphone'=> $userphone,
            'report_username'=> $username,
            'updated_at' => current_time()
            );
        $this->db->where('report_id', $report_id);
        $this->db->update('report', $data);
//        return $this->db->insert_id();
    }
    
    public function getReport($blog_id) {
        $userphone= $this->session->userdata('phone_number');

        $this->db->select('*');
        $this->db->from('report');
        $this->db->where('report_review_id',$blog_id);
        $this->db->where('report_userphone',$userphone);
        $query_result=$this->db->get();
      
        $blogDetails = $query_result->row_array();

        return $blogDetails;
        
    }

    
    public function apiBlogs() {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->order_by("review_id", "DESC");

        $query_result=$this->db->get();
      
        $apiBlogs = $query_result->result_array();

        return $apiBlogs;
    }

        

}