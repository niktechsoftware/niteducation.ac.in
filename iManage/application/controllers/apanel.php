<?php
class Apanel extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->is_login();
	}
	
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
	
	function index(){
		// Opening balance closing balance code start
		$clinic_id = $this->session->userdata("clinic_id");
		$clo1 = $this->db->query("select * from opening_closing_balance WHERE clinic_id = '$clinic_id' ORDER BY id DESC LIMIT 1");
		$clo = $clo1->row();
		if($clo1->num_rows() <=0 ){
			$balance = array(
				"opening_balance" => 0,
				"closing_balance" => 0,
				"clinic_id" => $clinic_id,
				"opening_date" => date("Y-m-d"),
				"closing_date" => date("Y-m-d")	
				);
			$this->db->insert('opening_closing_balance',$balance);
		}else{
			$cl_date = $clo->closing_date;
			$cl_balance = $clo->closing_balance;
			$cr_date = date('Y-m-d');
			if($cl_date != $cr_date)
			{
				$balance = array(
						"opening_balance" => $cl_balance,
						"closing_balance" => $cl_balance,
						"clinic_id" => $clinic_id,
						"opening_date" => $cr_date,
						"closing_date" => $cr_date
				);
				$this->db->insert('opening_closing_balance',$balance);
			}
			// Opening balance closing balance code end
		}
		$data['subPage'] = 'Home';
		$data['smallTitle'] = 'Dashboard';
		$data['pageTitle'] = 'Overview of all Section';
		$data['notapproved']=$this->student_info->total_registrationn();
		$data['approved']=$this->student_info->total_registrationa();
		$data['enquiry']=$this->student_info->total_Enquiry();
		$data['collection']=$this->student_info->todays_collection();
		$data['course']=$this->student_info->totalcourse();
		$data['exp']=$this->student_info->todays_expenses();
		$data['birthday']=$this->student_info->birthday();
		$data['title'] = 'NIT EDUCATION | Dashboard';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'dashboard';
		$this->load->view("include/template", $data);
	
	}
	
	
	function profile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'Profile';
		$data['pageTitle'] = 'Your Profile';
		$data['title'] = 'NIT EDUCATION | Profile';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'profile';
		
		$this->load->view("include/template", $data);
	}
	
	function defineSubject(){
		$data['checksub']="no";
		if($this->uri->segment(3)){
			$id = $this->uri->segment(3);
			
			
			$this->db->where("course_id",$id);
			$course_subject = $this->db->get("course_subject");
			$data['checksub']=$course_subject;
			$data['cid']=$id;
		}
		if($this->input->post("courseApplied")){
			$id = $this->input->post("courseApplied");
				
				
			$this->db->where("course_id",$id);
			$course_subject = $this->db->get("course_subject");
			$data['checksub']=$course_subject;
			$data['cid']=$id;
		}
		
		$data['subPage'] = 'Settings';
		$data['title'] = "Define Subject";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Define Subject";
		$this->db->select("course_name,id");
		$data['courseName']=$this->db->get("courses")->result();
		$data['mainContent'] = "defineSubject";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function saveSubject(){
		$courseid = $this->input->post("id");
		$subname = $this->input->post("sub_name");
		$max_num = $this->input->post("max_num");
		$obt_marks=$this->input->post("obt_marks");
		$data=array(
				'course_id'=>$courseid,
				'subject_name'=>$subname,
				'max_marks'=>$max_num
				
				
		);
		if($this->db->insert("course_subject",$data)){
			redirect(base_url()."apanel/defineSubject/$courseid");
		}
		
		
	}
	
	function addprofile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'New Branch';
		$data['pageTitle'] = 'Add New Branch';
		$data['title'] = 'NIT EDUCATION | New Branch';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'newBranch';
	
		$this->load->view("include/template", $data);
	}
	
	function getcourseFee(){
		$rock = $this->input->post("courseApplied");
		$this->db->where("id",$rock);
		$rty = $this->db->get("courses")->row();
		echo $rty->course_fee;
	}
	
	function branchList(){
		$data['subPage'] = 'Branch';
		$data['smallTitle'] = 'Branch List';
		$data['pageTitle'] = 'Branch List';
		$data['title'] = 'NIT EDUCATION | Branch List';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'branchList';
		
		$data['branchList'] = $this->db->get("general_settings");
		$this->load->view("include/template", $data);
	}
	
	public function studentEdit(){
		if($this->input->post("rollnumber")){
			$id = $this->input->post("rollnumber");
			$this->db->where("student_id",$id);
			$getdata = $this->db->get("student_info")->row();
			//$getdata2 = $this->db->get("web_student_requ")->row();
			if($getdata||$getdata2){
				$data['grtid'] = 3;
				$data['grtid1'] = $getdata;
			}
			else{
				$data['grtid']=2;
			}
		}
		else{
			$data['grtid']=0;
		}
		if($this->uri->segment(3)){
			$id=$this->uri->segment(3);
			$this->db->where("student_id",$id);
			$getdata = $this->db->get("student_info")->row();
			//$getdata2 = $this->db->get("web_student_requ")->row();
			if($getdata||$getdata2){
				$data['grtid'] = 3;
				$data['grtid1'] = $getdata;

			}
		}
		$data['subPage'] = 'Student';
		$data['title'] = "New Student Updation";
		$data['smallTitle'] = "Student Updation";
		$data['pageTitle'] = "Student Updation";
		$data['mainContent'] = "studentEdit";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	public function studentwebEdit(){
		if($this->input->post("rollnumber")){
			$id = $this->input->post("rollnumber");
			$this->db->where("student_id",$id);
			//$getdata = $this->db->get("student_info")->row();
			$getdata1 = $this->db->get("web_student_requ")->row();
			if($getdata1){
				$data['grtid'] = 3;
				$data['grtid1'] = $getdata1;
			}
			else{
				$data['grtid']=2;
			}
		}
		else{
			$data['grtid']=0;
		}
		if($this->uri->segment(3)){
			$id=$this->uri->segment(3);
			$this->db->where("student_id",$id);
			//$getdata = $this->db->get("student_info")->row();
			$getdata1 = $this->db->get("web_student_requ")->row();
			if($getdata1){
				$data['grtid'] = 3;
				$data['grtid1'] = $getdata1;
			}
		}
		$data['subPage'] = 'Student';
		$data['title'] = "New Student Updation";
		$data['smallTitle'] = "Student Updation";
		$data['pageTitle'] = "Student Updation";
		$data['mainContent'] = "student_web_Edit";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	public function studentRegister(){
		$data['subPage'] = 'Student';
		$data['title'] = "New Student Registration";
		$data['smallTitle'] = "Student Registration";
		$data['pageTitle'] = "Student Registration";
		$data['mainContent'] = "studentRegister";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function printRegister(){
		$data['subPage'] = 'Student';
		$data['smallTitle'] = "Admission Invoice";
		$data['pageTitle'] = "Student Profile/Admission Invoice";
		$data['title'] = "Student Profile";
		$data['mainContent'] = "printRegister";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("include/template",$data);
	}

	public function print_confirm_web(){
		$data['subPage'] = 'Student';
		$data['smallTitle'] = "Admission Invoice";
		$data['pageTitle'] = "Student Profile/Admission Invoice";
		$data['title'] = "Student Profile";
		$data['mainContent'] = "print_web_Register";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("include/template",$data);
	}
	
	public function studentList(){
		$data['subPage'] = 'Student';
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['pageTitle'] = "Student List";
		$data['mainContent'] = "studentList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}  
	public function pmgdishaList(){
		$data['subPage'] = 'Student';
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['pageTitle'] = "Student List";
		$data['mainContent'] = "pmgdishaList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	
	public function olr(){
		$data['subPage'] = 'Online Registration';
		$data['title'] = "Online Registration";
		$data['smallTitle'] = "Online Registration List";
		$data['pageTitle'] = "Online Registration Student Request List";
		$data['mainContent'] = "olrList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}

	public function showcourse()
	{

		$data['subPage'] = 'Show Courses';
		$data['title'] = "Show Courses";
		$data['smallTitle'] = "Show Courses";
		$data['pageTitle'] = "course List";
		$data['mainContent'] = "showcourse";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	

	}
	
	
	
	function inquiry(){
		$data['res'] = $this->inquiry->getAll();
		$data['subPage'] = 'Website';
		$data['title'] = "Enquiry";
		$data['smallTitle'] = "Enquiry";
		$data['pageTitle'] = "Students Enquiry List";
		$data['mainContent'] = "inquiry";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	function noticeBoard(){	
		$data['subPage'] = 'Website';
		$data['title'] = "noticeBoard";
		$data['smallTitle'] = "Vacancies";
		$data['pageTitle'] = "Enter Notice Board";
		$data['mainContent'] = "noticeBoard";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function freeDemo(){
		$data['subPage'] = 'Website';
		$data['title'] = "Upload Course PDF ";
		$data['smallTitle'] = "Website";
		$data['pageTitle'] = "Upload Course PDF";
		$data['mainContent'] = "freeDemo";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	public function career(){
		$data['subPage'] = 'Website';
		$data['title'] = "Career List";
		$data['smallTitle'] = "Website";
		$data['pageTitle'] = "Career List";
		$data['mainContent'] = "career";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	public function singleSms(){
		$data['subPage'] = 'SMS';
		$data['title'] = "Single SMS";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "Single SMS";
		$data['mainContent'] = "singleSms";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchWise(){
		$data['branch'] = $this->general_settings->allInfo();
		$data['subPage'] = 'SMS';
		$data['title'] = "Batch Wise SMS";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "Batch Wise SMS";
		$data['mainContent'] = "batchSms";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function allStudent(){
		$data['subPage'] = 'SMS';
		$data['title'] = "All Student";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "All Student";
		$data['mainContent'] = "allStudent";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function takeFee(){
		$data['subPage'] = 'FEE';
		$data['title'] = "Fee Recieve";
		$data['smallTitle'] = "FEE";
		$data['pageTitle'] = "Fee Recieve";
		$data['mainContent'] = "takeFee";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function viewfeeD(){
		$id = $this->uri->segment(3);
		
		$this->db->where("student_id",$id);
		$data['deta'] = $this->db->get("student_info")->row();
		
		
		$data['subPage'] = 'FEE';
		$data['title'] = "FEE Detail";
		$data['smallTitle'] = "FEE";
		$data['pageTitle'] = "FEE Detail";
		$data['mainContent'] = "viewfeeD";
		$data['headerCss'] = "headerCss/feeCss";
		$data['footerJs'] = "footerJs/feeJs";
		$this->load->view("include/template",$data);
	}
	
	public function feeInvoice(){
		$data['studentId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$data['subPage'] = 'Invoice';
		$data['title'] = "Fee Recieve Invoice";
		$data['smallTitle'] = "FEE Invoice";
		$data['pageTitle'] = "Fee Recieve Invoice";
		$data['mainContent'] = "feeInvoice";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function feeSlipList(){
		$data['subPage'] = 'Fee';
		$data['title'] = "Fee Recieve Invoice";
		$data['smallTitle'] = "FEE Invoice";
		$data['pageTitle'] = "Fee Recieve Invoice";
		$data['mainContent'] = "feeSlipList";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function dailyExpense(){
		$data['subPage'] = 'Accounting';
		$data['title'] = "Daily Expense";
		$data['smallTitle'] = "Account";
		$data['pageTitle'] = "Daily Expense";
		$data['mainContent'] = "dailyExpense";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/expenseJs";
		$this->load->view("include/template",$data);
	}
	
	public function dayBook(){
		$data['subPage'] = 'Accounting';
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Day Book";
		$data['pageTitle'] = "Day Book";
		$data['mainContent'] = "dayBook";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function courses(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Course";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Course";
		$data['mainContent'] = "courses";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}

	public function bdaydetail()
	{

			$data['subPage'] = 'Birthday';
		$data['title'] = "Birthday Student";
		$data['smallTitle'] = "Birthdays";
		$data['pageTitle'] = "Birthday";
		$data['mainContent'] = "bdaydetail";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);		
	}
	
	public function studymeterial(){
		$data['subPage'] = 'Settings';
		$data['title'] = " Upload Study Meterial";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Course";
		$data['mainContent'] = "studymeterial";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	public function popup(){
		$data['subPage'] = 'Settings';
		$data['title'] = " Pop up";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Pop Up";
		$data['mainContent'] = "popup";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchTime(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Batch Time";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Batch Time";
		$data['mainContent'] = "batchTime";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchTimeSpecial(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Special Batch Time";
		$data['smallTitle'] = "Special Batch";
		$data['pageTitle'] = "Special Batch Time";
		$data['mainContent'] = "batchTimeSpecial";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	public function batchTimeNew(){
		$data['subPage'] = 'Settings';
		$data['title'] = "New Batch Time";
		$data['smallTitle'] = "New Batch";
		$data['pageTitle'] = "New Batch Time";
		$data['mainContent'] = "batchTimeNew";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function expenseList(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Expense List";
		$data['smallTitle'] = "Expense";
		$data['pageTitle'] = "Expense List";
		$data['mainContent'] = "expenseList";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	function test(){
		$this->load->view("test");
	}
	
	function takefeep(){
		$data['studentId'] = $this->uri->segment(3);
		$data['subPage'] = 'Fee Section';
		$data['title'] = "Fee Section";
		$data['smallTitle'] = "Student Fee";
		$data['pageTitle'] = "Student Fee";
		$data['mainContent'] = "takefeep";
		$data['headerCss'] = "headerCss/takeFeeCss";
		$data['footerJs'] = "footerJs/takeFeeJs";
		$this->load->view("include/template",$data);
	}
	public function certificate(){
		$data['subPage'] = 'View Certificate';
		$data['title'] = "Certificate";
		$data['smallTitle'] = "View Certificate";
		$data['pageTitle'] = "View Certificate";
		$data['mainContent'] = "roll_certificate";
		$data['headerCss'] = "headerCss/takeFeeCss";
		$data['footerJs'] = "footerJs/takeFeeJs";
		$this->load->view("include/template",$data);
	}
	public function certificatemsme(){
		$data['subPage'] = 'View Certificate';
		$data['title'] = "Certificate";
		$data['smallTitle'] = "View Certificate";
		$data['pageTitle'] = "View Certificate";
		$data['mainContent'] = "roll_certificate1";
		$data['headerCss'] = "headerCss/takeFeeCss";
		$data['footerJs'] = "footerJs/takeFeeJs";
		$this->load->view("include/template",$data);
	}
	public function pmgdishForm(){
		$data['subPage'] = 'PMGDISHA Form';
		$data['title'] = "PMGDISHA Form";
		$data['smallTitle'] = "PMGDISHA Form";
		$data['pageTitle'] = "PMGDISHA Form";
		$data['mainContent'] = "pmgdishForm";
		$data['headerCss'] = "headerCss/takeFeeCss";
		$data['footerJs'] = "footerJs/takeFeeJs";
		$this->load->view("include/template",$data);
	}
	
	public function getCertificate(){
		$roll = $this->input->post("rollnumber");
		$this->db->where("sino",$roll);
		$frd = $this->db->get("pmgdish")->row();
		if($frd){
			redirect(base_url()."apanel/printCertificate/$frd->sino");
		}
		else{
			redirect(base_url()."apanel/certificate/false");
		}
	}
	public function getCertificatemsme(){
		$roll = $this->input->post("rollnumber");
		$this->db->where("student_id",$roll);
		$frd = $this->db->get("student_info")->row();
		if($frd){
			redirect(base_url()."apanel/printCertificatemsme/$frd->student_id");
		}
		else{
			redirect(base_url()."apanel/certificate/false");
		}
	}
	public function printCertificate(){
		$data['subPage'] = 'Student';
		$data['smallTitle'] = "Admission Invoice";
		$data['pageTitle'] = "Student Profile/Admission Invoice";
		$data['title'] = "Student Profile";
		$data['mainContent'] = "printCertificate";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("include/template",$data);
	}
	public function printCertificatemsme(){
		$data['subPage'] = 'Student';
		$data['smallTitle'] = "Admission Invoice";
		$data['pageTitle'] = "Student Profile/Admission Invoice";
		$data['title'] = "Student Profile";
		$data['mainContent'] = "printCertificatemsme";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("include/template",$data);
	}
	function updateStatus(){
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		echo $status;
		if($status == "submitted") {
			$sn = $this->db->query("select * from pmgdish WHERE sino = '$id'");
			$sno = $sn->row();
			
			$data = array(
				"status" => $status
			);
			$this->db->where('sino', $id);
			$this->db->update('pmgdish', $data);
			echo 1;
		}
	}
	
	public function attendancesheet(){
		$data['subPage'] = '';
		$data['smallTitle'] = "<button class='btn btn-success' onclick='window.print();'>Print</button>";
		$data['pageTitle'] = "Yoga Attendace List";
		$data['title'] = "Attendance List";
		$data['mainContent'] = "attendancesheet";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		   
		$result = $this->db->query("SELECT * FROM `student_info` WHERE `courseApplied` = 10 AND `photo` <> '' ORDER BY `student_id` ASC;")->result();
		$data['result'] = $result;
		$this->load->view("include/template",$data);
	}
	
	public function varification(){
		$data['subPage'] = '';
		$data['smallTitle'] = "";
		$data['pageTitle'] = "Verification";
		$data['title'] = "Student Verification";
		$data['mainContent'] = "verification";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$this->load->view("include/template",$data);
	}
	
	public function getcard(){
		$studentID = $this->input->post('sid');
	    $studentInfo = $this->db->query("SELECT * FROM `student_info` WHERE `student_id`='$studentID' AND `courseApplied`='10' LIMIT 1;");
	    $data['info'] = $studentInfo->row();
	    if($data['info']):
	        if($data['info']->photo && $data['info']->signature)
		        $this->load->view("verificationDetail", $data);
		    else
		        redirect(base_url()."apanel/varification/false");
		else:
		    redirect(base_url()."apanel/varification/authFals");
		endif;
	}
	
}