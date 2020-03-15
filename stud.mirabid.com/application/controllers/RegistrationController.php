<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
                // $this->load->helper(array('form', 'url'));
            date_default_timezone_set('Asia/Dhaka');
            $current_time = time();
    }

	public function index()
	{
		// $data['body']= $this->load->view('users/home','',true);
		// $this->load->view('users/layout',$data);
        // $this->load->view('users/layout');
        
    }

    public function signup(){
        // echo "Thi sidasdas";
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

      if($phone_check){
        $this->M_Registration->register_user($user_reg_info,$promocode);
        $this->uploadProfilePic($phone_user);
        $this->uploadSidPic($phone_user);
        $this->session->set_flashdata('notification', 'Registered successfully.Now login to your account.');
        redirect('/');
      }
      else{
        $this->session->set_flashdata('notification_error', 'Your phone number is already in use.');
        redirect('/');
       
      }
        $this->session->set_flashdata('notification_error', 'Error occured,Try again.');
        redirect('/');
        
    }      
    
    
}