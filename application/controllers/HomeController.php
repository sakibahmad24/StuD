<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
  }

	public function index()
	{
		$data['class']='home';
		$data['body']= $this->load->view('users/home','',true);
		$this->load->view('users/layout',$data);
		// $this->load->view('users/layout');
	}
	
    
}