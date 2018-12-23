               
           
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body" ">
                            	<div>
                            	<?php echo "<h1> Marks Entry For ".$course_subject->subject_name."</h1>";?>
                            	</div>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                               <th>Attendance</th>
                                               <th>Total Marks </th>
                                                <th>Marks Obtain</th>
                                                <th>Branch</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        	
                                        	$i=1;
                                        	?>
                                        	<?php foreach($records as $row):
                                        	?>
                                        	
                                            <tr>
                                            
                                                <td> <button id="stud_id<?php echo $i; ?>" value ="<?php echo $row->student_id; ?>"><?php echo $row->student_id; ?> </button>
                                                		
                                                	
                                                	
                                                </td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fName; ?></td>
                                                
                                               <?php $this->db->where("student_id",$row->student_id);
                                               $this->db->where("s_id",$s_id);
                                               $this->db->where("c_id",$c_id);
                                              $toup= $this->db->get("subject_marks")->row();
                                              if($toup){
                                               ?>
                                                <td><?php echo $toup->atten;?>
                                                
                                            </td>
                                             <td><?php echo $course_subject->max_marks;?></td>
                                             	<td> <input type="text" name="marks_obtain" id="marks_obt<?php echo $i; ?>" class="form-control"  value ="<?php echo $toup->marks_obtain; ?>" required="required"></td>
                                           	
                                                <td><?php echo $row->branch_id; ?></td>
                                                 <td> <button type="submit" id ="update<?php echo $i;?>" class="btn btn-success">Update</button>
                                                 <script> $("#update<?php echo $i;?>").click(function(){
			                                    	  var stu_id = $("#stud_id<?php echo $i; ?>").val();
				                       					//alert(stu_id);
				                       					var marks_obtain = $("#marks_obt<?php echo $i; ?>").val();
				                       					var c_id=<?php echo $c_id;?>;
				                       					var s_id=<?php echo $s_id;?>;
				                       				 //alert(s_id);
				                       					$.post("<?php echo site_url('allform/updateStuMarks') ?>",{stu_id : stu_id,marks_obtain : marks_obtain,c_id : c_id,s_id : s_id},function(data){
				                       						$("#update<?php echo $i;?>").html(data);
				                       					});
				                       				});</script>
							                                       </td>
                                                <?php  }
                                                 else{?>
                                                 	<td>  <div class="form-group">
														
														
															<label class="radio-inline">
																<input type="radio" class="grey" value="P" name="gender<?php echo $i;?>" id="gender<?php echo $i;?>"  checked="checked">
																p
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="A" name="gender<?php echo $i; ?>" id="gender<?php echo $i;?>"  >
																A
															</label>
															
													
														</div>
													</td>	
													<td> <?php echo $course_subject->max_marks;?></td>
                                                 	<td> <input type="text" name="marks_obtain" id ="marks_obt<?php echo $i; ?>" class="form-control" required="required">
                                                 	</td>
                                                 	
                                                 	<td><?php echo $row->branch_id; ?></td>
                                      <td> <button type="submit" id ="submit<?php echo $i;?>" class="btn btn-success">Save</button>
							                                       </td>
							                                      
							                                      
							                                        <script>
							                                        
							                                       $("#submit<?php echo $i;?>").click(function(){
							                                    	  var stu_id = $("#stud_id<?php echo $i; ?>").val();
							                       					var atten = $("#gender<?php echo $i;?>").val();
							                       					var marks_obtain = $("#marks_obt<?php echo $i; ?>").val();
							                       					var c_id=<?php echo $c_id;?>;
							                       					var s_id=<?php echo $s_id;?>;
							                       				 //alert(s_id);
							                       					$.post("<?php echo site_url('allform/saveStuMarks') ?>",{stu_id : stu_id,atten : atten,marks_obtain : marks_obtain,c_id : c_id,s_id : s_id},function(data){
							                       						$("#submit<?php echo $i;?>").html(data);
							                       					});
							                       				});

							                                      

								                       				
							                                       </script>
                                                <?php  }?>
                                            </tr>
                                            <?php $i++; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
            