<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Offers extends CI_Model {

    function offer_entry($data) {
        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_isFeatured' => $_POST['offer_isFeatured'],
            'offer_image' => $data,
            'offer_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->insert('offer', $data);
        return $this->db->insert_id();
    }

    public function sell_entry() {
        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $this->db->insert('sale',$data);
    }

    public function allOffer() {
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->order_by("offer_id", "DESC");

        $query_result=$this->db->get();
      
        $allOffer = $query_result->result_array();

        return $allOffer;
    }

    public function deleteOffer($id) {
        $this->db->where('offer_id',$id);
        $this->db->delete('offer');
    }
    
    public function editOffer($id) {
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->where("offer_id", $id);

        $query_result=$this->db->get();
      
        $editOffer = $query_result->row_array();

        return $editOffer;
    }

    function offers_update($data) {
        $offer_id= $this->input->post('offer_id',true);
        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_isFeatured' => $_POST['offer_isFeatured'],
            'offer_image' => $data,
            'offer_updated_at' => current_time()
        );    
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('offer_id',$offer_id);
        $this->db->update('offer', $data);
        return $this->db->insert_id();
    }
    
    function offers_update_only_text() {
        $offer_id= $this->input->post('offer_id',true);
        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_isFeatured' => $_POST['offer_isFeatured'],
            'offer_updated_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('offer_id',$offer_id);
        $this->db->update('offer', $data);
        return $this->db->insert_id();
    }

}