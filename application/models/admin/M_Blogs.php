<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blogs extends CI_Model {


    public function allBlogs() {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
        $this->db->join('user', 'user.user_phone = review.review_user_phone');
        $this->db->join('report', 'report.report_review_id = review.review_id');
        $this->db->order_by("review_id", "desc");
        $query_result=$this->db->get();
      
        $allBlogs = $query_result->result_array();

        return $allBlogs;
    }

    public function editBrand($id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where("brand_id", $id);

        $query_result=$this->db->get();
      
        $editBrand = $query_result->row_array();

        return $editBrand;
    }

    public function deleteBlog($id) {
        $this->db->where('review_id',$id);
        $this->db->delete('review');
    }

}