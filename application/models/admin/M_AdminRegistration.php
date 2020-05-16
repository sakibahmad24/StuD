<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AdminRegistration extends CI_Model {

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
                  'user_isApproved'=> $_POST['user_isApproved'],
                  'user_status'=> 1,
                  'user_password'=>md5($_POST['password']),
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
      
      public function register_admin($data,$promocode)
      {
          $data=array(
                  'user_fullname'=>$_POST['name'],
                  'user_email'=>$_POST['email'],
                  'user_phone'=>$_POST['phone'],
                  'user_isApproved'=> 10,
                  'user_status'=>$_POST['status'],
                  'user_modified_at' => current_time(),
                  );
                  
            $this->db->where('user_id',user_id);
            $this->db->update('user', $data);
            return $this->db->insert_id();
      }
      
      function admins_update($data) {
        $admin_id= $this->input->post('id',true);
        $data = array(
            'user_fullname'=>$_POST['name'],
            'user_email'=>$_POST['email'],
            'user_phone'=>$_POST['phone'],
            'user_status'=>$_POST['status'],
            'user_profile_pic' => $data,
            'user_modified_at' => current_time(),
        );    
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('user_id',$admin_id);
        $this->db->update('user', $data);
        return $this->db->insert_id();
    }

    function admins_update_only_text() {
        $admin_id= $this->input->post('id',true);
        $data = array(
            'user_fullname'=>$_POST['name'],
            'user_email'=>$_POST['email'],
            'user_phone'=>$_POST['phone'],
            'user_status'=>$_POST['status'],
            'user_modified_at' => current_time(),
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('user_id',$admin_id);
        $this->db->update('user', $data);
        return $this->db->insert_id();
    }

    public function deleteUser($id) {
        $this->db->where('user_id',$id);
        $this->db->delete('user');
    }

}