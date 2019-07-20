       <style>

.highlight-error {
  border-color: green;
}

</style>        
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/saveRegister" method="post" enctype="multipart/form-data">
                                       
                                        
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Batch No</label>
                                            <div class="col-sm-4">
                                                
                                                <select name="batchId" class="form-control" required="required">
													<option value="">-Select Batch-</option>
                                                    <?php 
                                                        $courses= $this->db->get('batch_number')->result_array();
														
														foreach($courses as $row):
													?>
														<option value="<?php echo $row['id'];?>"><?php echo $row['batch_no'];?></option>
													<?php endforeach;?>
												</select>
                                                <!-- <input class="form-control" type="text" name="branchNo" placeholder="Batch No" required="required"> -->
                                            </div>
                                             <label for="inputEmail3" class="col-sm-2 control-label">Select Branch</label>
                                            <div class="col-sm-4">
                                                <select name="branchId" class="form-control" required="required">
													<option value="">-Select Branch-</option>
													<?php 
														$courses = $this->general_settings->allInfo();
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth (MM-DD-YYYY)</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dob" id ="dob" class="form-control date-picker" placeholder="Date of birth" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heighest Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="heighQ" class="form-control" placeholder="Heighest Qualification" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied for</label>
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select batch timing</label>
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
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Reference</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="reffId" required="required">
			                                    	<option value="">-Select Reference-</option>
                                                    <?php 
                                                    $reff= $this->db->get('reffered_by')->result_array();
                                                    foreach($reff as $dt)
                                                   { ?>
                                                    <option value="<?php echo $dt['id'];?>"><?php echo $dt['refference'];}?></option>
                                                        <?php //endforeach;?>
			                                    </select>
                                            </div>

                                        
                                            <!-- <label for="inputEmail3" class="col-sm-2 control-label">Select reference</label>
                                            <div class="col-sm-4"> -->
                                                <!-- <select  class="form-control" name="timing" required="required">
			                                    	<option value="">-Select batch time-</option>
			                                    	<?php 
														//$courses = $this->db->get("batch_time")->result();
														//foreach($courses as $row):
													?>
														<option value="<?php //echo $row->batch_time;?>"><?php //echo $row->batch_time;?></option>
													<?php //endforeach;?>
			                                    </select> -->
                                            <!-- </div> -->
                                        </div>

                                        <hr/>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Total Fee</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="total_fee" id ="total_fee" class="form-control" placeholder="Total Course Fee" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Fee Method</label>
                                            <div class="col-sm-4">
                                                 <select  class="form-control" id="fee_method" name="fee_method" required="required">
			                                    	<option value="">-Select Method-</option>
			                                    	<option value="One Time">One Time</option>
			                                    	<option value="Installment">Installment</option>
			                                    	<option value="Monthly">Monthly</option>
			                                    </select>
                                            </div>
                                        </div>
                                        <script>
                                        	
                                        	jQuery(document).ready(function() {
				
				$("#courseApplied").change(function(){
				
					var courseApplied = $("#courseApplied").val();
					
					$.post("<?php echo site_url('apanel/getcourseFee') ?>",{courseApplied : courseApplied},function(data){
						$("#total_fee").val(data);
					});
				});
	});			

                                        	
                                        </script>
                                         <div class="form-group" id ="installp">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Number Of Installment</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="numofinstall" class="form-control" placeholder="Number Of Installment" >
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Type Of Installment</label>
                                            <div class="col-sm-4">
                                                 <select  class="form-control" name="toi" >
			                                    	<option value="">-Select Type of Installment-</option>
			                                    	<option value="1">After One Month</option>
			                                    	<option value="2">After two Month</option>
			                                    	<option value="3">After Three Month</option>
			                                    	<option value="4">After Four Month</option>
			                                    	<option value="5">After Five Month</option>
			                                    	<option value="6">After Six Month</option>
			                                    </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                         <label for="inputEmail3" class="col-sm-2 control-label">Remark</label>
                                            <div class="col-sm-4">
                                                <textarea rows="2" cols="12" name ="remark" class="col-sm-12"></textarea>
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->