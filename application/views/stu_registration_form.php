<?php $this->load->view('header.php')?>
 <div class="inner-banner inner">
    <img src="<?php echo base_url();?>assets/asset/images/niteducation-banner.jpg" style="margin-top:141px;" alt="about banner" />
  </div>
        <!-- /.inner-banner -->
        <!-- ============== About ============== -->
        <div class=" about-page ">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						<h2>Student Registration</h2>
						</div>
						<!-- /.col-lg-3 col-md-3 col-sm-3 -->
						<div class=" wow bounceInUp col-lg-9 col-md-9 col-sm-9 " data-wow-duration="1s " data-wow-delay="0.5s ">
							 <form id="regForm" class="form-horizontal" action="<?php echo base_url()?>registration/saveStudent" method="post" enctype="multipart/form-data">
                                <br>
                                <div class="form-group">
                                    <!-- <label for="inputEmail3" class="col-sm-2 control-label">Batch No</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="branchNo" placeholder="Batch No" required="required">
                                    </div> -->
                                    <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Candidate Name" required="required" onkeyup="alphabatevalid('name');">
                                    </div>
                                     <label for="inputEmail3" class="col-sm-2 control-label">Select Branch</label>
                                    <div class="col-sm-4">
                                        <select name="branchId" class="form-control" required="required">
											<option value="">-Select Branch-</option>
											<?php 
												$courses = $this->db->get("general_settings")->result();
												foreach($courses as $row):
											?>
												<option value="<?php echo $row->clinic_id;?>"><?php echo $row->cilnic_name;?> (<?php echo $row->clinic_id;?>)</option>
											<?php endforeach;?>
										</select>
                                    </div>
                                </div>
							     <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="fname" id="father_name" class="form-control" placeholder="Father's Name" required="required" onkeyup="alphabatevalid('father_name');">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Mother's Name</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" id="mother_name" name="mother_name"  placeholder="Mother's Name" required="required" onkeyup="alphabatevalid('mother_name');">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Full Address" required="required" onkeyup="stuAddress();">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Your City" required="required" onkeyup="alphabatevalid('city');">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="Your State" required="required" onkeyup="alphabatevalid('state');">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pin" id="pin" class="form-control" placeholder="Area Pin Code" required="required" onkeyup="digitvalid('pin')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Aadhar Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="aadhar_number" id="aadhar_number" maxLength="16" class="form-control"  placeholder="Aadhar Number" required="required" onkeyup="digitvalid('aadhar_number');">
                                        <span id="adhar_num" Style="color:red"></span>
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="dob" id ="dob" class="form-control date-picker" placeholder="Date of birth" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="mobile" id="mobileNumber" class="form-control" maxLength="10" placeholder="Contact Number" required="required" onkeyup="digitvalid('mobileNumber');">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email ID</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="email" id ="email" class="form-control date-picker" placeholder="Email Id" required="required" onkeyup="stuEmailId('email','emailID');">
                                        <span id="emailID" Style="color:red"></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nationality</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nationality" id="national" class="form-control" placeholder="Nationality" required="required" onkeyup="alphabatevalid('national');">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label">Community</label>
                                   <div class="col-sm-4">
                                        <select  class="form-control" name="community" required="required">
	                                    	<option value="">-Select Community-</option>
	                                    	<option value="GEN">GEN</option>
	                                    	<option value="OBC">OBC</option>
	                                    	<option value="SC">SC</option>
	                                    	<option value="ST">ST</option>
	                                    </select>
                                    </div>
                                </div>
                                        
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Qualification</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="heighQ" id="heighQ" class="form-control" placeholder="Heighest Qualification" required="required" onkeyup="alphabatevalid('heighQ');">
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 control-label"> Gender</label>
                                    <div class="col-sm-4">
                                        <select  class="form-control" name="gender" required="required">
                                            <option value="">-Select Gender-</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>                
                                </div>
                                        
                                  <div class="form-group">
                                    <!-- <label for="inputEmail3" class="col-sm-2 control-label">Batch Timing</label>
                                    <div class="col-sm-4">
                                        <select  class="form-control" name="timing" required="required">
                                        	<option value="">-Select batch time-</option>
                                        	<?php 
    											                  $courses = $this->db->get("batch_time")->result();
    											                    foreach($courses as $row):
    										                   ?>
    											<option value="<?php echo $row->batch_time;?>"><?php echo $row->batch_time;?></option>
    										               <?php endforeach;?>
                                        </select>
                                    </div> -->
                                    
                                </div>
                                        
                                         <div class="form-group">
                                        <!--  <label for="inputEmail3" class="col-sm-2 control-label">Remark</label>
                                            <div class="col-sm-4">
                                                <textarea rows="2" cols="12" name ="remark" class="col-sm-12"></textarea>
                                            </div> -->
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied</label>
                                            <div class="col-sm-4">
                                          <select name="courseApplied" id="courseApplied" class="form-control" required="required">
                                          <option value="">-Select Course-</option>
                                          <?php 
                                            $courses = $this->db->get("courses")->result();
                                            foreach($courses as $row):
                                          ?>
                                            <option value="<?php echo $row->id;?>"><?php echo $row->course_name;?></option>
                                          <?php endforeach;?>
                                        </select>
                                            </div>
                                             <label for="inputEmail3" class="col-sm-2 control-label">Total fee</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="total_fee1" id = "total_fee1" class="form-control"  readonly="TRUE">
                                                <input type="hidden" name="total_fee" id = "total_fee" class="form-control" >
                                           
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Browse Image from your Computer</label>
                                            <div class="col-sm-4">
                                                <!--<form method="post" action="<?php echo base_url(); ?>index.php/registration/imageSave" enctype="multipart/form-data">-->
                                                    <!--<input type="hidden" name="old_stuImg">-->
                                                    Only png,jpg File lessthen 50 kB.
                                                    <input type='file' name="studentImage" id="studentImage" style="background:#2d2d2d,padding:10px;;" size="20" onchange="readURL(this);" /><br/>
        			                            <!--</form>-->
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label"> Photo</label>
                                            <div class="col-sm-4">
                                                <div style="width: 70px; height: 100px; border: 1px solid #ccc;">
                                                    <img id="studentImg" height="100px" width="70px" style="max-width:180px;" src="<?php echo base_url()?>assets/asset/images/students_imgs/student_icon.png" alt="Student Photo with Signature."/>
                                                </div>
                                            </div>                
                                        </div>

                                        
                                        <!-- <div class="form-group">
                                          Education Details
                                           <table class="table" style="width: 100%; cellspacing: 0;">
                                           	<thead>
                                           	<tr>
                                           		<th>Exam Name</th>
                                           		<th>Board/University Name</th>
                                           		<th> Marks Obtain</th>
                                           		<th>Total marks</th>
                                           		<th>Percentage</th>
                                           		<th>Roll Number</th>
                                           		<th>Passing Year</th>
                                           		</tr>
                                           		
                                           	</thead>
                                           <tbody>
                                           <tr>
	                                           	<td>
                                                	<input type="text" name="ten" class="form-control" placeholder="High School" value="10th" required="required">
                                            	</td>
	                                           	<td><input type="text" name="tenboard" class="form-control"  required="required"></td>
	                                           	<td><input type="text" name="tenmarks" class="form-control"  required="required"></td>
	                                           	<td><input type="text" name="tentotal" class="form-control"  required="required"></td>
	                                           	<td><input type="text" name="tenper" class="form-control"  required="required"></td>
	                                           	<td><input type="text" name="tenrollnumber" class="form-control"  required="required"></td>
	                                           	<td><input type="text" name="tenpassYear" class="form-control"  required="required"></td>
	                                        </tr>
	                                        <tr>
	                                           	<td>
                                                	<input type="text" name="intermmidiate" class="form-control" value="12th" placeholder="Intermidiate">
                                            	</td>
	                                           	<td><input type="text" name="interboard" class="form-control"  ></td>
	                                           	<td><input type="text" name="intermarks" class="form-control"  ></td>
	                                           	<td><input type="text" name="intertotal" class="form-control"  ></td>
	                                           	<td><input type="text" name="interper" class="form-control"  ></td>
	                                           	<td><input type="text" name="interrollnumber" class="form-control"  ></td>
	                                           		<td><input type="text" name="interpassYear" class="form-control"  ></td>
	                                        </tr>
	                                        <tr>
	                                           	<td>
                                                	<input type="text" name="graduation" class="form-control" value="Graduation" placeholder="Graduation" >
                                            	</td>
	                                           	<td><input type="text" name="graduboard" class="form-control"  ></td>
	                                           	<td><input type="text" name="gradumarks" class="form-control"  ></td>
	                                           	<td><input type="text" name="gradutotal" class="form-control"  ></td>
	                                           	<td><input type="text" name="graduper" class="form-control"  ></td>
	                                           	<td><input type="text" name="gradurollnumber" class="form-control"  ></td>
	                                           	 	<td><input type="text" name="gradupassYear" class="form-control"  ></td>
	                                        </tr>
	                                        <tr>
	                                           	<td>
                                                	<input type="text" name="postg" class="form-control" value="Post Graduation" placeholder="Post Graduation" >
                                            	</td>
	                                           	<td><input type="text" name="postgboard" class="form-control"  ></td>
	                                           	<td><input type="text" name="postgmarks" class="form-control"  ></td>
	                                           	<td><input type="text" name="postgtotal" class="form-control"  ></td>
	                                           	<td><input type="text" name="postgper" class="form-control"  ></td>
	                                           	<td><input type="text" name="postgrollnumber" class="form-control"  ></td>
	                                           		<td><input type="text" name="postgpassYear" class="form-control"  ></td>
	                                        </tr>
                                           </tbody>
                                           </table>
                                        </div> -->
                                        
                                        <div class="form-group">
                                          <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                          <div class="col-sm-8">
                                            <input type="checkbox" id="terms" name="terms" value="Yes"> I agree the <a href="#" style="color: blue">terms & conditions of the NIT Educational Institute</a><br>
                                          </div>
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-4">
                                               
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="button" id="saveInfo" class="btn btn-success">Save Information</button>
                                            </div>
                                        </div>
							</form>
							
						</div>
									
                    <!-- /.col-lg-9 col-md-9 col-sm-9 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
       
        </div>
