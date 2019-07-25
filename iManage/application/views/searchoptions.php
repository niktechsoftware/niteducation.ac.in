<div id="main-wrapper" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
            	<div class="panel-body">
                   <div class="table-responsive">
  <div class="col-md-4">
  <select id="select1" class="form-control" style="width:200px;">
  <option value="">--Select--</option>
  <option value="1">Batch Wise</option>
  <option value="2">Course Wise</option>
  <option value="3">Student Wise</option>
  </select></div>
  <div class="col-md-4" id="second">
  <select id="select2" class="form-control" style="width:200px;">
  <option value="">--Select--</option>
  <option value="1">Batch 1</option>
  <option value="2">Batch 2</option>
  <option value="3">Batch 3</option>
  </select></div>
  <div class="col-md-4"> 
  <select id="select3" class="form-control" style="width:200px;">
  <option value="">--Select--</option>
  <option value="1">Course 1</option>
  <option value="2">Course 2</option>
  <option value="3">Course 3</option>
  </select></div>
  <div class="col-md-4"> 
  <input type="text" id="text"  placeholder="Enter Student Id">
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <script>
  $(document).ready(function(){
    $('#select2').hide();
    $('#select3').hide();
    $('#text').hide();
    $('#select1').change(function(){
      var course_id=$('#select1').val();
      //alert(course_id);
      if(course_id==1){
        $('#select2').show();
       $('#select3').hide();
       $('#text').hide();
      }else if(course_id==2){
        $('#select3').show();
       $('#select2').hide();
       $('#text').hide();
      } else if(course_id==3){
        $('#select2').hide();
       $('#select3').hide();
       $('#text').show();
      }   
      $.post("<?php echo site_url("apanel/searchoption") ?>",
      {course_id : course_id}, function(data){
      // alert(data);
	  	$("#showlist").html(data);
      });
  });

  });
  </script>
 

      
  