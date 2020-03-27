<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Offers extends CI_Model {

	function getAllBrands(){
        
        $this->db->select('*');
		$this->db->from('brand');

		$query_result=$this->db->get();

		$allbrands = $query_result->result_array();

		return $allbrands;
	}

    function offer_entry($data) {

        // get offer category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['offer_brand']);

        $query_result=$this->db->get();
      
        $offer_category = $query_result->row_array();

        // return $offer_category; exit;


        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_brand' => $_POST['offer_brand'],
            'offer_category' => $offer_category['brand_category'],
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

        // get offer category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['offer_brand']);

        $query_result=$this->db->get();
      
        $offer_category = $query_result->row_array();


        $offer_id= $this->input->post('offer_id',true);
        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_brand' => $_POST['offer_brand'],
            'offer_category' => $offer_category['brand_category'],
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

        // get offer category by querying
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where("brand_name", $_POST['offer_brand']);

        $query_result=$this->db->get();
      
        $offer_category = $query_result->row_array();


        $offer_id= $this->input->post('offer_id',true);
        $data = array(
            'offer_name' => $_POST['offer_name'],
            'offer_details' => $_POST['offer_details'],
            'offer_brand' => $_POST['offer_brand'],
            'offer_category' => $offer_category['brand_category'],
            'offer_isFeatured' => $_POST['offer_isFeatured'],
            'offer_updated_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('offer_id',$offer_id);
        $this->db->update('offer', $data);
        return $this->db->insert_id();
    }

}
