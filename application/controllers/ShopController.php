<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedIn=$this->session->userdata('user_id');
        
        // if (!isset($loggedin) or $loggedin == '') {
        //     redirect('/');
        // }
    }

public function shops() {
    $data['class']='home';
    $data['body']= $this->load->view('users/shop',$data,true);
	$this->load->view('users/layout',$data);
}
	
    
}