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

      public function register_user($data,$promocode)
      {
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
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
              'user_profile_pic' => $data
          );
         
          $this->db->update('user', $data, array('user_phone' => $phone_user_check));
          return $this->db->insert_id();
      }

      public function entry_sid_pic($data, $phone_user_check)
      {
          $data = array(
              'user_sid_pic' => $data
          );
         
          $this->db->update('user', $data, array('user_phone' => $phone_user_check));
          return $this->db->insert_id();
      }

      public function update_user($data)
      {
          $user_id= $this->input->post('user_id');
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_isApproved'=> 1,
                  'user_status'=> 1,
                  'user_password'=>md5($_POST['password']),
                  'user_modified_at' => current_time(),
                  );

          return $this->db->where('user_id', $user_id)->update('user', $data);
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

}