                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Upload Study Meterial PDF</h4>
                                </div>
                            	<div class="panel-body">
                                   
                              
                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/uploadStudyMeteriaPdf" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Course Desc.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default" name="coursedesc">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Study Mererial PDF</label>
                                            <div class="col-sm-10">
                                             <input class="form-control" type="file" name="cphoto" required="required">
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Study Meterial</button>
                                         </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
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
                                                <th>#</th>
                                                <th>Course Desc</th>
                                               
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("studymeterialpdf")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->coursedesc; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                                <td>
                                                	
                                                	<a href="<?php echo base_url();?>allform/deleteuploadStudyMeteriaPdf/<?php echo $row->id;?>/<?php echo $row->coursepdf;?>">Delete</a>
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
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->