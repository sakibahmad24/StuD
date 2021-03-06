<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Registration extends CI_Model {

    public function phone_check($phone_check){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_phone',$phone_check);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }
      
      public function email_check($email_check){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_email',$email_check);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
      }

      public function register_user($data,$promocode)
      {
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_university'=>$_POST['university'],
                  'user_isApproved'=> 0,
                  'promocode'=>$promocode,
                  'user_password'=>md5( $_POST['password']),
                  'user_created_at' => current_time(),
                  );

          return $this->db->insert('user', $data);
      }

      public function entry_profile_pic($data, $phone_user_check)
      {
      	$data = array(
              'user_profile_pic' => $data,
			  'user_profile_pic_url' => base_url('/assets/assets_user/profile_pic/').$data
          );
         
          $this->db->update('user', $data, array('user_phone' => $phone_user_check));
          return $this->db->insert_id();
      }

      public function entry_sid_pic($data, $phone_user_check)
      {
          $data = array(
              'user_sid_pic' => $data,
			  'user_sid_pic_url' => base_url('/assets/assets_user/sid_pic/').$data
          );
         
          $this->db->update('user', $data, array('user_phone' => $phone_user_check));
          return $this->db->insert_id();
      }

      public function update_user($data)
      {
          $user_id= $this->input->post('user_id');
          $pass= $this->input->post('password');
          
          if($pass) {
              $pass= md5($this->input->post('password'));
          } else {
              $pass= $this->session->userdata('password');
          }
          
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_isApproved'=> 1,
                  'user_status'=> 1,
                  'user_password'=>$pass,
                  'user_modified_at' => current_time(),
                  );

          return $this->db->where('user_id', $user_id)->update('user', $data);
      }

      public function update_profile_pic($data)
      {     
          $user_id= $this->input->post('user_id');
        //   echo $user_id; exit;
          $data = array(
              'user_profile_pic' => $data,
              'user_profile_pic_url' => base_url('/assets/assets_user/profile_pic/').$data,
              'user_modified_at'=> current_time()
          );
          $this->db->where('user_id', $user_id)->update('user', $data);
        //   echo $this->db->last_query(); exit;
      }

      public function update_sid_pic($data)
      {
          $user_id= $this->input->post('user_id');
          $data = array(
              'user_sid_pic' => $data,
              'user_sid_pic_url' => base_url('/assets/assets_user/sid_pic/').$data,
              'user_modified_at'=> current_time()
          );
          $this->db->where('user_id', $user_id)->update('user', $data);
      }
      

      //   Reset admin/seller password
      public function updatePassword($password)
      {
          $user_id= $this->input->post('user_id');

          $password=array(
            'user_password'=>md5($_POST['password']),
            'user_modified_at' => current_time(),
            );

          return $this->db->where('user_id', $user_id)->update('user', $password);
          echo $this->db->last_query(); exit;
      }
      
      
      public function updateInfo($email)
    	{
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_email',$email);
            $query_result= $this->db->get();
            $result= $query_result->row_array();
            return $result;
        }
      
      public function app_update_user($data)
      {   
          $pass= $_POST['password'];
          
          if($pass) {
              $data=array(
                  'user_id'=>$_POST['user_id'],
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_isApproved'=> 1,
                  'user_status'=> 1,
                  'user_password'=> md5($pass),
                  'user_modified_at' => current_time(),
                  );
                return $this->db->where('user_id', $data['user_id'])->update('user', $data);
          } else {
              $data=array(
                  'user_id'=>$_POST['user_id'],
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_isApproved'=> 1,
                  'user_status'=> 1,
                  'user_modified_at' => current_time(),
                  );
                return $this->db->where('user_id', $data['user_id'])->update('user', $data);
          }
          
      }
      
      public function appGetUserInfo($user_id)
      {   
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
          
      }

      public function getAllUniversities(){

        $this->db->select('*');
        $this->db->from('university');
        $this->db->order_by("university_name", "asc");

        $query_result=$this->db->get();

        $allUniv = $query_result->result_array();

        return $allUniv;

      }

}
