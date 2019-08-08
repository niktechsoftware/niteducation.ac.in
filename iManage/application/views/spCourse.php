    
 <!--  <script src="//cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script> -->
<div class="col-md-11">
<table class="table table-bordered" id="myTable" >
  <thead>
    <tr>
      <th>S no.</th>
      <th>Student Id</th>
      <th>Student Name</th>
      <th>Batch No</th>
      <th>Total Fee</th>
      <th>Paid Amount</th>
      <th>Remaining Balance</th>
      <th>Fee Type</th>
      <th>serial No</th>

    </tr>
  </thead>
  <tbody>
    <?php //print_r($view); 
    $i=1;
    foreach($view as $stud):
      
     ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $stud->sino;?></td>
      <td><?php echo $stud->name;?></td>
      <td><?php echo $stud->fname;?></td>
      <td><?php echo $stud->mother_name;?></td>
      <td><?php echo $stud->aadhar_number;?></td>
      <td><?php echo $stud->year;?></td>
      <td><?php echo $stud->mobile1;?></td>
      <td><?php echo $stud->status;?></td>
    </tr>
  <?php $i++; 

   endforeach;?>
  </tbody>
</table></div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();

  // $('#myTable').DataTable( {
  //       "footerCallback": function ( row, data, start, end, display ) {
  //           var api = this.api(), data;
  //           // Remove the formatting to get integer data for summation
  //           var intVal = function ( i ) {
  //               return typeof i === 'string' ?
  //                   i.replace('/[\Rs. ,]/g', '')*1 :
  //                   typeof i === 'number' ?
  //                       i : 0;
  //           };
  //           // Total over all pages
  //           total = api
  //               .column( 3 )
  //               .data()
  //               .reduce( function (a, b) {  
  //                   return intVal(a) + intVal(b.replace('<i class="fa fa-inr"></i>&nbsp;', ''));
  //               }, 0 );
 
  //           // Total over this page
  //           pageTotal = api
  //               .column( 3, { page: 'current'} )
  //               .data()
  //               .reduce( function (a, b) {
  //                   return intVal(a) + intVal(b.replace('<i class="fa fa-inr"></i>&nbsp;', ''));
  //               }, 0 );
 
  //           // Update footer
  //           $( api.column( 3 ).footer() ).html(
  //               //'$'+pageTotal +' ( $'+ total +' total)'
  //               'Total : <i class="fa fa-inr"></i>&nbsp;'+ pageTotal
  //           );
  //       }
  //   } );
} );
</script>