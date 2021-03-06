<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }

	

	// public function dashboard()
	// {
	// 	$email= $this->input->post('email',true);
    //     $password= md5($_POST['password']);
    //     // echo "<pre>"; print_r($email); exit;
	// 	$result= $this->M_Login->login($email,$password);
	// 	$user_info= array();

	// 	if($result) {
    //         $user_info = [
    //             'user_id' => $result['user_id'],
    //             'fullname'   => $result['user_fullname'],
    //             'email'  => $result['user_email'],
    //             'usertype'  => $result['user_isApproved'],
    //         ];
    //         $this->session->set_userdata($user_info);

	// 		$data['body']= $this->load->view('admin/home','',true);
	// 		$this->load->view('admin/layout',$data);
	// 		redirect('admin/home');
	// 	}
	// 	else {
	// 		redirect(base_url('admin/login/xyz'));
	// 	}
	// }
	
	public function home() {

	    $data['count_all_users'] = $this->M_AdminRegistration->getAllUserCount();
        $data['count_all_active_users'] = $this->M_AdminRegistration->getAllActiveUserCount();
        $data['count_all_new_users'] = $this->M_AdminRegistration->getAllNewUserCount();
        $data['count_all_total_sale'] = $this->M_AdminRegistration->getSaleCount();
        $data['count_all_brands'] = $this->M_AdminRegistration->getBrandsCount();
        $data['count_all_reviews'] = $this->M_AdminRegistration->getReviewsCount();
        $data['count_all_offers'] = $this->M_AdminRegistration->getOffersCount();
        $data['count_all_active_offers'] = $this->M_AdminRegistration->getActiveOffersCount();




        $data['body']= $this->load->view('admin/home',$data,true);
		$this->load->view('admin/layout',$data);
	}
    
}