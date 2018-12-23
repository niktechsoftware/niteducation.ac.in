<?php
class Sms extends CI_Controller{
	function single(){
		
		$msg =	$this->input->post("msg");
		$fmobile = $this->input->post("mobile");
		sms($fmobile,$msg);
		redirect(base_url()."apanel/singleSms/9");
	}
	function batchWise(){
	
		
		$msg =	$this->input->post("msg");
		$branch = $this->input->post("branch");
		$course = $this->input->post("course");
		$batch = $this->input->post("batch");
		if($course=="pmgdisha"){
		 $val = $this->db->get("pmgdish");  
		 $i=0;
		foreach ($val->result() as $row):
			$fmobile = $row->mobile1;
			sms($fmobile,$msg);
		//	echo $fmobile;
			$i++;
		endforeach;
		}else{
		$val = $this->student_info->getAllByBranchBatch($branch,$course,$batch);
		$i=0;
		foreach ($val as $row):
			$fmobile = $row->mobile;
			sms($fmobile,$msg);
			//echo $fmobile;
			$i++;
		endforeach;
		}
		
		
		redirect(base_url()."apanel/batchWise/$i");
	}
	function all(){
	
		$msg =	$this->input->post("msg");
		$val = $this->student_info->getAll();
			$i=0;
		foreach ($val as $row):
			$fmobile = $row->mobile;
		sms($fmobile,$msg);
		$i++;
		endforeach;
		redirect(base_url()."apanel/allStudent/$i");
	}
}