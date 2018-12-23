<option value="">Select Batch</option>
	<option value="pmgdisha">PMG DISHA</option>
<?php foreach ($detail  as $row):
    if($row->courseApplied){
    $this->db->select("course_name");
$this->db->where("id",$row->courseApplied);
$tr=$this->db->get("courses")->row();?>
	<option value="<?php echo $row->courseApplied;?>"><?php echo $tr->course_name;?></option>
<?php } endforeach;?>

