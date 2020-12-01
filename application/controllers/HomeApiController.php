<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeApiController extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Accept: application/json');
		header('Content-Type: application/json');
	}
    
    
    public function shops($cat) {
        $catblog= $this->M_Shop->catblog($cat);
        $catSlider=$this->M_Shop->catSlider($cat);
        $catOffer=$this->M_Shop->catOffer($cat);
        $sendData= array_merge(array('categorySlider'=>$catSlider),array('categoryBlogs'=>$catblog),array('categoryOffer'=>$catOffer));
        echo json_encode($sendData);
    }
    
    
    public function apiSearch()
	{
		$searchData= $this->input->post('search',true);
		$allResults= $this->M_Search->apiAllResults($searchData);
		$totalRows=  $this->M_Search->review_total_number_of_rows($searchData);
		$avgReview=  $this->M_Search->avgReview($searchData);
		echo json_encode(array_merge(array('totalRows'=>$totalRows),array('averageReview'=>$avgReview),array('searchResult'=>$allResults)));
	}


    
    
}