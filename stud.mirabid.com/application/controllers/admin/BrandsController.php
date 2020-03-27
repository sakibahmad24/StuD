<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BrandsController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }


	public function add() {
        $data['body']=$this->load->view('admin/BrandsCreate','',true);
        $this->load->view('admin/layout',$data);
    }

    public function store() {

        $this->load->library('upload');
        $data = array();
        
            $_FILES['file']['name']       = $_FILES['brand_image']['name'];
            $_FILES['file']['type']       = $_FILES['brand_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['brand_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['brand_image']['error'];
            $_FILES['file']['size']       = $_FILES['brand_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/brands_picture';
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
                $uploadImgData['brand_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Brands->brands_entry($imageData['file_name']);              
                }
            }
            $this->session->set_flashdata('notification', 'Brand added successfully');
            redirect('admin/BrandsController/viewAll', 'refresh');
    }

    public function viewAll() {
        $data['allBrands']=$this->M_Brands->allBrands();
        $data['body']=$this->load->view('admin/BrandsAll',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function deleteBrand($id) {
        $this->M_Brands->deleteBrand($id);
        $this->session->set_flashdata('notification', 'Brand deleted successfully');
        redirect('admin/BrandsController/viewAll', 'refresh');
    }

    public function editBrand($id) {
        $data['editBrand']=$this->M_Brands->editBrand($id);
        $data['body']=$this->load->view('admin/BrandsEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function updateBrand() {
        // echo "<pre>"; print_r($_POST); exit();

        if (!empty($_FILES['brand_image']['name'])) {
            $this->load->library('upload');
            $data = array();
            $_FILES['file']['name']       = $_FILES['brand_image']['name'];
            $_FILES['file']['type']       = $_FILES['brand_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['brand_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['brand_image']['error'];
            $_FILES['file']['size']       = $_FILES['brand_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/brands_picture';
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
                $uploadImgData['brand_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Brands->brands_update($imageData['file_name']);             
                }
            }

        }

        else {
            $this->M_Brands->brands_update_only_text();
        }
            $this->session->set_flashdata('notification', 'Brands updated successfully');
            redirect('admin/BrandsController/viewAll', 'refresh');
    }

    public function sell() {
        $data['allbrands'] = $this->M_Offers->getAllBrands();
        $data['body']=$this->load->view('admin/BrandsSell',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function sell_entry() {
        // echo "<pre>"; print_r($_POST); exit;
        $this->M_Brands->sell_entry();
        $this->session->set_flashdata('notification', 'Sold successfully');
        redirect('admin/BrandsController/sell', 'refresh');
    }
    
}