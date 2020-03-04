<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

    function __construct() {
        parent::__construct();
        //   if($this->session->userdata('user_id')){
        //      redirect('/');
        //   }
       }

       public function promocode(){

            $data['class']='profile';
            $data['body']= $this->load->view('users/inc/promocode','',true);
            $this->load->view('users/layout',$data);
       }

       public function review($review_id){
            $data['review_details']=$this->M_Profile->review_details($review_id);
            $data['class']='profile';
            $data['body']= $this->load->view('users/inc/review',$data,true);
            $this->load->view('users/layout',$data);
       }

       public function history(){

            $phone_number = $this->session->userdata('phone_number');
            $data['class']='profile';
            $data['purchase_history'] = $this->M_Profile->getHistory($phone_number);

            $data['body']= $this->load->view('users/inc/history',$data,true);
            $this->load->view('users/layout',$data);
    }

    public function write_review($sale_id){
               
           $data['class']='profile';
           $data['sale_id'] = $sale_id;
           $data['body']= $this->load->view('users/inc/write_review',$data,true);
           $this->load->view('users/layout',$data);

    }

    public function save_review(){
               
          $data['class']='profile';

           $phone_number = $this->session->userdata('phone_number');
           
           $this->load->library('upload');
           
        
            $_FILES['file']['name']       = $_FILES['image']['name'];
            $_FILES['file']['type']       = $_FILES['image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['image']['error'];
            $_FILES['file']['size']       = $_FILES['image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/assets_user/review_image';
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
                $uploadImgData['image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Profile->review_entry($imageData['file_name'], $phone_number);
                }
            }

          //   $this->session->set_flashdata('notification', 'Review added successfully');
          //   redirect('admin/BrandsController/add', 'refresh');

           $data['body']= $this->load->view('users/inc/review_history','',true);
           $this->load->view('users/layout',$data);

    }

    public function review_history(){

     $phone_number = $this->session->userdata('phone_number');
     $data['class']='profile';
     $data['review_history'] = $this->M_Profile->get_review_history($phone_number);

     $data['body']= $this->load->view('users/inc/review_history',$data,true);
     $this->load->view('users/layout',$data);
}

    






    
    
}