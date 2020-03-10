<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopController extends CI_Controller {

public function shops() {
    $data['class']='home';
    $data['body']= $this->load->view('users/shop',$data,true);
	$this->load->view('users/layout',$data);
}
	
    
}