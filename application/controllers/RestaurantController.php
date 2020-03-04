<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RestaurantController extends CI_Controller {

	public function index()
	{
		$data['body']= $this->load->view('users/restaurant','',true);
		$this->load->view('users/layout',$data);
		// $this->load->view('users/layout');
	}
	
    
}