<br>

<br>
        
  <script>
      jQuery(document).ready(function() {
        $("#saveInfo").click(function(evt){
          if(!alphabatevalid("father_name")){
            return;
          }
          mobile = $("#mobileNumber").val();
          if($("#terms").prop("checked")){
              alert("ok");
          }else{
              alert( 'Please signify your agreement with our terms.' );
              return false;
          }
          $.post("<?php echo base_url("registration/getOtp");?>",{mobile:mobile},function(data){
            //console.log(data);
            userOtp=prompt("Enter Your OTP");
            if(userOtp==data){
              $("#regForm").submit();
            }else{
              alert("Invalid OTP Try Again.");
            }
          });
        });

    		$("#courseApplied").change(function(){
    			var courseApplied = $("#courseApplied").val();
    			$.post("<?php echo site_url('welcome/getcourseFee') ?>",{courseApplied : courseApplied},function(data){
    				$("#total_fee").val(data);
    				$("#total_fee1").val(data);
    			  });
    		});
	    });		
//.......................................................................	    
	//assign function to onsubmit property of form
    //     document.getElementById('regForm').onsubmit = function() {
    // // get reference to required checkbox
    //     var terms = this.elements['terms'];
        
    //     if (!terms.checked) {  //if it's not checked
    // // display error info (generally not an alert these days)
    //         alert( 'Please signify your agreement with our terms.' );
    //         return false; // don't submit
    //     }
    //     return true; // submit
    //     };
