<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {


    public function login()
	{
		$email= $this->input->post('email',true);
        $password= md5($this->input->post('password',true));
        // echo "<pre>"; print_r($email); exit;
		$result= $this->M_Login->login($email,$password);
		$user_info= array();

		if($result) {
            $user_info = [
                'user_id' => $result['user_id'],
                'fullname'   => $result['user_fullname'],
				'email'  => $result['user_email'],
				'promocode' => $result['promocode'],
				'phone_number' => $result['user_phone'],
				'password' => $result['user_password'],
				'user_type' => $result['user_isApproved'],
				'user_profile_pic' => $result['user_profile_pic'],
				'isLoggedin' => TRUE
            ];
            if($user_info['user_type']== 1 || $user_info['user_type']== 10) {
                $this->session->set_userdata($user_info);
                $data['class']='profile';
    			$data['body']= $this->load->view('users/inc/profile','',true);
    			$this->load->view('users/layout',$data);
    			redirect('/user/profile/home');
            }
            else {
                $this->session->set_flashdata('notification_error', 'Your Account is not Activated Yet!');
			    redirect(base_url());
            }
		}
		else {
			$this->session->set_flashdata('notification_error', 'Please enter correct Username and Password!');
			redirect(base_url());
		}
	}

	public function update() {
		$data['body']= $this->load->view('users/updateUser','',true);
	    $this->load->view('users/layout',$data);
	}

    public function logout() {
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('promocode');
		$this->session->unset_userdata('phone_number');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('user_type');
		$this->session->unset_userdata('user_profile_pic');
		$this->session->unset_userdata('isLoggedin');
		$this->session->sess_destroy();
		redirect(base_url());
	}
    
}