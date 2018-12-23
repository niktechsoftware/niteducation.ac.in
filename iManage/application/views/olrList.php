               
             
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body" ">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Reg.No.</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Course Applied</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>Branch</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php 
                                        	
                                        	$this->db->where("isApprove","NO");
                                        	$res = $this->db->get("web_student_requ")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $row->student_id; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fName; ?></td>
                                                 <?php $this->db->where("id",$row->courseApplied);
	                        $rtcourse = $this->db->get("courses")->row();?>
				<td><?php echo $rtcourse->course_name;?></td>
                                               
                                                <td><?php echo $row->address; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->branch_id; ?></td>
                                                 <td><a href="<?php echo base_url()?>allform/addedStudent/<?php echo $row->student_id; ?>">Added</a></td>
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
                
            