<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/CreatorJwt.php';

class RegistrationController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
            // $this->load->helper(array('form', 'url'));
        date_default_timezone_set('Asia/Dhaka');
        $current_time = time();
        $this->objOfJwt = new CreatorJwt();
    }

	public function index()
	{
		// $data['body']= $this->load->view('users/home','',true);
		// $this->load->view('users/layout',$data);
        // $this->load->view('users/layout');
        
    }

    public function signup() 
    {
        $data['class']='signup';
        $data['body']= $this->load->view('users/signup','',true);
	    $this->load->view('users/layout',$data);
        // $this->load->view('users/layout');
    }


    public function uploadProfilePic($phone_user){

      $phone_user_check = $phone_user;

      $this->load->library('upload');

      $data = array();

      $_FILES['file']['name']       = $_FILES['profile_pic']['name'];
      $_FILES['file']['type']       = $_FILES['profile_pic']['type'];
      $_FILES['file']['tmp_name']   = $_FILES['profile_pic']['tmp_name'];
      $_FILES['file']['error']      = $_FILES['profile_pic']['error'];
      $_FILES['file']['size']       = $_FILES['profile_pic']['size']; 
    
      //file upload config

      $config['upload_path'] = './assets/assets_user/profile_pic';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = '60000';
      $config['overwrite']     = FALSE;
      
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if($this->upload->do_upload('file')){
        // Uploaded file data
        $imageData = $this->upload->data();
        $uploadImgData['profile_pic'] = $imageData['file_name'];
         // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
         if(!empty($uploadImgData)){
            // echo "<pre>"; print_r($_FILES); exit();
            $result = $this->M_Registration->entry_profile_pic($imageData['file_name'], $phone_user_check);              
        }
    }
    
      // Verify the data using print_r($data); die;
      // $result = $this->M_Registration->entry_profile_pic($data, $phone_user_check);
      // if ($result) {
      //   $this->load->view('success_view');
      // } else {
      //   $this->load->view('failure_view');
      // }
  }

  public function uploadSidPic($phone_user){
    $phone_user_check = $phone_user;

    $this->load->library('upload');

    $data = array();

    $_FILES['file']['name']       = $_FILES['sid_pic']['name'];
    $_FILES['file']['type']       = $_FILES['sid_pic']['type'];
    $_FILES['file']['tmp_name']   = $_FILES['sid_pic']['tmp_name'];
    $_FILES['file']['error']      = $_FILES['sid_pic']['error'];
    $_FILES['file']['size']       = $_FILES['sid_pic']['size']; 
  
    //file upload config

    $config['upload_path'] = './assets/assets_user/sid_pic';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '60000';
    $config['overwrite']     = FALSE;
    
    
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if($this->upload->do_upload('file')){
      // Uploaded file data
      $imageData = $this->upload->data();
      $uploadImgData['sid_pic'] = $imageData['file_name'];
       // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
       if(!empty($uploadImgData)){
          // echo "<pre>"; print_r($_FILES); exit();
          $result = $this->M_Registration->entry_sid_pic($imageData['file_name'], $phone_user_check);              
      }
  }
      
  }
    
    public function registration() {

      // echo "<pre>"; print_r($_POST); exit;

    //   date_default_timezone_set("Asia/Dhaka");
    //   $dateTime = date("Y-m-d h:i:sa");
      $promocode = 'stud_'.substr(md5(microtime()), 0, 5);
        
      $user_reg_info = array(
          'user_fullname'=>$this->input->post('name'),
          'user_email'=>$this->input->post('email'),
          'user_phone'=>$this->input->post('phone'),
          'user_password'=>md5($this->input->post('password')),
          'user_created_at'=> current_time()
        );
        // UploadSidPic();
      $phone_user = $user_reg_info['user_phone'];
      $phone_check=$this->M_Registration->phone_check($user_reg_info['user_phone']);
      $email_check=$this->M_Registration->email_check($user_reg_info['user_email']);

      if($phone_check && $email_check){
        $this->M_Registration->register_user($user_reg_info,$promocode);
        $this->uploadProfilePic($phone_user);
        $this->uploadSidPic($phone_user);
        $this->session->set_flashdata('notification', 'Registered successfully. Now wait for admin approval to login.');
        redirect('/');
      }
      else{
        $this->session->set_flashdata('notification_error', 'Your phone/email is already in use.');
        redirect('/');
       
      }
        $this->session->set_flashdata('notification_error', 'Error occured,Try again.');
        redirect('/');
        
    }     
    
    
    public function updateUserInfo() {
        // echo "<pre>"; print_r($_POST); exit;
        $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]');
		$this->form_validation->set_rules('password', 'password');
		
		
		if (empty($_FILES['profile_pic']['name']))
        {
            $this->form_validation->set_rules('profile_pic', 'Profile picture', 'nullable');
        }
		
		if (empty($_FILES['sid_pic']['name']))
        {
            $this->form_validation->set_rules('sid_pic', 'Student ID', 'nullable');
        }
		

		if ($this->form_validation->run() == FALSE)
        {
            $data['body']= $this->load->view('users/updateUser','',true);
	        $this->load->view('users/layout',$data);
        }
        else
        {
         
         $pass= $this->input->post('password');
         $passCOn= $this->input->post('passwordConfirm');
         
         if($pass==$passCOn) {
             $getProfilePic= $_FILES['profile_pic']['name'];
      $getSidPic= $_FILES['sid_pic']['name'];

      if($getProfilePic) {
        $this->updateProfilePic();
      }
      
      if ($getSidPic) {
        $this->updateSidPic();
      }
        
      $user_reg_info = array(
        'user_fullname'=>$this->input->post('name'),
        'user_email'=>$this->input->post('email'),
        'user_phone'=>$this->input->post('phone'),
        'user_password'=>md5($this->input->post('password')),
        'user_modified_at'=> current_time()
      );
      $updateInfo= $this->M_Registration->update_user($user_reg_info);
      
      $email= $this->input->post('email');
      $result= $this->M_Registration->updateInfo($email);
      
      if($result) {
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('promocode');
            $this->session->unset_userdata('phone_number');
            $this->session->unset_userdata('password');
            $this->session->unset_userdata('user_type');
            $this->session->unset_userdata('user_profile_pic');
            $this->session->unset_userdata('isLoggedin');
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
        $this->session->set_userdata($user_info);    
      }
      
    //   $this->session->set_userdata($user_info);
    //   $this->session->unset_userdata($user_info);
    //   $this->session->set_userdata($user_info, $updateInfo);
      $this->session->set_flashdata('notification', 'Your information has been updated!');
      redirect('/user/profile/update');
         } 
         else {
            $this->session->set_flashdata('notification_error', "Confirm password doesn't match with password!");
            redirect('/user/profile/update');   
         }
            
        }
      
    }

    public function updateProfilePic() {

      $this->load->library('upload');

      $data = array();

      $_FILES['file']['name']       = $_FILES['profile_pic']['name'];
      $_FILES['file']['type']       = $_FILES['profile_pic']['type'];
      $_FILES['file']['tmp_name']   = $_FILES['profile_pic']['tmp_name'];
      $_FILES['file']['error']      = $_FILES['profile_pic']['error'];
      $_FILES['file']['size']       = $_FILES['profile_pic']['size']; 
    
      //file upload config

      $config['upload_path'] = './assets/assets_user/profile_pic';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = '60000';
      $config['overwrite']     = FALSE;
      
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if($this->upload->do_upload('file')){
        // Uploaded file data
        $imageData = $this->upload->data();
        $uploadImgData['profile_pic'] = $imageData['file_name'];
         // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
         if(!empty($uploadImgData)){
            // echo "<pre>"; print_r($_FILES); exit();
            $result = $this->M_Registration->update_profile_pic($imageData['file_name']);              
        }
    }
  }
    public function updateSidPic() {
  
      $this->load->library('upload');
  
      $data = array();
  
      $_FILES['file']['name']       = $_FILES['sid_pic']['name'];
      $_FILES['file']['type']       = $_FILES['sid_pic']['type'];
      $_FILES['file']['tmp_name']   = $_FILES['sid_pic']['tmp_name'];
      $_FILES['file']['error']      = $_FILES['sid_pic']['error'];
      $_FILES['file']['size']       = $_FILES['sid_pic']['size']; 
    
      //file upload config
  
      $config['upload_path'] = './assets/assets_user/sid_pic';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']      = '60000';
      $config['overwrite']     = FALSE;
      
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
  
      if($this->upload->do_upload('file')){
        // Uploaded file data
        $imageData = $this->upload->data();
        $uploadImgData['sid_pic'] = $imageData['file_name'];
         // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
         if(!empty($uploadImgData)){
            // echo "<pre>"; print_r($_FILES); exit();
            $result = $this->M_Registration->update_sid_pic($imageData['file_name']);          
        }
      }
    }





	public function appRegistration() {
	    
	    header('Access-Control-Allow-Origin: *');
		header('Accept: application/json');
		header('Content-Type: application/json');

		$promocode = 'stud_'.substr(md5(microtime()), 0, 5);
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
		if (empty($_FILES['profile_pic']['name']))
        {
            $this->form_validation->set_rules('profile_pic', 'Profile picture', 'required');
        }
		if (empty($_FILES['sid_pic']['name']))
        {
            $this->form_validation->set_rules('sid_pic', 'Student ID', 'required');
        }
		
		
		
		if ($this->form_validation->run() == FALSE)
        {
            $notify['message'] =  preg_replace("/\r\n|\r|\n/",'', strip_tags(validation_errors()));
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notify));
        }
        else
        {
            $user_reg_info = array(
              'user_fullname'=>$this->input->post('name'),
              'user_email'=>$this->input->post('email'),
              'user_phone'=>$this->input->post('phone'),
              'user_password'=>md5($this->input->post('password')),
              'user_created_at'=> current_time()
            );
            $phone_user = $user_reg_info['user_phone'];
    		$phone_check=$this->M_Registration->phone_check($user_reg_info['user_phone']);
    		$email_check=$this->M_Registration->email_check($user_reg_info['user_email']);
    
    		if($phone_check && $email_check){
    			$this->M_Registration->register_user($user_reg_info,$promocode);
    			$this->uploadProfilePic($phone_user);
    			$this->uploadSidPic($phone_user);
    			$sendData= array_merge(array('message' => 'Registered successfully. Now wait for admin approval to login.'), array('user_reg_info' =>$user_reg_info));
    			echo json_encode($sendData);
    		} else{
                $notify['message'] = 'This phone number/email is already registered in our system. Please try with new phone number.';
                $this->output->set_status_header(409)->set_content_type('application/json')->set_output(json_encode($notify));
    		}
        }
	}
    
    

    public function appUpdateProfile() {
        // echo json_encode($_POST);
        
        $received_Token = $this->input->request_headers('Authorization');
        
        try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
		   
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]');
		$this->form_validation->set_rules('password', 'password');
		

		if ($this->form_validation->run() == FALSE)
        {
            $notify['message'] =  preg_replace("/\r\n|\r|\n/",'', strip_tags(validation_errors()));
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notify));
        }
        else
        {
         
         $pass= $this->input->post('password');
         $passCOn= $this->input->post('passwordConfirm');
         
         if($pass==$passCOn) {
        
      $user_reg_info = array(
        'user_fullname'=>$this->input->post('name'),
        'user_email'=>$this->input->post('email'),
        'user_phone'=>$this->input->post('phone'),
        'user_password'=>md5($this->input->post('password')),
        'user_modified_at'=> current_time()
      );
      $updateInfo= $this->M_Registration->app_update_user($user_reg_info);
      
      $email= $this->input->post('email');
      $result= $this->M_Registration->updateInfo($email);
      
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
      }
      
            $notification['success']= true;
			$notification['message']= "Update successful";
			$notification['errors']= null;
			$sendData= array_merge($notification, array('data' => array('user' =>$user_info)));
			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($sendData));
         } 
         else {
            $notification['message']= "Error! Please fillup form properly."; 
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notification)); 
         }
            
        }
		    	
		}
        catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
        
      
    }
    
    
    public function appUpdateProfileImage() {
        // echo json_encode($_POST);
        
        $received_Token = $this->input->request_headers('Authorization');
        
        try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
		
		
		if (empty($_FILES['profile_pic']['name']))
        {
            $this->form_validation->set_rules('profile_pic', 'profile pic', 'required');
        }
		

		if ($this->form_validation->run() == FALSE)
        {
            $notify['message'] =  preg_replace("/\r\n|\r|\n/",'', strip_tags(validation_errors()));
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notify));
        }
        else
        {
            $getProfilePic= $_FILES['profile_pic']['name'];
            if($getProfilePic) {
             $this->updateProfilePic();   
            }
      
      $user_id= $this->input->post('user_id');
      $result= $this->M_Registration->appGetUserInfo($user_id);
      
      
      if($result) {
         $user_info = [
                'user_id' => $result['user_id'],
				'user_type' => $result['user_isApproved'],
				'user_profile_pic' => $result['user_profile_pic'],
				'user_profile_pic_url' => $result['user_profile_pic_url'],
				'isLoggedin' => TRUE
            ]; 
      }
      
      $user_info= "test ok";
      
            $notification['success']= true;
			$notification['message']= "Update successful";
			$notification['errors']= null;
			$sendData= array_merge($notification, array('data' => array('user' =>$user_info)));
			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($sendData));
            
        }
		    	
		}
        catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
        
      
    }
    
    public function appUpdateSIDImage() {
        // echo json_encode($_POST);
        
        $received_Token = $this->input->request_headers('Authorization');
        
        try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
		   
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[11]');
		$this->form_validation->set_rules('password', 'password');
		
		
		if (empty($_FILES['profile_pic']['name']))
        {
            $this->form_validation->set_rules('profile_pic', 'Profile picture', 'nullable');
        }
		
		if (empty($_FILES['sid_pic']['name']))
        {
            $this->form_validation->set_rules('sid_pic', 'Student ID', 'nullable');
        }
		

		if ($this->form_validation->run() == FALSE)
        {
            $notify['message'] =  preg_replace("/\r\n|\r|\n/",'', strip_tags(validation_errors()));
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notify));
        }
        else
        {
         
         $pass= $this->input->post('password');
         $passCOn= $this->input->post('passwordConfirm');
         
         if($pass==$passCOn) {
             $getProfilePic= $_FILES['profile_pic']['name'];
             $getSidPic= $_FILES['sid_pic']['name'];

      if($getProfilePic) {
        $this->updateProfilePic();
      }
      
      if ($getSidPic) {
        $this->updateSidPic();
      }
        
      $user_reg_info = array(
        'user_fullname'=>$this->input->post('name'),
        'user_email'=>$this->input->post('email'),
        'user_phone'=>$this->input->post('phone'),
        'user_password'=>md5($this->input->post('password')),
        'user_modified_at'=> current_time()
      );
      $updateInfo= $this->M_Registration->app_update_user($user_reg_info);
      
      $email= $this->input->post('email');
      $result= $this->M_Registration->updateInfo($email);
      
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
      }
      
            $notification['success']= true;
			$notification['message']= "Update successful";
			$notification['errors']= null;
			$sendData= array_merge($notification, array('data' => array('user' =>$user_info)));
			$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($sendData));
         } 
         else {
            $notification['message']= "Error! Please fillup form properly."; 
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notification)); 
         }
            
        }
		    	
		}
        catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
        
      
    }

    
    
}
