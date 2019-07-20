<?php
class registration extends CI_Controller{
	public function saveStudent(){
		$id = $this->db->query("SELECT id From student_info order by id DESC Limit 1")->row()->id;
		$idf = 1000 + $id + 1;
		$id = "ONN1920".$idf;
		if(isset($_FILES['studentImage']['name'])){
		    $photo_name = time().trim($_FILES['studentImage']['name']);
        			$this->load->library('upload');
        			// Set configuration array for uploaded photo.
        			$image_path = realpath(APPPATH . '../assets/asset/images/students_imgs');
        			$config['upload_path'] = $image_path;
        			$config['allowed_types'] = 'gif|jpg|jpeg|png';
        			$config['max_size'] = '1024';
        			$config['file_name'] = $photo_name;
        			
        			// Upload first photo and create a thumbnail of it
        			$this->upload->initialize($config);
        			$this->upload->do_upload('studentImage');
		}else{
		    $photo_name="";
		}
		$data = array(
			"student_id" => $id,
			"name" => $this->input->post("name"),
			"fName" => $this->input->post("fname"),
			"address" => $this->input->post("address"),
			"city" => $this->input->post("city"),
			"state" => $this->input->post("state"),
			"pin" => $this->input->post("pin"),
			"mobile" => $this->input->post("mobile"),
			"mother_name"=>$this->input->post("mother_name"),
			"aadhar_number"=>$this->input->post("aadhar_number"),
			"dob" => date("Y-m-d", strtotime($this->input->post("dob"))),
			"nationality"=>$this->input->post("nationality"),
			"community"=>$this->input->post("community"),
			"heighQ" => $this->input->post("heighQ"),
			"courseApplied" => $this->input->post("courseApplied"),
			"apply_date" => date("Y-m-d H:i:s"),
			"gender" => $this->input->post("gender"),
			"email" =>   $this->input->post("email"),//"kpushpendra81@gmail.com",
			"branch_id" => $this->input->post("branchId"),
			"photo" => $photo_name,
			//"remark"=>$this->input->post("remark"),
			"isApprove" => "NO",
			"pay_amount" =>$this->input->post("total_fee"),
			"status" =>"pending",
			"payment_ack" =>"pending"
		);
		
		// echo '<pre>';
		// print_r($this->input->post());
		// print_r($data);
		// exit();
		if($this->db->insert("web_student_requ",$data)){
			//$stuid=$this->uri->segment(3);   

			//$stuinfo=$this->db->get("web_student_requ");
			redirect("welcome/payFee/$id");
		}
		else{
			echo "Somthing going wrong. Please Contact Site administrator";
		}
		;
		
		// $txnID = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		// $udf1 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf2 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf3 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf4 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf5 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf6 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf7 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf8 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf9 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $udf0 = substr(hash('sha256', mt_rand() . microtime()), 0, 5);
		// $hashSequence = "tmlzch8Z|$txnID|".$data['pay_amount']."|".$data['courseApplied']."|".$data['name']."|".$data['email']."|$udf1|$udf2|$udf3|$udf4|$udf5|$udf6|$udf7|$udf8|$udf9|$udf0|cyG9vblKCv";
		// $hash = strtolower(hash('sha512', $hashSequence));
		// $paymentData = array(
		//     "hash"              => $hash,
		//     "MERCHANT_KEY"      => "tmlzch8Z",
		//     "SALT"              => "cyG9vblKCv",
		//     "PAYU_BASE_URL"     => "https://secure.payu.in/_payment",
		//     "TXNID"             => $txnID,
		//     "udf1"              => $udf1,
  //   		"udf2"              => $udf2,
  //   		"udf3"              => $udf3,
  //   		"udf4"              => $udf4,
  //   		"udf5"              => $udf5,
  //   		"udf6"              => $udf6,
  //   		"udf7"              => $udf7,
  //   		"udf8"              => $udf8,
  //   		"udf9"              => $udf9,
  //   		"udf10"             => $udf0,
  //           "txnid"             => $txnID,
  //           "amount"            => $data['pay_amount'],
  //           "firstname"         => $data['name'],
  //           "email"             => $data['email'],
  //           "phone"             => $data['mobile'],
  //           "productinfo"       => $data['courseApplied'],
  //           "surl"              => 'http://http://niteducation.ac.in/registration/success',
  //           "furl"              => 'http://http://niteducation.ac.in/registration/fail',
  //           "service_provider"  => "payu_paisa"
		// );
		
  //       $this->session->set_flashdata('hash', $hash);
        
  //       $this->load->view("payment", $paymentData);
		
	}
	
	// public function success() {
	    
	//     /**
	//      * These value posted from payu money if transaction compleated.
	//      */
	//     $data = array(
	//         "status"        => $this->input->post("status"),
 //            "firstname"     => $this->input->post("firstname"),
 //            "amount"        => $this->input->post("amount"),
                     //            "txnid"         => $this->input->post("txnid"),
                    //            "posted_hash"   => $this->input->post("hash"),
                   //            "key"           => $this->input->post("key"),
                  //            "productinfo"   => $this->input->post("productinfo"),
                 //            "email"         => $this->input->post("email")
	            //     );
	    
              //        /**
             //         * Salt should be same Post Request 
            //         */
           //        if ($this->session->flashdata('hash') != $data['posted_hash'])
          //            $data['success'] = false;
         //        else
        //            $data['success'] = true;
        
     //        $this->load->view("success", $data);
	// }
	
	 function imageSave() {
	            $student_id = $this->input->post('student_id');
        		$photo_name = time().trim($_FILES['studentImage']['name']);
        		$new_img = array(
        						"photo"=> $photo_name,
        				);
        		$this->load->model("studentomdel");
        		if($query = $this->studentomdel->updateStudentInfo($new_img,$student_id)){
        			$this->load->library('upload');
        			// Set configuration array for uploaded photo.
        			$image_path = realpath(APPPATH . '../assets/asset/images/students_imgs');
        			$config['upload_path'] = $image_path;
        			$config['allowed_types'] = 'gif|jpg|jpeg|png';
        			$config['max_size'] = '1024';
        			$config['file_name'] = $photo_name;
        			
        			// Upload first photo and create a thumbnail of it.
        			if (!empty($_FILES['studentImage']['name'])) {
        				$this->upload->initialize($config);
        				$this->upload->do_upload('studentImage'); 
        			}
        		}
        		redirect("welcome/stuRegistration");
        	}

	public function printRegister(){
		
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("printRegister",$data);
	}
	
    public function getOtp(){
        $this->load->helper('sms');
		
		$mobile=$this->input->post("mobile");
		$otp=mt_rand(1000,10000);
		$msg="NIT Education, Your OTP is $otp for mobile number varification.";
		sms($mobile,$msg);
		echo $otp;

	}
		
	
}