<!DOCTYPE html>
<html>
  <head>
    <title>Accounting</title>
  </head>
  <body>
  <div class="row">
  <div class="col-md-12">
 
    <div class="row">
      <div class="col-md-4" style="margin-left:70px;margin-top:30px;">
        <select class="form-control" id="test" >
        <option>-Select Type-</option>
          <option   value="branch">Branch Wise</option>
          <option    value="crouse">Course Wise</option>
          <option   value="student">Student Wise</option>
        </select>
      </div>
    </div>
   <!----branch code start---->
      <div class="row" id="branch1"  style="margin-left:50px; margin-top:50px;">
        <div class="col-md-12">Branch List
          <?php 
         
           ?>
           <div class="row">
      <div class="col-md-4" style="margin-left:70px;margin-top:30px;">
        <select class="form-control" id="test1" >
        <option>-Select Type-</option>
          <option   value="Total">Total Balance</option>
          <option    value="Submit">Submit Balance</option>
          <option   value="Remaining">Remaining Balance</option>
        </select>
      </div>
    </div>
         
        
        </div>
      </div>
      <div class="row" id="total_bal">
        <div class="col-md-12 table-responsive">
        <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>S. No.</th>
                      <th>Student _id</th>
                      <th>Total Fee</th>
                      <th>Total Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                       $res= $this->db->get('general_settings')->result();
                       foreach($res as $ress){
                         $branch_id= $ress->clinic_id;
                         //print_r($ress);exit();
                      $this->db->where('branch_id',$branch_id);
                         $stud=$this->db->get('student_info')->result();
                        // print_r($stud);
                        $i=1;
                        foreach($stud as $student){
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $student->student_id;?></td>
                      <td>Total Fee</td>
                      <td>Total Balance</td>
                    </tr>
                        <?php $i++;}}?>
                    </tbody>
                  </table>
        </div>
      </div>
      <!----branch code end---->
      <div class="row" id="course1" >
        <div class="col-md-12">Course</div>
      </div>
      <div class="row" id="stud1" >
        <div class="col-md-12">student</div>
      </div>
      </div>
      </div>
  </body>
</html>

       