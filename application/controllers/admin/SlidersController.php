<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SlidersController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }

	public function add() {
        $data['body']=$this->load->view('admin/SlidersCreate','',true);
        $this->load->view('admin/layout',$data);
    }
    
    
    public function store() {
        // echo "<pre>"; print_r($_POST); exit();

        $this->load->library('upload');
        $data = array();
        
            $_FILES['file']['name']       = $_FILES['slider_image']['name'];
            $_FILES['file']['type']       = $_FILES['slider_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['slider_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['slider_image']['error'];
            $_FILES['file']['size']       = $_FILES['slider_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/sliders_picture';
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
                $uploadImgData['slider_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Sliders->sliders_entry($imageData['file_name']);              
                }
            }
            $this->session->set_flashdata('notification', 'Slider added successfully');
            redirect('admin/SlidersController/viewAll', 'refresh');
    }
    
    public function viewAll() {
        $data['allSlider']=$this->M_Sliders->allSlider();
        $data['body']=$this->load->view('admin/SlidersAll',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function editSlider($id) {
        $data['editSlider']=$this->M_Sliders->editSlider($id);
        $data['body']=$this->load->view('admin/SlidersEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function updateSlider() {
        // echo "<pre>"; print_r($_POST); exit();

        if (!empty($_FILES['slider_image']['name'])) {
            $this->load->library('upload');
            $data = array();
            $_FILES['file']['name']       = $_FILES['slider_image']['name'];
            $_FILES['file']['type']       = $_FILES['slider_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['slider_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['slider_image']['error'];
            $_FILES['file']['size']       = $_FILES['slider_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/sliders_picture';
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
                $uploadImgData['slider_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Sliders->sliders_update($imageData['file_name']);             
                }
            }

        }

        else {
            $this->M_Sliders->sliders_update_only_text();
        }
            $this->session->set_flashdata('notification', 'Slider updated successfully');
            redirect('admin/SlidersController/viewAll', 'refresh');
    }
    
    public function deleteSlider($id) {
        $this->M_Sliders->deleteSlider($id);
        $this->session->set_flashdata('notification', 'Slider deleted successfully');
        redirect('admin/SlidersController/viewAll', 'refresh');
    }

    public function sell() {
        $data['body']=$this->load->view('admin/BrandsSell','',true);
        $this->load->view('admin/layout',$data);
    }
    
    public function sell_entry() {
        // echo "<pre>"; print_r($_POST); exit;
        $this->M_Brands->sell_entry();
        $this->session->set_flashdata('notification', 'Sold successfully');
        redirect('admin/BrandsController/sell', 'refresh');
    }
    
}