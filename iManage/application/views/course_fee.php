
  <div class="row">
    <div class="col-md-5">
        <div class="dropdown" style="margin:70px;">
            <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Course
            <span class="caret"></span></button>
            <ul class="dropdown-menu"> -->
            <?php $dt=$this->db->get('courses')->result();?>
            <select  id="selectcourse" name="selectcourse" class="form-control">
            <option >--select course--</option> 
             <?php foreach ($dt as $courses)  {?> 
              <option value="<?php echo $courses->id;?>"><?php echo $courses->course_name; ?></option>
              <?php } ?> 
            </select>
        </div>
    </div>
      <div class="col-md-5">
        <div class="dropdown" style="margin:70px;">
            <select  id="selectspcourse" name="selectcourse" class="form-control">
            <option >--select special course--</option> 
              <option value="PMGDISHA">PMGDISHA</option>
             
            </select>
        </div>
    </div>
  </div>
    <div class="row">
  <div class="col-md-12" id="showlist">
          
  </div>
  </div>
  <div class="row">
    <div class="col-md-12" id="specialCourse"></div>
  </div>
  <script>
  $(document).ready(function(){
    $('#selectcourse').change(function(){
      var course_id=$('#selectcourse').val();
      //alert(course_id);
      $.post("<?php echo site_url("apanel/Coursefee2") ?>",
      {course_id : course_id}, function(data){
      // alert(data);
	  	$("#showlist").html(data);
      });
  });
////special course
$('#selectspcourse').change(function(){
  var spCourse= $('#selectspcourse').val();
  $.post("<?php echo site_url("apanel/specialCourse") ?>",
      {spCourse : spCourse}, function(data){
      // alert(data);
      $("#specialCourse").html(data);
      });
});

  });
  </script>
 