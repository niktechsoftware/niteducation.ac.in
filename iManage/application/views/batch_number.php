
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
$(document).ready(function() {
    $('#example1').DataTable();
        } );
</script>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Batch Number</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="col-md-6">
		                            	<?php if($this->uri->segment(3) == "edit"):?>
		                            	<?php $this->db->where("id",$this->uri->segment(4));?>
		                            	<?php $deta = $this->db->get("batch_number")->row();?>
		                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editBatch_number" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Batch Number</strong></label>
		                                            <div class="col-sm-6">
		                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
		                                            	 <input  name="batchold" type="hidden" class="form-control" value="<?php echo $deta->batch_no; ?>" id="input-Defaultold">
		                                                <input name="batch" type="text" class="form-control" value="<?php echo $deta->batch_no; ?>" id="input-Default" >
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Edit Batch Number</button>
		                                         </div>
		                                    </form>
		                                <?php else:?>
		                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveBatch_number" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-4 control-label"><strong>Batch Number</strong></label>
		                                            <div class="col-sm-8">
		                                                <input type="text" class="form-control" id="input-Default" name="batch">
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Batch Number</button>
		                                         </div>
		                                    </form>
		                                <?php endif;?>
									</div>
									<div class="col-md-6">
										<table class="table" id="example1" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Batch Number</th>
												<!-- <th>Branch Number</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("batch_number")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->batch_no	; ?></td>
												<!-- <td><?php// echo $row->branch_id	; ?></td> -->
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/batchnumber/edit/<?php echo $row->id;?>">Edit</a> | 
                                                	<a href="<?php echo base_url();?>allform/deleteBatchnumber/<?php echo $row->id;?>">Delete</a>
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
