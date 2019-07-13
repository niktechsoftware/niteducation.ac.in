<?php
class InvoiceController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}
	
	function isLogin(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."welcome/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."welcome/lockPage");
		}
	}
	
	public function registerC() {
	    $studentId = $this->uri->segment(3);
		
    	$institute_info = mysql_query("select * from general_settings");
    	$data['info'] = mysql_fetch_object($institute_info);
	    
	    $this->db->where("student_id",$studentId);
	    $data['detail'] = $this->db->get("student_info")->row();
	    $data['detail2'] = $this->db->get("web_student_requ")->row();
	    
	    $this->db->where("student_id", $studentId);
	    $feeData = $this->db->get("cal_paid_fee");
	    $data['feeDetail'] = $feeData->result();
	    
	    $this->db->where("id", $data['detail']->courseApplied);
	    $data['rtcourse'] = $this->db->get("courses")->row();
	    
		$this->load->view("invoice/registerC",$data);
	}

	public function register_info_check() {
	    $studentId = $this->uri->segment(3);
		
    	$institute_info = mysql_query("select * from general_settings");
    	$data['info'] = mysql_fetch_object($institute_info);
	    
	    $this->db->where("student_id",$studentId);
	    //$data['detail'] = $this->db->get("student_info")->row();
	    $data['detail2'] = $this->db->get("web_student_requ")->row();
	    
	    $this->db->where("student_id", $studentId);
	    $feeData = $this->db->get("cal_paid_fee");
	    $data['feeDetail'] = $feeData->result();

	    $this->db->where("regnumber", $studentId);
	    $txnData = $this->db->get("paytm_txn");
	    $data['ontxnDetail'] = $txnData->result();
	    
	    $this->db->where("id", $data['detail2']->courseApplied);
	    $data['rtcourse'] = $this->db->get("courses")->row();
	    
		$this->load->view("invoice/register_info_check",$data);
	}

	
	public function feeInvoicePrint(){
		$data['studentId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$this->load->view("invoice/feeInvoice",$data);
	}
	public function certificateC(){
		$data['studentId'] = $this->uri->segment(3);
		//include(base_url()."assets/phpqrcode/qrlib.php");
		$this->load->view("invoice/certificateC",$data);
	}
	
		public function certificateC_new(){
		$data['studentId'] = $this->uri->segment(3);
		//include(base_url()."assets/phpqrcode/qrlib.php");
		$this->load->view("invoice/certificateC_new",$data);
	}
	public function certificateCmsme(){
		$data['stu_id'] = $this->uri->segment(3);
		//include(base_url()."assets/phpqrcode/qrlib.php");
		$this->load->view("invoice/certificateCmsme",$data);
	}
}