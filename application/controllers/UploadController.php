<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
                // $this->load->helper(array('form', 'url'));
            date_default_timezone_set('Asia/Dhaka');
            $current_time = time();
    }

    public function index(){
    
        $this->load->view('upload');
    
    }

    public function uploadPic(){

    }


}

