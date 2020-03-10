<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

public function blogs() {
    $data['class']='home';
    $data['body']= $this->load->view('users/blog',$data,true);
	$this->load->view('users/layout',$data);
}
	
    
}