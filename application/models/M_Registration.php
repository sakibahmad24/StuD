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

      public function register_user($data)
      {
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_password'=>$_POST['password'],
                  'user_created_at' => $data['user_created_at']
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

}