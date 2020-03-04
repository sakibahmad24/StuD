<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

    public function login($email,$password)
	{
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$password);
        $query_result= $this->db->get();
        $result= $query_result->row_array();
        return $result;
    }


}