//.......................................................................

      function alphabatevalid(inputid) {
          var text_value = document.getElementById(inputid).value;
          // if (!text_value.match(/^[A-Za-z]+$/)) {
          //     document.getElementById("fname").innerHTML = "Alphabates Only without space";
          //     document.getElementById(inputid).focus();
          //     if (text_value == "") {
          //        document.getElementById("fname").innerHTML = "";
                  
          //     }
          // }else{
          //      document.getElementById("fname").innerHTML = "";
          //      document.getElementById(inputid).focus();
          // }
          // console.log(text_value);
          value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
          //value = text_value.replace(/[^(A-Za-z )]*/g, "");
          // console.log(value);
          document.getElementById(inputid).value=value;

          return text_value.match(/^[A-Za-z ]+$/);

      }
      function digitvalid(inputid) {
          var text_value = document.getElementById(inputid).value;
          // if (!text_value.match(/^[A-Za-z]+$/)) {
          //     document.getElementById("fname").innerHTML = "Alphabates Only without space";
          //     document.getElementById(inputid).focus();
          //     if (text_value == "") {
          //        document.getElementById("fname").innerHTML = "";
                  
          //     }
          // }else{
          //      document.getElementById("fname").innerHTML = "";
          //      document.getElementById(inputid).focus();
          // }
          // console.log(text_value);
          //value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
          value = text_value.replace(/[^(0-9)]*/g, "");
          // console.log(value);
          document.getElementById(inputid).value=value;

      }
      function stuAddress() {
          var text_value = document.getElementById("address").value;
          // if (!text_value.match(/^[0-9a-zA-Z ]+$/)) {
          //     document.getElementById(spanid).innerHTML = "Enter Parmanent Address";
          //     document.getElementById("address").focus();
          //     if (text_value == "") {
          //         document.getElementById(spanid).innerHTML = " ";
          //     }
          // }else{
          //    document.getElementById(spanid).innerHTML = " ";
          //         document.getElementById("address").focus();
          // }
          value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z0-9- )]*/g, "");
          document.getElementById("address").value=value;
      }
      function stuEmailId(inputid,spanid) {
          var text_value = document.getElementById(inputid).value;
          if (!text_value.match(/^[a-z0-9._]+[@][a-z]+[.][a-z]+$/)) {
              document.getElementById(spanid).innerHTML = "Enter valid email id";
              document.getElementById(inputid).focus();
              if (text_value == "") {
                  document.getElementById(spanid).innerHTML = " ";
              }
          }else{
            document.getElementById(spanid).innerHTML = " ";
              document.getElementById(inputid).focus();
          }
      }
      function mobilevalid(inputid,spanid) {
          var text_value = document.getElementById(inputid).value;
          if (!text_value.match(/[^(0-9)]*/g, "")) {
              document.getElementById(spanid).innerHTML = "Enter valid mobile number";
              document.getElementById(inputid).focus();
              if (text_value == "") {
                  document.getElementById(spanid).innerHTML = " ";
              }
          }else{
            document.getElementById(spanid).innerHTML = " ";
              document.getElementById(inputid).focus();
          }
      }
      function adharvalid(inputid,spanid) {
          var text_value = document.getElementById(inputid).value;
          if (!text_value.match(/^[a-z0-9._]+[@][a-z]+[.][a-z]+$/)) {
              document.getElementById(spanid).innerHTML = "Enter valid adhar number";
              document.getElementById(inputid).focus();
              if (text_value == "") {
                  document.getElementById(spanid).innerHTML = "Valid";
              }
          }else{
            document.getElementById(spanid).innerHTML = " ";
              document.getElementById(inputid).focus();
          }
      }
      
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#studentImg')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


  </script>
<?php $this->load->view('footer.php')?>