<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

public function blogs() {
    $data['class']='home';
    
    $config['base_url']= base_url()."BlogController/blogs";
    $config['uri_segment']= 3;
    $config['per_page']= 12;
    $config['total_rows']= $this->M_home->blogs_total_number_of_rows();
    
    $config['full_tag_open']= '<ul class="pagination">';
    $config['full_tag_close']= '</ul>';
    $config['next_tag_open']= '<li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">';
    $config['next_tag_close']= '</span></a></li>';
    $config['prev_tag_open']= '<li class="page-item"><a class="page-link" aria-label="Previous"><span aria-hidden="true">';
    $config['prev_tag_close']= '</span></a></li>';
    $config['num_tag_open']= '<li class="page-item"><a class="page-link">';
    $config['num_tag_close']= '</a></li>';
    $config['cur_tag_open']= '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close']= '</a></li>';
    
    $page= $this->uri->segment(3,0);
    $this->pagination->initialize($config);
    
    $data['pagination']= $this->pagination->create_links();
    $data['blogs']= $this->M_home->blogs($config['per_page'],$page);
    $data['body']= $this->load->view('users/blog',$data,true);
	$this->load->view('users/layout',$data);
}

// public function report($id) {
//     $username=  $this->session->userdata('fullname');
//     $blog_id= $id;
//     $this->M_home->report($blog_id,$username);
//     redirect('users/blog-details', 'refresh');
//     // $data['body']= $this->load->view('users/blog-details','',true);
// 	// $this->load->view('users/layout',$data);
// }

public function report($id) {
    $username=  $this->session->userdata('fullname');
    $userphone= $this->session->userdata('phone_number');
    $blog_id= $id;
    $data=$this->M_home->report($username,$userphone,$blog_id);
    // echo "<pre>"; print_r($data); exit;
    
}

public function undoReport($id) {
    $username=  $this->session->userdata('fullname');
    $userphone= $this->session->userdata('phone_number');
    $report_id= $id;
    $this->M_home->undoReport($username,$userphone,$report_id);
}

public function getReport($id) {

    $blog_id= $id;
    $getReport= $this->M_home->getReport($blog_id);

    if($this->session->userdata('isLoggedin')) { 
        if($getReport['is_reported']=== '1') {
            $button= '<a onclick="undoReport(' .$getReport['report_id']. ','.$blog_id.')"
              style="cursor:pointer;color:red;margin:5px;padding:5px;border:1px solid red;border-radius:5px;">
              Undo Report
            </a>';
        } else { 
            $button= '<a onclick="report(' .$blog_id. ')" 
            style="cursor:pointer;color:red;margin:5px;padding:5px;border:1px solid red;border-radius:5px;">
            Report
          </a>';
       }
    }

    $reportBody= '<center>' . $button . '</center>';


    echo json_encode($reportBody);
    // echo "<pre>"; print_r($getReport); exit;

}

public function apiBlogs() {
    header('Content-type: application/json; charset=UTF-8');
    $apiBlogs = $this->M_home->apiBlogs();
    echo json_encode($apiBlogs);
}
	
    
}