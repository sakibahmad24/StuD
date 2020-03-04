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
        $data['body']= $this->load->view('users/signup','',true);
		$this->load->view('users/layout',$data);
        // $this->load->view('users/layout');
    }

    public function registration() {
        
        $config['upload_path'] = './assets/assets_user/profile_pic';
        $config['allowed_types'] = 'gif|jpg|png';
        
        // $this->load->library('upload',$config);
        $this->form_validation->set_error_delimiters();
        
        if($this->upload->do_upload()) {
            global $image_path;
            $get_profile_pic= $this->input->post('profile_pic');
            $upload_profile_pic= $this->upload->data();
            $image_path= base_url("assets/assets_user/profile_pic/".$upload_profile_pic['raw_name'].$upload_profile_pic['file_ext']);
            return $image_path;
        }
        

        // date_default_timezone_set('Asia/Dhaka');
        // $current_time = time();

        // $profile_pic = $this->input->post('profile_pic');
        // $profile_pic_rename = $current_time.$profile_pic;
        // $sid_pic = $this->input->post('sid_pic');
        // $sid_pic2 = $current_time.$sid_pic;

        $user_reg_info=array(
            'user_fullname'=>$this->input->post('name'),
            'user_email'=>$this->input->post('email'),
            'user_phone'=>$this->input->post('phone'),
            'user_sid_pic'=>$this->input->post('sid_pic'),
            'user_profile_pic'=>$image_path,
            'user_password'=>md5($this->input->post('password')),
            );
            
        
          

          $phone_check=$this->M_Registration->phone_check($user_reg_info['user_phone']);  

          if($phone_check){
            $this->M_Registration->register_user($user_reg_info);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('/');
          }
          else{
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('/');
           
          }

	}
    
}