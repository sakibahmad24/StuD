<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OfferController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }

	public function add() {
        $data['body']=$this->load->view('admin/offerCreate','',true);
        $this->load->view('admin/layout',$data);
    }
    
    
    public function store() {
        // echo "<pre>"; print_r($_POST); exit();

        $this->load->library('upload');
        $data = array();
        
            $_FILES['file']['name']       = $_FILES['offer_image']['name'];
            $_FILES['file']['type']       = $_FILES['offer_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['offer_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['offer_image']['error'];
            $_FILES['file']['size']       = $_FILES['offer_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/offers_picture';
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
                $uploadImgData['offer_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Offers->offer_entry($imageData['file_name']);              
                }
            }
            
            $this->session->set_flashdata('notification', 'Offer added successfully');
            redirect('admin/OfferController/viewAll', 'refresh');
    }
    
    public function viewAll() {
        $data['allOffer']=$this->M_Offers->allOffer();
        $data['body']=$this->load->view('admin/OffersAll',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function editOffer($id) {
        $data['editOffer']=$this->M_Offers->editOffer($id);
        $data['body']=$this->load->view('admin/OffersEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function updateOffer() {
        // echo "<pre>"; print_r($_POST); exit();

        if (!empty($_FILES['offer_image']['name'])) {
            $this->load->library('upload');
            $data = array();
            $_FILES['file']['name']       = $_FILES['offer_image']['name'];
            $_FILES['file']['type']       = $_FILES['offer_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['offer_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['offer_image']['error'];
            $_FILES['file']['size']       = $_FILES['offer_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/offers_picture';
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
                $uploadImgData['offer_image'] = $imageData['file_name'];
                 // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                 if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Offers->offers_update($imageData['file_name']);             
                }
            }

        }

        else {
            $this->M_Offers->offers_update_only_text();
        }
            $this->session->set_flashdata('notification', 'Offer updated successfully');
            redirect('admin/OfferController/viewAll', 'refresh');
    }
    
    public function deleteOffer($id) {
        $this->M_Offers->deleteOffer($id);
        $this->session->set_flashdata('notification', 'Offer deleted successfully');
        redirect('admin/OfferController/viewAll', 'refresh');
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