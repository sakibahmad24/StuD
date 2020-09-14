<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/CreatorJwt.php';

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->objOfJwt = new CreatorJwt();
		header('Access-Control-Allow-Origin: *');
		header('Accept: application/json');
		header('Content-Type: application/json');
	}


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
				'user_profile_pic_url' => $result['user_profile_pic_url'],
				'user_sid_pic' => $result['user_sid_pic'],
				'user_sid_pic_url' => $result['user_sid_pic_url'],
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

	public function appLogin()
	{
		$email= $this->input->post('email',true);
		$password= md5($this->input->post('password',true));

		$result= $this->M_Login->login($email,$password);

		if($result) {

			$user_info = [
                'user_id' => $result['user_id'],
                'fullname'   => $result['user_fullname'],
				'email'  => $result['user_email'],
				'promocode' => $result['promocode'],
				'phone_number' => $result['user_phone'],
				'user_type' => $result['user_isApproved'],
				'user_profile_pic' => $result['user_profile_pic'],
				'user_profile_pic_url' => $result['user_profile_pic_url'],
				'user_sid_pic' => $result['user_sid_pic'],
				'user_sid_pic_url' => $result['user_sid_pic_url'],
				'isLoggedin' => TRUE
            ];

			$tokenData['uniqueId'] = $result['user_id'];
			$tokenData['fullname'] = $result['user_fullname'];
			$tokenData['email'] = $result['user_email'];
			$tokenData['promocode'] = $result['promocode'];
			$tokenData['phone_number'] = $result['user_phone'];
			$tokenData['user_type'] = $result['user_isApproved'];
			$tokenData['user_profile_pic'] = $result['user_profile_pic'];
			$tokenData['user_profile_pic_url'] = $result['user_profile_pic_url'];
			$tokenData['user_sid_pic'] = $result['user_sid_pic'];
			$tokenData['user_sid_pic_url'] = $result['user_sid_pic_url'];
			$tokenData['isLoggedin'] = TRUE;
			$tokenData['timeStamp'] = Date('Y-m-d h:i:s');
			$jwtToken['Token'] = $this->objOfJwt->GenerateToken($tokenData);

			$notification['success']= true;
			$notification['message']= "Logged in successful";
			$notification['errors']= null;

			$sendData= array_merge($notification, array('data' =>  array_merge($jwtToken, array('expiresIn' => 86400), array('user' =>$user_info))));

			$user_info['user_type'] = $result['user_isApproved'];

			if($user_info['user_type']== 1 || $user_info['user_type']== 10) {
				echo json_encode($sendData);
			}
			else {
				$msg['message'] = 'Your Account is not Activated Yet!';
				echo json_encode($msg);
			}
		}
		else {
			$msg['message'] = 'Please enter correct Username and Password!';
			echo json_encode($msg);
		}
	}

	public function GetTokenData()
	{
		$received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
				echo json_encode($jwtData);
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
	}
    
}
