<?php 
	class Account extends CI_Model{
		public function showbranch($branch){
			if($branch == 'branch'){
				$branchid=$this->db->get('general_settings')->result();
				return($branchid);
			}else if($branch == 'course'){
				$course=$this->db->get('courses')->result();
				return ($course);
			}
			else{
				$batch =$this->db->get('batch_number')->result();
				return ($batch);
			}
		}

		public function showbranchdata($studdata){
				$this->db->where('branch_id',$studdata);
				$query=$this->db->get('student_info');
				return($query);
		}
		public function showcoursedata($studdata){
				$this->db->where('courseApplied',$studdata);
				$query= $this->db->get('student_info')->result();
				return ($query);
		}	
	}
?>