<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
<div class="col-md-11">
<table class="table table-bordered" id="myTable" >
	<thead>
		<tr>
			<th>S no.</th>
			<th>Student Id</th>
			<th>Student Name</th>
			<th>Course</th>
			<th>Total Fee</th>
			<th>Paid Amount</th>
			<th>Remaining Balance</th>
			<th>Fee Type</th>
			<th>serial No</th>

		</tr>
	</thead>
	<tbody>
		<?php  $i=1; $sum=0;$paid=0;$remaining=0;
		foreach($view as $stud):
			$studid=$stud->student_id;
			$this->db->where('student_id',$studid);
			$fee = $this->db->get('cal_paid_fee');
			foreach($fee->result() as $row):
				$studCourse = $stud->courseApplied;
				$this->db->where('id',$studCourse);
			$course = $this->db->get('courses');
			foreach($course->result() as $row1):
			?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $stud->student_id;?></td>
			<td><?php echo $stud->name;?></td>
			<td><?php echo $row1->course_name;?></td>
			<td><?php echo $stud->total_fee;
			$sum= $sum+$stud->total_fee;?></td>
			<td><?php echo $row->paid_amount;
			$paid= $paid+$row->paid_amount;?></td>
			<td><?php echo $row->remaining;
			$remaining=$remaining+$row->remaining;?></td>
			<td><?php echo $stud->fee_method;?></td>
			<td><?php echo $stud->sr_no;?></td>
		</tr>
	<?php $i++; 
endforeach;
		endforeach;
	 endforeach;?>
	
	</tbody>
	<tfoot>
		 <tr>
	 	<td colspan=4 class="text-right">Total=</td>
	 	<td><?php echo $sum;?></td>
	 	<td><?php echo $paid;?></td>
	 	<td colspan="3"><?php echo $remaining;?></td>
	 </tr>
	</tfoot>
</table></div>
<script type="text/javascript">
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>