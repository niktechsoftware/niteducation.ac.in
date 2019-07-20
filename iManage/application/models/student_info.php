<?php
class student_info extends CI_Model{
	function saveInfo(){
                $id = $this->db->query("SELECT id From student_info order by id DESC Limit 1")->row()->id;
                $idf=1000 + $id+1;
				$id = "NIT1819".$idf;
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
				"heighQ" => $this->input->post("heighQ"),
				"courseApplied" => $this->input->post("courseApplied"),
				"timing" => $this->input->post("timing"),
				"gender" => $this->input->post("gender"),
				"email" => $this->input->post("email"),
				"password" => $this->input->post("password"),
				"total_fee" => $this->input->post("total_fee"),
                "num_of_install" => $this->input->post("numofinstall"),
                "type_of_install" => $this->input->post("toi"),
				"fee_method" => $this->input->post("fee_method"),
				"joinDate" => date("Y-m-d"),
				"joinTime" => date("H:i:s"),
				"branch_id" => $this->input->post("branchId"),
				"branch_no" => $this->input->post("branchNo"),
				"remark"=>$this->input->post("remark"),
				"isApprove" => "yes"
			);
			$courseCode = $this->input->post("courseApplied");
			$this->db->where("id",$courseCode);
			 $coursefee = $this->db->get("courses")->row();
			
			if($this->input->post("fee_method")=="One Time")
			{
				$feedata =array(
						"student_id"=>$id,
						"Course_fee"=>$this->input->post("total_fee"),
						"Form_fee"=> $coursefee->Form_fee,
						"Registration_Fee"=>$coursefee->Registration_Fee,
						"Exam_fee"=>$coursefee->Exam_fee,
						"Late_Fee"=>$coursefee->Late_Fee,
						"total_amount"=>$this->input->post("total_fee")+$coursefee->Form_fee+$coursefee->Registration_Fee+$coursefee->Exam_fee+$coursefee->Late_Fee,
						"should_paid_date"=>date("Y-m-d"),
						"branch_id"=>$this->input->post("branchId"),
						"status"=>"pending"
				);
				$this->db->insert("cal_paid_fee",$feedata);
			}
			if($this->input->post("fee_method")=="Installment")
			{
				$toi=$this->input->post("toi");
				$noinstall = $this->input->post("numofinstall");
				$instalfee = $this->input->post("total_fee")/$noinstall;
				$dt = date("Y-m-d");
				for($i=1;$i<$noinstall+1;$i++){
					if($i>1){
						$feedata =array(
								"student_id"=>$id,
								"Course_fee"=>$instalfee,
								"Form_fee"=> "0.00",
								"Registration_Fee"=>"0.00",
								"Exam_fee"=>"0.00",
								"Late_Fee"=>"0.00",
								"total_amount"=>$instalfee,
								"should_paid_date"=>$dt,
								"branch_id"=>$this->input->post("branchId"),
								"status"=>"pending"
						);
						$this->db->insert("cal_paid_fee",$feedata);
						$dt = date('Y-m-d', strtotime("+$toi months", strtotime($dt)));
							
					}else{
						$feedata =array(
								"student_id"=>$id,
								"Course_fee"=>$instalfee,
								"Form_fee"=> $coursefee->Form_fee,
								"Registration_Fee"=>$coursefee->Registration_Fee,
								"Exam_fee"=>$coursefee->Exam_fee,
								"Late_Fee"=>$coursefee->Late_Fee,
								"total_amount"=>$instalfee+$coursefee->Form_fee+$coursefee->Registration_Fee+$coursefee->Exam_fee+$coursefee->Late_Fee,
								"should_paid_date"=>$dt,
								"branch_id"=>$this->input->post("branchId"),
								"status"=>"pending"
						);
						$this->db->insert("cal_paid_fee",$feedata);
						$dt = date('Y-m-d', strtotime("+$toi months", strtotime($dt)));
							
					}
					
				}
			
			}
			if($this->input->post("fee_method")=="Monthly")
			{
			$this->db->where("id",$this->input->post("courseApplied"));
			$getcourse=	$this->db->get("courses")->row();
			
			$dt=date("Y-m-d");
			$noinstall=$getcourse->duration_in_months;
			$monthfee=$this->input->post("total_fee")/$noinstall;
			for($i=1;$i<$noinstall+1;$i++){
				if($i>1){
					$feedata =array(
							"student_id"=>$id,
							"Course_fee"=>$monthfee,
							"Form_fee"=> "0.00",
							"Registration_Fee"=>"0.00",
							"Exam_fee"=>"0.00",
							"Late_Fee"=>"0.00",
							"total_amount"=>$monthfee,
							"should_paid_date"=>$dt,
							"branch_id"=>$this->input->post("branchId"),
							"status"=>"pending"
					);
					$this->db->insert("cal_paid_fee",$feedata);
						
					$dt = date('Y-m-d', strtotime("+1 months", strtotime($dt)));
					
				}else{
					$feedata =array(
							"student_id"=>$id,
							"Course_fee"=>$monthfee,
							"Form_fee"=> $coursefee->Form_fee,
							"Registration_Fee"=>$coursefee->Registration_Fee,
							"Exam_fee"=>$coursefee->Exam_fee,
							"Late_Fee"=>$coursefee->Late_Fee,
							"total_amount"=>$monthfee+$coursefee->Form_fee+$coursefee->Registration_Fee+$coursefee->Exam_fee+$coursefee->Late_Fee,
							"should_paid_date"=>$dt,
							"branch_id"=>$this->input->post("branchId"),
							"status"=>"pending"
					);
					$this->db->insert("cal_paid_fee",$feedata);
						
					$dt = date('Y-m-d', strtotime("+1 months", strtotime($dt)));
				}	
				  
			}
				
			}
		
