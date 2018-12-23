<?php
class Ajax extends CI_Controller{
	function loadBatch(){
		//echo "<option>Rahul</option>";
		$data['detail'] = $this->student_info->getDataById($this->input->post("branchId"));
		$this->load->view("ajax/branchCodeList",$data);
	}
	
	function loadBatchc(){
	    	$detail = $this->student_info->getDataById1($this->input->post("branchId"),$this->input->post("course"));
		   ?>
		   <option value="">Select Batch</option>
<?php foreach ($detail  as $row):
   ?>
	<option value="<?php echo $row->timing;?>"><?php echo $row->timing;?></option>
<?php endforeach;?>
	<option value="pmgdisha">PMG DISHA</option>
		   <?php
	}
}