<?php
class FeeC extends CI_Controller{
	function save_fee(){
		$id = $this->input->post("student_id");
		
		$n = 1000 + $this->invoice_serial->graterId();
		$invoice_no = "GF".$n;
		
		$cl = $this->opening_closing_balance->closing()->closing_balance;
		$clbalance = $cl + $this->input->post("feePay");
		
		if($this->opening_closing_balance->update($clbalance)):
			$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "fee Submit",
				"invoice_date" => date("Y-m-d")
			);
			$data=array(
				"student_id"=>$this->input->post("student_id"),
				"remaing_fee"=>$this->input->post("balance"),
				"paid"=>$this->input->post("feePay"),
				"paid_date"=>$this->input->post("issueDate"),
				"paid_month"=>$this->input->post("monthName"),
				"recieved_by"=>$this->input->post("recieved"),
				"till_date"=>$this->input->post("tillDate"),
				"invoice_no"=>$invoice_no,
				"branch_id" => $this->input->post("branch_id")
			);
			$dayBook = array(
				"paid_to" => $this->session->userdata("name"),
				"paid_by" => $this->input->post("student_id"),
				"reason" => "Student Fee",
				"dabit_cradit" => "credit",
				"amount" => $this->input->post("feePay"),
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"branch_id" => $this->input->post("branch_id"),
				"invoice_no" => $invoice_no
			);
			
			$a = $this->invoice_serial->insert($in);
			$b = $this->fee->insert($data);
			$c = $this->day_book->insert($dayBook);
			
			if($a && $b && $c){
				redirect(base_url()."apanel/feeInvoice/$id/$invoice_no");
			}else{
				$mysql->rollback();
			}
		endif;
	}
	
	public function savestudentFee(){
		$n = 1000 + $this->invoice_serial->graterId();
		$invoice_no = "NIT".$n;
		$student_id = $this->input->post("student_id");
		$fields = $this->db->list_fields('cal_paid_fee');
		
		$fieldfee = $this->db->query("SELECT * from cal_paid_fee where student_id = '$student_id' AND status='pending' ORDER BY sno ASC LIMIT 1")->row();
		 
		foreach($fields as $field):
		if($field != "sno" && $field != "student_id" && $field != "remark" && $field != "should_paid_date" && $field != "invoice_date" && $field != "invoice_number" && $field != "branch_id" && $field != "status"){
		$data[$field]=$this->input->post($field);
			
			 } endforeach;
		$data['invoice_number']	=	$invoice_no;
		$data['invoice_date']	= 	date("Y-m-d");
		$data['status']			=	"Paid";
		$data['remark']			=	$this->input->post("remark");
		
		$cl = $this->opening_closing_balance->closing()->closing_balance;
		$clbalance = $cl + $this->input->post("paid_amount");
		if($this->opening_closing_balance->update($clbalance)){
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "fee Submit",
				"invoice_date" => date("Y-m-d")
		);
		
		$dayBook = array(
				"paid_to" => $this->input->post("depositor_name"),
				"paid_by" => $this->input->post("student_id"),
				"reason" => "Student Fee",
				"dabit_cradit" => "credit",
				"amount" => $this->input->post("paid_amount"),
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"branch_id" => $this->session->userdata("clinic_id"),
				"invoice_no" => $invoice_no
		);
		$this->db->where("sno",$this->input->post("rowid"));
		if($this->db->update("cal_paid_fee",$data)){
		$a = $this->invoice_serial->insert($in);
		$c = $this->day_book->insert($dayBook);
		redirect(base_url()."apanel/feeInvoice/$student_id/$invoice_no");
		}
	  }
	}
}