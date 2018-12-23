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
			                            	<?php if($this->uri->segment(3) == "edit"):?>
			                            	<?php $this->db->where("id",$this->uri->segment(4));?>
			                            	<?php $deta = $this->db->get("courses")->row();?>
			                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editCourse" method="post">
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label"><strong>Course Name</strong></label>
			                                            <div class="col-sm-4">
			                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
			                                                <input type="text" class="form-control" value="<?php echo $deta->course_name; ?>" id="input-Default" name="course">
			                                             </div>
			                                             <label for="input-Default" class="col-sm-2 control-label"><strong>Duration in Months</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="number" class="form-control" id="input-Default123" value="<?php echo $deta->duration_in_months;?>" name="dureation">
			                                            </div>
			                                           
			                                          
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Form Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="input-Default" name="Form_fee" value="<?php echo $deta->Form_fee;?>">
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Registration_Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Registration_Fee" name="Registration_Fee" value="<?php echo $deta->Registration_Fee;?>">
			                                            </div>
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Exam_fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Exam_fee" name="Exam_fee" value="<?php echo $deta->Exam_fee;?>">
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Late_Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Late_Fee" name="Late_Fee" value="<?php echo $deta->Late_Fee;?>">
			                                            </div>
			                                        </div>
			                                        
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Course Total Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Exam_fee" name="course_fee" value="<?php echo $deta->course_fee;?>">
			                                            </div>
			                                      
			                                        
			                                          
			                                        </div>
			                                        
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label">Course Detail</label>
			                                            <div class="col-sm-10">
			                                            	<textarea rows="6" cols="60" class="summernote" name="detail" >
			                                            		<?php echo $deta->detail; ?>
			                                            	</textarea>
			                                            </div>
			                                        </div>
			                                        
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Edit Course Details</button>
			                                         </div>
			                                    </form>
			                                <?php else:?>
			                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveCourse" method="post">
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Course Name</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="input-Default" name="course">
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Duration in Months</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="number" class="form-control" id="input-Default123" name="dureation">
			                                            </div>
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Form Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="input-Default" name="Form_fee">
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Registration_Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Registration_Fee" name="Registration_Fee">
			                                            </div>
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Exam_fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Exam_fee" name="Exam_fee">
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Late_Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Late_Fee" name="Late_Fee">
			                                            </div>
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Course Total Fee</strong></label>
			                                            <div class="col-sm-4">
			                                                <input type="text" class="form-control" id="Exam_fee" name="course_fee" />
			                                            </div>
			                                      
			                                        
			                                          
			                                        </div>
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label">Course Detail</label>
			                                            <div class="col-sm-10">
			                                            	<textarea rows="6" cols="60" class="summernote" name="detail" >
			                                            		
			                                            	</textarea>
			                                            </div>
			                                        </div>
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Save Course</button>
			                                         </div>
			                                    </form>
			                                <?php endif;?>
										</div>
									</div>
									<div class="row">
                            			<div class="col-md-12">
											<table class="table" style="width: 100%; cellspacing: 0;">
	                                        <thead>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>Course Name</th>
	                                                 <th>Course fee</th>
	                                                 <th>Duration</th>
	                                                 <th>Form_fee</th>
	                                                  <th>Registration_Fee</th>
	                                                  <th>Exam_fee</th>
	                                                  <th>Late_Fee</th>
	                                                  <th>Detail</th>   
	                                                <th>Action</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php $i = 1;?>
	                                        	<?php $res = $this->db->get("courses")->result();?>
	                                        	<?php foreach($res as $row):?>
	                                            <tr>
	                                                <td>
	                                                	<?php echo $i; ?>
	                                                </td>
	                                                <td><?php echo $row->course_name; ?></td>
	                                                 <td><?php echo $row->course_fee; ?></td>
	                                                 <td><?php echo $row->duration_in_months; ?></td>
	                                                   <td><?php echo $row->Form_fee; ?></td>
	                                                 <td><?php echo $row->Registration_Fee; ?></td>
	                                                  <td><?php echo $row->Exam_fee; ?></td>
	                                                   <td><?php echo $row->Late_Fee; ?></td>
	                                                    <td><?php echo $row->detail; ?></td>
	                                                <td>
	                                                	<a href="<?php echo base_url();?>apanel/courses/edit/<?php echo $row->id;?>">Edit</a> | 
	                                                	<a href="<?php echo base_url();?>allform/deleteCourse/<?php echo $row->id;?>">Delete</a>
	                                                </td>
	                                            </tr>
	                                            <?php $i++;?>
	                                            <?php endforeach;?>
	                                        </tbody>
	                                       </table>  
										</div>
                            		</div>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->