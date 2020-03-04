<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function login()
	{
		$this->load->view('admin/login');
    }

	public function dashboard()
	{
		$email= $this->input->post('email',true);
        $password= $this->input->post('password',true);
        // echo "<pre>"; print_r($email); exit;
		$result= $this->M_Login->login($email,$password);
		$user_info= array();

		if($result) {
            $user_info = [
                'id' => $result['user_id'],
                'fullname'   => $result['user_fullname'],
                'email'  => $result['user_email'],
            ];
			// $Data['id']=> $result['user_id'];
			// $Data['fullname']=> $result['user_fullname'];
			// $Data['email']=> $result['email'];
            $this->session->set_userdata($user_info);


			$data['body']= $this->load->view('admin/home','',true);
			$this->load->view('admin/layout',$data);
		}
		else {
			redirect(base_url('admin/login/xyz'));
		}
	}
    
}