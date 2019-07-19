<?php $this->load->view('header.php')?>
 <div class="inner-banner inner">
            <img src="<?php echo base_url();?>assets/asset/images/about-banner.jpg" alt="about banner" />
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
						<div class="wow bounceInUp col-lg-9 col-md-9 col-sm-9 " data-wow-duration="1s " data-wow-delay="0.5s ">
							 <form class="form-horizontal" action="<?php echo base_url()?>registration/saveStudent" method="post" enctype="multipart/form-data">
                                  <br>
                                   <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Batch No</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="branchNo" placeholder="Batch No" required="required">
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" placeholder="Candidate Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" placeholder="Father's Name" required="required">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mother's Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="mother_name"  placeholder="Mother Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Aadhar Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="aadhar_number" data-type="aadhar_number" maxLength="16" class="form-control"  placeholder="AAdhar Number" required="required">
                                            </div>
                                		</div>
                                		 <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address" class="form-control" placeholder="Full Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" placeholder="Your City" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" placeholder="Your State" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" placeholder="Area Pin Code" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" placeholder="Contact Number" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                            <div class="col-sm-4">
                                                <input type="date" name="dob" id ="dob" class="form-control date-picker" placeholder="Date of birth" required="required">
                                            </div>
                                        </div>
                                           <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Nationality</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="nationality" class="form-control" placeholder="Nationality" required="required">
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
                                                <input type="text" name="heighQ" class="form-control" placeholder="Heighest Qualification" required="required">
                                            </div>
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
                                        </div>
                                        
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Batch Timing</label>
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
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Gender</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="gender" required="required">
			                                    	<option value="">-Select Gender-</option>
			                                    	<option value="Male">Male</option>
			                                    	<option value="Female">Female</option>
			                                    </select>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">Remark</label>
                                            <div class="col-sm-4">
                                                <textarea rows="2" cols="12" name ="remark" class="col-sm-12"></textarea>
                                            </div>
                                             <label for="inputEmail3" class="col-sm-2 control-label">Total fee</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="total_fee1" id = "total_fee1" class="form-control"  disabled="disabled">
                                            <input type="hidden" name="total_fee" id = "total_fee" class="form-control" >
                                           
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
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
                                        </div>
                                        
                                        
                                         <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-4">
                                               
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Information</button>
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
				
				$("#courseApplied").change(function(){
				
					var courseApplied = $("#courseApplied").val();
					
					$.post("<?php echo site_url('welcome/getcourseFee') ?>",{courseApplied : courseApplied},function(data){
						$("#total_fee").val(data);
						$("#total_fee1").val(data);
					});
				});
	});			

                                        	
                                        </script>
<?php $this->load->view('footer.php')?>