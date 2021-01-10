<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Brands extends CI_Model {



    function getAllBrands(){
        
        $this->db->select('*');
		$this->db->from('brand');

		$query_result=$this->db->get();

		$allbrands = $query_result->result_array();

		return $allbrands;
	}


    function brands_entry($data) {
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_active' => $_POST['brand_active'],
            'brand_store_location' => $_POST['brand_store_location'],
            'brand_image' => $data,
            'brand_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->insert('brand', $data);
        return $this->db->insert_id();
    }
    

    public function sell_entry() {

        $this->db->select('promocode');
        $this->db->from('user');
        $this->db->where('user_phone', $_POST['phone']);

        $phone_result=$this->db->get();
      
        $check_phone = $phone_result->row_array();

        $this->db->select('*');
        $this->db->from('sale');
        $this->db->where('sale_promocode', $_POST['promocode']);
        $this->db->order_by("sale_id", "DESC");


        $promo_res = $this->db->get();
        $check_promo = $promo_res->result_array();


        $same_brand_last_sale_time = '';

        //getter for last sale time of the same brand
        foreach ($check_promo as $get_same_sale_time){
            if ($get_same_sale_time['sale_brand_name'] == $_POST['brand_name']){

                $same_brand_last_sale_time = $get_same_sale_time['sale_time'];
            }
        }


//        time difference count
        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $current_time = $dt->format('F j, Y, g:i a');

        $same_brand_last_sale_time = strtotime($same_brand_last_sale_time);

        $current_time = strtotime($current_time);
        $time_diff = abs($current_time - $same_brand_last_sale_time)/3600;



        if(($check_phone != NULL) && ($check_phone['promocode'] == $_POST['promocode']) && $time_diff > 24){

            goto sale_code;

            //successful block

        } elseif (($check_phone != NULL) && ($check_phone['promocode'] == $_POST['promocode']) && $time_diff < 24){
              return  "2";
//            return "time difference error block";
        }else{
            return '3';
            // wrong information block
        }

        //actual code for sale starts

        sale_code:
        $this->db->select('brand_category');
        $this->db->from('brand');
        $this->db->where('brand_name', $_POST['brand_name']);

        $query_result=$this->db->get();

        $brand_category = $query_result->row_array();

        $data= array();
        $data['sale_brand_name']= $this->input->post('brand_name',true);
        $data['sale_sold_by']= $this->input->post('seller_email',true);
        $data['sale_brand_category']= $brand_category['brand_category'];
        $data['sale_phone_number']= $this->input->post('phone',true);
        $data['sale_promocode']= $this->input->post('promocode',true);
        $data['sale_time']= current_time();

        $this->db->insert('sale',$data);

        return '1';


        // actual code for sale ends
        
}

    public function allBrands() {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->order_by("brand_id", "DESC");

        $query_result=$this->db->get();
      
        $allBrands = $query_result->result_array();

        return $allBrands;
    }

    public function editBrand($id) {
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where("brand_id", $id);

        $query_result=$this->db->get();
      
        $editBrand = $query_result->row_array();

        return $editBrand;
    }

    function brands_update($data) {
        $brand_id= $this->input->post('brand_id',true);
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_store_location' => $_POST['brand_store_location'],
            'brand_active' => $_POST['brand_active'],
            'brand_image' => $data,
            'brand_updated_at' => current_time()
        );    
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('brand_id',$brand_id);
        $this->db->update('brand', $data);
        return $this->db->insert_id();
    }

    function brands_update_only_text() {
        $brand_id= $this->input->post('brand_id',true);
        $data = array(
            'brand_name' => $_POST['brand_name'],
            'brand_category' => $_POST['brand_category'],
            'brand_active' => $_POST['brand_active'],
            'brand_created_at' => current_time()
        );
        // echo "<pre>"; print_r($_POST); exit();
        $this->db->where('brand_id',$brand_id);
        $this->db->update('brand', $data);
        return $this->db->insert_id();
    }

    public function deleteBrand($id) {
        $this->db->where('brand_id',$id);
        $this->db->delete('brand');
    }

    public function allSales(){

        $userType= $this->session->userdata('usertype');

        if($userType== 12) {
            $soldBy= $this->session->userdata('email');

            $this->db->select('*');
            $this->db->from('sale');
            $this->db->where('sale_sold_by',$soldBy);
            $this->db->order_by("sale_id", "DESC");

            $query_result=$this->db->get();
        
            $allSales = $query_result->result_array();

            return $allSales;
        } 
        else if($userType== 10) {
            $this->db->select('*');
            $this->db->from('sale');
            $this->db->order_by("sale_id", "DESC");

            $query_result=$this->db->get();
        
            $allSales = $query_result->result_array();

            return $allSales;
        }
        
        
    }

    public function apiAllBrands(){

        $this->db->select('*');
        $this->db->from('brand');
        $this->db->order_by("brand_id", "DESC");

        $query_result=$this->db->get();

        $apiAllBrands = $query_result->result_array();

//        foreach ($apiAllBrands as $brand){
//
//                $this->db->select('AVG(review_rating) as avgReview');
//                $this->db->from('review');
//                $this->db->like('sale.sale_brand_name', $brand['brand_name']);
//                $this->db->join('sale', 'sale.sale_id = review.review_sale_id');
//                $this->db->order_by("review_id", "DESC");
//                $ratingquery = $this->db->get();
//
////             return   $this->db->last_query();
//
//                $ratingResult = $ratingquery->result_array();
//
//                $avgReview = $ratingResult[0]['avgReview'];
//
//                if($avgReview == ''){
//                    $avgReview = 0;
//                }
//
//                //return $avgReview;
//
//
//        }
//        return $avgReview;

        return $apiAllBrands;
    }

    public function brandOffers($brand_name){
        $this->db->select('*');
        $this->db->from('offer');
        $this->db->where('offer_brand',$brand_name);
        $this->db->order_by("offer_id", "DESC");

        $query_result=$this->db->get();

        $brandOffer = $query_result->result_array();

        return $brandOffer;
    }

}