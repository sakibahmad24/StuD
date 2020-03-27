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
	
    
}