			if($this->db->insert("student_info",$data)){
				$abc['id'] = $id;
				$abc['isTrue'] = true;
				if($this->input->post("mobile")){
				$phone=$this->input->post("mobile");
				$sms="Welcome to National Institute Of technologies. Please Submit your photo and signature for complete the registration process";
				sms($phone,$sms);
				}
				return $abc;
			}
		
		
	}
	
	function getDataById($id){
		$this->db->where("branch_id",$id);
		$this->db->group_by("courseApplied");
		return $this->db->get("student_info")->result();
	}
		function getDataById1($id,$course){
		$this->db->where("branch_id",$id);
		$this->db->where("courseApplied",$course);
		$this->db->group_by("timing");
		return $this->db->get("student_info")->result();
	}
	
	function getAllByBranchBatch($branch,$course,$batch){
		$this->db->where("branch_id",$branch);
		$this->db->where("courseApplied",$course);
		$this->db->where("timing",$batch);
		return $this->db->get("student_info")->result();
	}
	
	function getAll(){
		return $this->db->get("student_info")->result();
	}
	
	function updateStudentInfo($data, $id){
		$this->db->where("student_id",$id);
		$val = $this->db->update("student_info",$data);
		return $val;
	}

	function updatewebStudentInfo($data, $id){
		$this->db->where("student_id",$id);
		$val = $this->db->update("web_student_requ",$data);
		return $val;
	}
	function total_registrationn(){
		$this->db->where("isApprove","NO");
		$notapprov = $this->db->get("student_info");
		$notapprove = $notapprov->num_rows();
		return $notapprove;
	}
	function total_registrationa(){
		$this->db->where("isApprove","yes");
		$approved = $this->db->get("student_info");
		$approved = $approved->num_rows();
		return $approved;
	}
	
	function total_Enquiry(){
		$this->db->where("status","pending");
		$approved = $this->db->get("inquiry");
		$enquiry = $approved->num_rows();
		return $enquiry;
	}
	function todays_collection(){
		$date1=date('Y-m-d');
	
		$collection = $this->db->query("SELECT SUM(amount) as totday FROM day_book WHERE pay_date='$date1' and 	dabit_cradit='credit' ")->row();
		return $collection->totday;
	}

	function birthday()
	{

                    $d=date('Y-m-d');
                             
   					 $cm=  date("m",strtotime($d));
   					 $cd=  date("d",strtotime($d));
   					
   				 $gal =	 $this->db->get("student_info");
                          	 
				
   			 return $gal;
	
		

	}

	function totalcourse()
	{
		//$this->db->where("status","pending");
		$approved = $this->db->get("courses");
		$course = $approved->num_rows();
		return $course;

	}
	
	function todays_expenses(){
		$date1=date('Y-m-d');
	
	
		$collection = $this->db->query("SELECT SUM(amount) as totday FROM day_book WHERE pay_date='$date1' and 	dabit_cradit='dabit' ")->row();
		return $collection->totday;
	}
}