<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/CreatorJwt.php';

class ProfileApiController extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->objOfJwt = new CreatorJwt();
		header('Access-Control-Allow-Origin: *');
		header('Accept: application/json');
		header('Content-Type: application/json');
	}
    
        public function appHome() {
        $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
				$user_info['username'] = $jwtData['fullname'];
				$user_info['profile_pic'] = $jwtData['user_profile_pic_url'];
				$sendData= array('profile_info' =>$user_info);
				echo json_encode($sendData);
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
   }

        public function appPromo(){
        $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			    $phone_number = $jwtData['phone_number'];
			    $promo_info['last_sale_details'] = $promo_info['last_promo_details']=$this->M_Profile->get_last_sale($phone_number);
			    
				$sendData= array('promo_info' =>$promo_info);
				echo json_encode($sendData);
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
            
       }
       
       public function appGeneratePromocode(){
        $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			    $phone_number = $jwtData['phone_number'];
			 //   $email= $this->input->post('phone');
			    $promocode = 'stud_'.substr(md5(microtime()), 0, 5);

                $phone_number = $this->session->userdata('phone');
        
                $new_promocode = $this->M_Profile->updatePromocode($phone_number, $promocode);
        
                if ($new_promocode) {
                    echo json_encode(['promocode' => $promocode]);
                }
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
            
       }

       public function appPurchaseHistory(){
       $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			    $phone_number = $jwtData['phone_number'];
                $purchase_history['purchase_history'] = $this->M_Profile->getHistory($phone_number);
			    
				$sendData= array('purchase_info' =>$purchase_history);
				echo json_encode($sendData);
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}

    }
    
    public function appReviewHistory(){
    $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			    $phone_number = $jwtData['phone_number'];
                $my_review_history['my_review_history'] = $this->M_Profile->get_review_history($phone_number);
			    
				$sendData= array('myReviewHistory' =>$my_review_history);
				echo json_encode($sendData);
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
     
    }
    
    
    public function appReviewDetails($review_id){
    $received_Token = $this->input->request_headers('Authorization');
		try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			    $review_details= $this->M_Profile->review_details($review_id);
			    if($review_details) {
			        $sendData= array('reviewDetails' =>$review_details);
				    echo json_encode($sendData);    
			    } else {
			        $msg= "No Data Found!!";
			        echo json_encode($msg);    
			    }
				
				
				
			} else {
				echo "token has been expired";
			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
		
       }
       
       
       
    public function appSaveReview() {
    header('Access-Control-Allow-Origin: *');
	header('Accept: application/json');
	header('Content-Type: application/json');
	
	$received_Token = $this->input->request_headers('Authorization');
	
	$this->form_validation->set_rules('rating', 'rating', 'required');
	$this->form_validation->set_rules('title', 'title', 'required');
	$this->form_validation->set_rules('description', 'description', 'required');
	$this->form_validation->set_rules('sale_id', 'sale_id', 'required');
	
	if (empty($_FILES['image']['name']))
    {
        $this->form_validation->set_rules('image', 'image', 'required');
    }
    
    if ($this->form_validation->run() == FALSE)
        {
            $notify['message'] =  preg_replace("/\r\n|\r|\n/",'', strip_tags(validation_errors()));
            $this->output->set_status_header(422)->set_content_type('application/json')->set_output(json_encode($notify));
        }
	else {
	    try
		{
			$jwtData = $this->objOfJwt->DecodeToken($received_Token['Token']);
			if(Date('Y-m-d h:i:s',strtotime($jwtData['timeStamp']) + (3600*24)) > $jwtData['timeStamp']) {
			    
			   $phone_number = $jwtData['phone_number'];
           
               $this->load->library('upload');   
            
                $_FILES['file']['name']       = $_FILES['image']['name'];
                $_FILES['file']['type']       = $_FILES['image']['type'];
                $_FILES['file']['tmp_name']   = $_FILES['image']['tmp_name'];
                $_FILES['file']['error']      = $_FILES['image']['error'];
                $_FILES['file']['size']       = $_FILES['image']['size'];
    
                // File upload configuration
                $config['upload_path'] = './assets/assets_user/review_image';
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
                    $uploadImgData['image'] = $imageData['file_name'];
                     // echo "<pre>"; print_r($imageData['file_name']."<br>"); 
                     if(!empty($uploadImgData)){
                        // echo "<pre>"; print_r($_FILES); exit();
                        $this->M_Profile->review_entry($imageData['file_name'], $phone_number);
                    }
                }
    
                   $review_history = $this->M_Profile->get_review_history($phone_number);
                   
                   if($review_history) {
                       echo json_encode('Data has been submitted');
                   } else {
                       echo json_encode('Data is not submitted');
                   }
    				
    			} else {
    				echo "token has been expired";
    			}

		}
		catch (Exception $e)
		{
			http_response_code('401');
			echo json_encode(array( "status" => false, "message" => $e->getMessage()));exit;
		}
	}
    

    }


    
    
}