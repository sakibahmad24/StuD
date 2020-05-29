<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BlogsController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }


    public function viewAll() {
        $data['allBlogs']=$this->M_Blogs->allBlogs();
        // echo "<pre>"; print_r($data['allBlogs']); exit;
        $data['body']=$this->load->view('admin/BlogsAll',$data,true);
        $this->load->view('admin/layout',$data);
    }


    public function deleteBlog($id) {
        $this->M_Blogs->deleteBlog($id);
        $this->session->set_flashdata('notification', 'Blog deleted successfully');
        redirect('admin/BlogsController/viewAll', 'refresh');
    }

    public function editBrand($id) {
        $data['editBrand']=$this->M_Brands->editBrand($id);
        $data['body']=$this->load->view('admin/BrandsEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }


    
}