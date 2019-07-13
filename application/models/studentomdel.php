<?php
class Studentmodel extends CI_Model{	
	public function getAll(){
		return $this->db->get("student_info");
	}

	public function getcourse(){
		return $this->db->get("courses");
	}
	
	function updateStudentInfo($data,$id){
		$this->db->where("student_id",$id);
		$this->db->update("web_student_requ",$datastudent); 
	}

}