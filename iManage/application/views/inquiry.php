                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            	<?php if($this->uri->segment(3) == 'deltrue'):?>
		                                <div class="alert alert-success" role="alert">
		                                        Well done! You successfully Row Delete.
		                                </div>
	                                <?php elseif($this->uri->segment(3) == 'delfalse'):?>
	                                	<div class="alert alert-danger" role="alert">
		                                        Somthing Going Worng ! Please contact to developer....
		                                </div>
	                                <?php endif;?>
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>SNo</th>
                                                <th>Name</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                 <th>Dist</th>
                                                 <th>Purpose</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                 <td><?php echo $row->district; ?></td>
                                                  <td><?php echo $row->purpose; ?></td>
                                                <td><?php echo date("d-M-Y",strtotime($row->date)); ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>allform/deleteEnquiry/<?php echo $row->sno;?>">
                                                		Delete
                                                	</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->