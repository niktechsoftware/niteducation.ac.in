               
             
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Reg.No.</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Course Applied</th>
                                                <th>Applied Date</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>Branch</th>
                                                <th>Registration</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        	
                                        	$this->db->where("isApprove","NO");
                                        	$res = $this->db->get("web_student_requ")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url()?>apanel/print_confirm_web/<?php echo $row->student_id;?>/">
                                                    <?php echo $row->student_id; ?>
                                                </td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fName; ?></td>
                                                <?php $this->db->where("id",$row->courseApplied);
                    	                        $rtcourse = $this->db->get("courses")->row();?>
                    				            <td><?php echo $rtcourse->course_name;?></td>
                                                
                                                <td><?php echo date("d-M-Y",strtotime($row->apply_date));?></td>
                                                <td><?php echo $row->address; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->branch_id; ?></td>
                                                 <td><a href="<?php echo base_url()?>allform/addedStudent/<?php echo $row->student_id; ?>">Confirm</a></td> 
                                                <td><a href="<?php echo base_url()?>apanel/studentwebEdit/<?php echo $row->student_id; ?>">Edit</a></td>
                                                <td><a href="<?php echo base_url()?>allform/deletewebStudents/<?php echo $row->student_id; ?>" onclick="if (confirm('Are you sure you want to delete?')) commentDelete(1); return false">Delete</a></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                
            