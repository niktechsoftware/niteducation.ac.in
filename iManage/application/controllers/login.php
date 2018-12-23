<?php
class Login extends CI_Controller{
	function index(){
		if($this->session->userdata("is_login") == true){
			$this->session->unset_userdata();
			$this->session->sess_destroy();
		}
		$this->load->view("login");
	}
	
	function auth(){
		$data = $this->loginmodel->validate();
		if($data['is_login'] == 'true'){
			$this->session->set_userdata($data);
			redirect(base_url()."apanel");
		}else{
			redirect(base_url()."login/index/authFals");
		}
	}
	
	function unlock(){
		$query = $this->loginModel->validateLock();
	
		if($query){  //if user Lock validation return true after validation
			$this->session->set_userdata('is_lock',true);
			redirect("index.php/login/index");
		}
		else{ // if user not validate the credential ....
			redirect("index.php/homeController/lockPage/false");
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url().'login/index.jsp');
	}
	
	function lockPage(){
		if($this->session->userdata("is_login") == false){
			redirect(base_url().'login/index.jsp');
		}
		$data['title'] = $this->session->userdata("name");
		$this->session->set_userdata('is_lock', false);
		$this->load->view("lockPage", $data);
	}
	
	function admitcard(){
		$this->load->view("admitcard");
	}
	
	function getcard(){
	    $studentID = $this->input->post('sid');
	    $studentInfo = $this->db->query("SELECT * FROM `student_info` WHERE `student_id`='$studentID' AND `courseApplied`='10' LIMIT 1;");
	    $data['info'] = $studentInfo->row();
	    if($data['info']):
	        if($data['info']->photo && $data['info']->signature)
		        $this->load->view("admitcarddetail", $data);
		    else
		        redirect(base_url()."login/admitcard/false");
		else:
		    redirect(base_url()."login/admitcard/authFals");
		endif;
	}
	
	function result(){
		$this->load->view("a_resultrollno");
	}
	
	function getresult(){
	    $studentID = $this->input->post('sid');
	    $studentInfo = $this->db->query("SELECT * FROM `student_info` WHERE `student_id`='$studentID' AND `courseApplied`='10' LIMIT 1;");
	    $data['info'] = $studentInfo->row();
	    if($data['info']):
	        $result = $this->db->query("SELECT `c_id`, `s_id`, `atten`, `marks_obtain`, `course_subject`.* FROM `subject_marks` JOIN `course_subject` ON `subject_marks`.`s_id` = `course_subject`.`sno` WHERE `subject_marks`.`student_id` = $studentID");
	        $data['result'] = $result->result();
	        $this->load->view("a_resultdetail", $data);
		else:
		    redirect(base_url()."login/result/authFals");
		endif;
	}
	
	function forgot(){
		$this->load->view("forgot");
	}
	
}