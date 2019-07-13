          
<div id="main-wrapper" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
            	<div class="panel-body">
                   <div class="table-responsive">
                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Course Applied</th>
                                <th>Batch No</th>
                                <th>Batch Timing</th>
                                <th>Branch</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $res = $this->db->get("student_info")->result();?>
                        	<?php foreach($res as $row):?>
                            <tr>
                                <td>
                                	<a href="<?php echo base_url()?>apanel/printRegister/<?php echo $row->student_id; ?>/lskajdfasiuf09e4iuorivmnsldfosuteioruetoi">
                                		<?php echo $row->student_id; ?>
                                	</a>
                                </td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->fName; ?></td>
                                 <?php $this->db->where("id",$row->courseApplied);
                                $rtcourse = $this->db->get("courses")->row();?>
                                <td><?php echo $rtcourse->course_name;?></td>
                               
                                <td><?php echo $row->branch_no; ?></td>
                                <td><?php echo $row->timing; ?></td>
                                <td><?php echo $row->branch_id; ?></td>
                                <td><a href="<?php echo base_url()?>apanel/studentEdit/<?php echo $row->student_id; ?>">Edit</a></td>
                                <td><a href="<?php echo base_url()?>allform/deleteStudent/<?php echo $row->student_id; ?>">Delete</a></td>
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
                
            