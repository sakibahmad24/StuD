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
            $result = $this->M_AdminRegistration->entry_profile_pic($imageData['file_name'], $phone_user_check);              
        }
    }
    
  }

    
    public function registration() {

    //   echo "<pre>"; print_r($_POST); exit;
        
      $user_reg_info = array(
          'user_fullname'=>$this->input->post('name'),
          'user_email'=>$this->input->post('email'),
          'user_phone'=>$this->input->post('phone'),
          'user_isApproved'=>$this->input->post('user_isApproved'),
          'user_password'=>md5($this->input->post('password')),
          'user_created_at'=> current_time()
        );
        
      $phone_user = $user_reg_info['user_phone'];
      $phone_check=$this->M_AdminRegistration->phone_check($user_reg_info['user_phone']);  

      if($phone_check){
        $this->M_AdminRegistration->register_user($user_reg_info,$promocode);
        $this->uploadProfilePic($phone_user);
        $this->session->set_flashdata('notification', 'Registered successfully.');
        redirect('/admin/ManageUserController/viewAllAdmins');
      }
      else{
        $this->session->set_flashdata('notification_error', 'This phone number is already in use.');
        redirect('/admin/ManageUserController/viewAllAdmins');
       
      }
        $this->session->set_flashdata('notification_error', 'Error occured,Try again.');
        redirect('/admin/ManageUserController/viewAllAdmins');
        
    }    
    
    
    public function updateAdmin() {
        // echo "<pre>"; print_r($_POST); exit();

        if (!empty($_FILES['profile_pic']['name'])) {
            $this->load->library('upload');
            $data = array();
            $_FILES['file']['name']       = $_FILES['profile_pic']['name'];
            $_FILES['file']['type']       = $_FILES['profile_pic']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['profile_pic']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['profile_pic']['error'];
            $_FILES['file']['size']       = $_FILES['profile_pic']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/assets_user/profile_pic';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '60000';
            $config['overwrite']     = FALSE;

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                $uploadImgData['profile_pic'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_AdminRegistration->admins_update($imageData['file_name']);             
                }
            }

        }

        else {
            $this->M_AdminRegistration->admins_update_only_text();
        }
            $this->session->set_flashdata('notification', 'Admin information updated successfully');
            redirect('admin/ManageUserController/viewAllAdmins', 'refresh');
    }


    public function resetPassword() {
      $data['body']= $this->load->view('admin/resetPassword','',true);
      $this->load->view('admin/layout',$data);
    }
    
    public function updatePassword() {
      $password= $_POST['password'];
      $confirm_password= $_POST['confirm_password'];

      if($password == $confirm_password) {
          $this->M_Registration->updatePassword($password);
          $this->session->set_flashdata('notification', 'Password has been updated');
          redirect('admin/RegistrationController/resetPassword/', 'refresh');
          // $data['body']= $this->load->view('admin/resetPassword','',true);
          // $this->load->view('admin/layout',$data);
      } 
      else {
        $this->session->set_flashdata('notification_error', 'Password does not match!');
        redirect('admin/RegistrationController/resetPassword/', 'refresh');
        // $data['body']= $this->load->view('admin/resetPassword','',true);
        // $this->load->view('admin/layout',$data);
      }

    }
    
    
}