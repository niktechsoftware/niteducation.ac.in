<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
 <!-- <script src="http://cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script> -->
<div class="col-md-11">
<table class="table table-bordered" id="myTable1" >
	<thead>
		<tr>
			<th>S no.</th>
			<th>Student Id</th>
			<th>Student Name</th>
			<th>Total Fee</th>
			<th>Paid Amount</th>
			<th>Remaining Balance</th>
			<th>Fee Type</th>
			<th>serial No</th>
		</tr>
	</thead>
	<!-- <tfoot>
		<tr>
			<td colspan=4>Total</td>
		</tr>
	</tfoot> -->
	<tbody>
		<?php  $i=1;
		foreach($view->result() as $stud):
			$studid=$stud->student_id;
			$this->db->where('student_id',$studid);
			$fee = $this->db->get('cal_paid_fee');
		// $dss=$this->db->where('student_id',$studid)->from("cal_paid_fee")->count_all_results();
		// 		print_r($dss);exit();
			if($fee->num_rows()>0){
			foreach($fee->result() as $row):
				?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $stud->student_id;?></td>
			<td><?php echo $stud->name;?></td>
			<td><?php echo $stud->total_fee;?></td>
			<td><?php echo $row->paid_amount;?></td>
			<td><?php echo $row->remaining;?></td>
			<td><?php echo $stud->fee_method;?></td>
			<td><?php echo $stud->sr_no;?></td>
		</tr>
	<?php $i++; 
		endforeach;
	}
	 endforeach;?>
	</tbody>
</table>
</div>
<script type="text/javascript">
	$(document).ready( function () {
   // $('#myTable').DataTable();
   $('#myTable1').DataTable( {
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace('/[\Rs. ,]/g', '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
            // Total over all pages
            total = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {  
                    return intVal(a) + intVal(b.replace('<i class="fa fa-inr"></i>&nbsp;', ''));
                }, 0 );
            // Total over this page
           /* pageTotal = api
            console.log(pageTotal);
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b.replace('<i class="fa fa-inr"></i>&nbsp;', ''));
                }, 0 );*/
            // Update footer
            $( api.column( 3 ).footer() ).html(
                '$'+total +' ( $'+ total +' total)'
                'Total : <i class="fa fa-inr"></i>&nbsp;'+ total
            );
        }
    } );
} );
	
</script>