<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


    public function login()
	{
		$email= $this->input->post('email',true);
        $password= $this->input->post('password',true);
        // echo "<pre>"; print_r($email); exit;
		$result= $this->M_Login->login($email,$password);
		$user_info= array();

		if($result) {
            $user_info = [
                'user_id' => $result['user_id'],
                'fullname'   => $result['user_fullname'],
				'email'  => $result['user_email'],
				'promocode' => $result['promocode'],
				'phone_number' => $result['user_phone']
            ];
            $this->session->set_userdata($user_info);
            $data['class']='profile';
			$data['body']= $this->load->view('users/inc/profile','',true);
            $this->load->view('users/layout',$data);
		}
		else {
			$Data['message']= 'Wrong Credentials!!';
			redirect(base_url());
		}

	}


    public function logout() {
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_fullname');
		$this->session->unset_userdata('user_email');
		$Data['message']= 'Logout Successfully!!';
		$this->session->set_userdata($Data);
		redirect(base_url());
	}
    
}