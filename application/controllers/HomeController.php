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

	public function apiHomeSliders(){
		header('Content-type: application/json; charset=UTF-8');
		$apiHomeSliders = $this->M_home->apiHomeSliders();

		// foreach($apiBlogs as $blog) {
		//     echo 'http://studbd.com/assets/assets_user/review_image/'.$blog['review_image'];
		// }

		echo json_encode($apiHomeSliders);
	}
	
	public function apiCategorySliders($cat_name){
		header('Content-type: application/json; charset=UTF-8');
		$apiCategorySliders = $this->M_home->apiCategorySliders($cat_name);
		echo json_encode($apiCategorySliders);
	}

	public function apiHomeOffers(){
		header('Content-type: application/json; charset=UTF-8');
		$apiHomeOffers = $this->M_home->apiHomeOffers();


		echo json_encode($apiHomeOffers);
	}

	public function apiCategoryOffers($cat_name){
		header('Content-type: application/json; charset=UTF-8');
		$apiCategoryOffers = $this->M_home->apiCategoryOffers($cat_name);
		echo json_encode($apiCategoryOffers);
	}
	
	
	public function blogDetails($review_id)
	{
		$data['class']='home';
		$data['url']='blog-details';
		$data['blogDetails']= $this->M_home->blogDetails($review_id);
		$data['isReported']= $this->M_home->blogIsReportedByUser($review_id);
		// echo "<pre>"; print_r($data['isReported']); exit();
		$data['body']= $this->load->view('users/blog-details',$data,true);
		$this->load->view('users/layout',$data);
	}
	
	
	public function notFound()
	{
		$data['class']='home';
		$data['body']= $this->load->view('users/errorNotFound','',true);
		$this->load->view('users/layout',$data);
	}
	
	
	public  function apiAllBrands(){
        header('Content-type: application/json; charset=UTF-8');
        $apiAllBrands = $this->M_Brands->apiAllBrands();

        echo json_encode($apiAllBrands);
    }
    
}
