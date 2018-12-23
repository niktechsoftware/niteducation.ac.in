                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Course</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="row">
	                            		<div class="col-md-12">
			                            	
			                            	<?php $this->db->where("id",$this->uri->segment(4));?>
			                            	<?php $deta = $this->db->get("courses")->row();?>
			                                  
			                              
			                                	<form class="form-horizontal" action="<?php echo base_url()?>apanel/defineSubject/crSubject" method="post">
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Course Name</strong></label>
			                                            <div class="col-sm-4">
			                                            <select name="courseApplied" class="form-control" required="required">
													<option value="">-Select Course-</option>
													<?php 
														
														foreach($courseName as $row):
													?>
														<option value="<?php echo $row->id;?>"><?php echo $row->course_name;?></option>
													<?php endforeach;?>
												</select>
			                                                
			                                            </div>
			                                      <div class="col-sm-4">
			                                            <button type="submit" class="btn btn-success">Create Subject </button>
			                                                
			                                            </div>
			                                        
			                                           
			                                        </div>
			                                       
			                                        
			                                         
			                                    </form>
			                                    <?php if($checksub!="no"){
			                                    $this->db->select("course_name");
			                                    $this->db->where("id",$cid);
			                                    $vy= $this->db->get("courses")->row();
			                                    	echo "<h1>".$vy->course_name."</h1>";?>
			                                 <table class="table" style="width: 100%; cellspacing: 0;">
			                                 		<tr><th>Subject Name</th><th>Max Number</th><th>marks Obtain</th><th>Activity</th><tr>
			                                 		
			                                 		<tr>
			                                 		<form class="form-horizontal" action="<?php echo base_url()?>apanel/saveSubject" method="post">
			                                 			<td>  
			                                 			<input type="hidden" class="form-control"  name ="id" value="<?php echo $cid;?>">
			                                 			<input type="text" class="form-control" id="sub_name" name="sub_name"></td>
			                                 			<td><input type="number" class="form-control" id="max_num" name="max_num"></td>
			                                 			
			                                 			<td><button type="submit" class="btn btn-success"> Add Subject</button></td>
			                                 		</form>	
			                                 		</tr>
			                                 		
			                                 <?php foreach($checksub->result() as $rt):?>
			                                 			<tr>
			                                 			<td> <?php echo $rt->subject_name;?></td>
			                                 			<td><?php echo $rt->max_marks; ?></td>
			                                 			<td><a href="<?php echo base_url()?>allform/fillMarks/<?php echo $rt->sno; ?>/<?php echo $rt->course_id; ?>">fill Marks</a></td>
                                           				<td> <a href="<?php echo base_url()?>allform/deleteSubject/<?php echo $rt->sno; ?>/<?php echo $rt->course_id; ?>">Delete</a></td>
                                            
			                                 			
			                                 		</tr>
			                                 <?php endforeach;?>
			                                 </table>
			                                    	
			                                    	
			                                   <?php  }?>
			                                    
			                              
										</div>
									</div>
									
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->