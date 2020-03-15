<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUserController extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $loggedin = $this->session->userdata('user_id');
        if (!isset($loggedin) or $loggedin == '') {
            redirect('/');
        }
    }


	public function addAdmin() {
        $data['body']=$this->load->view('admin/UsersAdminCreate','',true);
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

    public function viewAllAdmins() {
        $data['allAdmins']=$this->M_ManageUser->allAdmins();
        $data['body']=$this->load->view('admin/UsersAdminAll',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function pendingUsersList() {
        $data['allPendingUser']=$this->M_ManageUser->allPendingUser();
        $data['body']=$this->load->view('admin/UsersPendingAll',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function approvedUsersList() {
        $data['allapprovedUser']=$this->M_ManageUser->allapprovedUser();
        $data['body']=$this->load->view('admin/UsersApprovedAll',$data,true);
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
        $data['body']=$this->load->view('admin/BrandsSell','',true);
        $this->load->view('admin/layout',$data);
    }
    
    public function sell_entry() {
        // echo "<pre>"; print_r($_POST); exit;
        $this->M_Brands->sell_entry();
        $this->session->set_flashdata('notification', 'Sold successfully');
        redirect('admin/BrandsController/sell', 'refresh');
    }
    
    public function deleteUser($id) {
        $this->M_AdminRegistration->deleteUser($id);
		$this->session->set_flashdata('notification', 'Admin deleted successfully');
        redirect('admin/ManageUserController/viewAllAdmins', 'refresh');
        
    }
    
    public function deletePendingUser($id) {
        $this->M_AdminRegistration->deleteUser($id);
		$this->session->set_flashdata('notification', 'Pending user requested deleted successfully');
        redirect('admin/ManageUserController/pendingUsersList', 'refresh');
        
    }
    
    public function deleteApprovedUser($id) {
        $this->M_AdminRegistration->deleteUser($id);
		$this->session->set_flashdata('notification', 'Approved User deleted successfully');
        redirect('admin/ManageUserController/approvedUsersList', 'refresh');
        
    }

    public function editUser($id) {
        $data['editUser']=$this->M_ManageUser->editUser($id);
        $data['body']=$this->load->view('admin/UsersAdminEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function editPendingUser($id) {
        $data['editUser']=$this->M_ManageUser->editUser($id);
        $data['body']=$this->load->view('admin/UsersEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function editApprovedUser($id) {
        $data['editUser']=$this->M_ManageUser->editUser($id);
        $data['body']=$this->load->view('admin/UsersEdit',$data,true);
        $this->load->view('admin/layout',$data);
    }
    
    public function updateUser() {
        $id= $this->input->post('id');
        $status= $this->input->post('status');
        if($status==1) {
            $this->M_ManageUser->updateUser($id);
            $this->session->set_flashdata('notification', 'User has been approved successfully');
            redirect('admin/ManageUserController/pendingUsersList', 'refresh');
        } else if($status==0) {
            $this->M_ManageUser->updateUser($id);
            $this->session->set_flashdata('notification', 'User has been disapproved successfully');
            redirect('admin/ManageUserController/approvedUsersList', 'refresh');
        }    
    }
    
}