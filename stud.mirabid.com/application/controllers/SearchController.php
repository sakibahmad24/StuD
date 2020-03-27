<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchController extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    
  }

	public function search()
	{
		$searchData= $this->input->get('search',true);

		$data['class']='home';


		$config['base_url']= base_url()."SearchController/search";
		$config['uri_segment']= 2;
		$config['per_page']= 12;
		$config['reuse_query_string'] = true;
		$config['total_rows']= $this->M_Search->review_total_number_of_rows($searchData);
		
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
		
		$page= $this->uri->segment(2,0);
		$this->pagination->initialize($config);
		
		$data['pagination']= $this->pagination->create_links();


		$data['allResults']= $this->M_Search->allResults($searchData,$config['per_page'],$page);
		$data['avgReview']= $this->M_Search->avgReview($searchData);
        // echo $data['avgReview']; exit;
        // echo $avgReview; exit;
		$data['body']= $this->load->view('users/search',$data,true);
		$this->load->view('users/layout',$data);
	}
	
    
}