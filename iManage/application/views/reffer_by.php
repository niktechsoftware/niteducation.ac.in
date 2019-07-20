
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
                                    <h4 class="panel-title">Reffered By</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="col-md-6">
		                            	<?php if($this->uri->segment(3) == "edit"):?>
		                            	<?php $this->db->where("id",$this->uri->segment(4));?>
		                            	<?php $deta = $this->db->get("reffered_by")->row();?>
		                                   <form class="form-horizontal" action="<?php echo base_url()?>allform/editrefferby" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Reffered By :</strong></label>
		                                            <div class="col-sm-6">
		                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="id">
		                                            	 <input  name="reffold" type="hidden" class="form-control" value="<?php echo $deta->refference; ?>" id="input-Defaultold">
		                                                <input name="reff" type="text" class="form-control" value="<?php echo $deta->refference; ?>" id="input-Default" >
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Edit Reffered By</button>
		                                         </div>
		                                    </form>
		                                <?php else:?>
		                                	<form class="form-horizontal" action="<?php echo base_url()?>allform/saveRefferby" method="post">
		                                        <div class="form-group">
		                                            <label for="input-Default" class="col-sm-6 control-label"><strong>Reference Name</strong></label>
		                                            <div class="col-sm-6">
		                                                <input type="text" class="form-control" id="input-Default" name="reff">
		                                            </div>
		                                        </div>
		                                         <div class="col-sm-offset-2 col-sm-10">
		                                            <button type="submit" class="btn btn-success">Submit</button>
		                                         </div>
		                                    </form>
		                                <?php endif;?>
									</div>
									<div class="col-md-6">
										<table class="table" id="example1" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Reffered By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("reffered_by")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                                <td>
                                                	<?php echo $i; ?>
                                                </td>
                                                <td><?php echo $row->refference	; ?></td>
                                                <td>
                                                	<a href="<?php echo base_url();?>apanel/refferby/edit/<?php echo $row->id;?>">Edit</a> | 
                                                	<a href="<?php echo base_url();?>allform/deleteReference/<?php echo $row->id;?>">Delete</a>
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
