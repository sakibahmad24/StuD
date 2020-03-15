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
		$data['homeblog']= $this->M_home->homeblog();
		$data['homesliders']= $this->M_home->homesliders();
		$data['homeoffers'] = $this->M_home->homeoffers();
// 		echo "<pre>"; print_r($data['homesliders']); exit();
		$data['body']= $this->load->view('users/home',$data,true);
		$this->load->view('users/layout',$data);
	}
	
	
	public function blogDetails($review_id)
	{
		$data['class']='home';
		$data['url']='blog-details';
		$data['blogDetails']= $this->M_home->blogDetails($review_id);
		// echo "<pre>"; print_r($data['blogDetails']); exit();
		$data['body']= $this->load->view('users/blog-details',$data,true);
		$this->load->view('users/layout',$data);
	}
	
    
}