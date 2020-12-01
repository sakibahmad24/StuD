<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TopbarController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }

    public function add() {
        $data['allbrands'] = $this->M_Topbars->getAllBrands();
        $data['body']=$this->load->view('admin/TopbarCreate', $data, true);
        $this->load->view('admin/layout',$data);
    }


    public function store() {
        // echo "<pre>"; print_r($_POST); exit();

        $this->load->library('upload');
        $data = array();

        $_FILES['file']['name']       = $_FILES['Topbar_image']['name'];
        $_FILES['file']['type']       = $_FILES['Topbar_image']['type'];
        $_FILES['file']['tmp_name']   = $_FILES['Topbar_image']['tmp_name'];
        $_FILES['file']['error']      = $_FILES['Topbar_image']['error'];
        $_FILES['file']['size']       = $_FILES['Topbar_image']['size'];

        // File upload configuration
        $config['upload_path'] = './assets/common/Topbars_picture';
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
            $uploadImgData['Topbar_image'] = $imageData['file_name'];
            // echo "<pre>"; print_r($imageData['file_name']."<br>");
            if(!empty($uploadImgData)){
                // echo "<pre>"; print_r($_FILES); exit();
                $this->M_Topbars->Topbar_entry($imageData['file_name']);
                // print_r($data['brand_category']); exit;
            }
        }

        $this->session->set_flashdata('notification', 'Topbar added successfully');
        redirect('admin/TopbarController/viewAll', 'refresh');
    }

    public function viewAll() {
        $data['allTopbar']=$this->M_Topbars->allTopbar();
        $data['body']=$this->load->view('admin/TopbarsAll',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function editTopbar($id) {
        $data['allbrands'] = $this->M_Topbars->getAllBrands();
        // $data['body']=$this->load->view('admin/TopbarCreate', $data, true);
        $data['editTopbar']=$this->M_Topbars->editTopbar($id);
        $data['body']=$this->load->view('admin/TopbarsEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }

    public function updateTopbar() {
        // echo "<pre>"; print_r($_POST); exit();

        if (!empty($_FILES['Topbar_image']['name'])) {
            $this->load->library('upload');
            $data = array();
            $_FILES['file']['name']       = $_FILES['Topbar_image']['name'];
            $_FILES['file']['type']       = $_FILES['Topbar_image']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['Topbar_image']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['Topbar_image']['error'];
            $_FILES['file']['size']       = $_FILES['Topbar_image']['size'];

            // File upload configuration
            $config['upload_path'] = './assets/common/Topbars_picture';
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
                $uploadImgData['Topbar_image'] = $imageData['file_name'];
                // echo "<pre>"; print_r($imageData['file_name']."<br>");
                if(!empty($uploadImgData)){
                    // echo "<pre>"; print_r($_FILES); exit();
                    $this->M_Topbars->Topbars_update($imageData['file_name']);
                }
            }

        }

        else {
            $this->M_Topbars->Topbars_update_only_text();
        }
        $this->session->set_flashdata('notification', 'Topbar updated successfully');
        redirect('admin/TopbarController/viewAll', 'refresh');
    }

    public function deleteTopbar($id) {
        $this->M_Topbars->deleteTopbar($id);
        $this->session->set_flashdata('notification', 'Topbar deleted successfully');
        redirect('admin/TopbarController/viewAll', 'refresh');
    }

//    public function sell() {
//        $data['body']=$this->load->view('admin/BrandsSell','',true);
//        $this->load->view('admin/layout',$data);
//    }
//
//    public function sell_entry() {
//        // echo "<pre>"; print_r($_POST); exit;
//        $this->M_Brands->sell_entry();
//        $this->session->set_flashdata('notification', 'Sold successfully');
//        redirect('admin/BrandsController/sell', 'refresh');
//    }

}
