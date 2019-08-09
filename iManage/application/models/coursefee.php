<?php 
class Coursefee extends CI_Model
{
    public function details($id)
    {
        //echo $id;
       // $this->db->where('id',$id);
        //$dt=$this->db->get('courses')->row();
        //echo $dt->course_name; 
        $this->db->where('courseApplied',$id);
        $dt=$this->db->get('student_info')->result();
      //  print_r($dt);
       // echo $dt->student_id.$dt->name;
        return $dt; 
        // foreach($dt as $rw)
        // {
        //    echo "<a href=''>".$rw->student_id.$rw->name."<br>"."</a>";
        // }
    }
    public function spCourse($spCourse){
       $query= $this->db->get('pmgdish')->result();
      //print_r($query);
      //exit();
        return $query;
    }
}
?>