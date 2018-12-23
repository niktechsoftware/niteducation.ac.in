                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Upload Pop Up Images</h4>
                                </div>
                            	<div class="panel-body">
                                   
                              
                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/popup" method="post" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Upload Pop Up Images</label>
                                            <div class="col-sm-10">
                                             <input class="form-control" type="file" name="cphoto" required="required">
                                            </div>
                                        </div>
                                         <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success">Save Pop Up Images</button>
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
                                                <th>Image</th>
                                               
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("popup")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td>
                                                  <img src="<?php echo base_url();?>assets/<?php echo $row->popup; ?>" width="100px"/>
                                               </td>
                                                <td><?php echo $row->date; ?></td>
                                                <td>
                                                	
                                                	<a href="<?php echo base_url();?>allform/deletepopup/<?php echo $row->id;?>/<?php echo $row->popup;?>">Delete</a>
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