               
              <script src="<?php echo base_url()?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <div id = "rahul"></div>
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead> 
                                            <tr>
                                                <th>Si No</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Gaurdian Name</th>
                                                <th>Mobile1</th>
                                                 <th>Mobile2</th>
                                                <th>Print Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $res = $this->db->get("pmgdish")->result();?>
                                        	
                                        	<?php $i=1 ; foreach($res as $row): ?>
                                        	<?php if($row->status != "conformed"){ ?>
                                            <tr>
                                               <td><a href="<?php echo base_url()?>allform/editpmgdisha/<?php echo $row->sino;?>"><?php echo $row->sino; ?>
                                               <input type ="hidden" name ="rid<?php echo $i;?>" id="rid<?php echo $i;?>" value = "<?php echo $row->sino; ?>" /> 
                                               </a>
                                               </td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->fname; ?></td>
                                                  <td><?php echo $row->mother_name; ?></td>
                                                <td><?php echo $row->gaurdian_name; ?></td>
                                                <td><?php echo $row->mobile1; ?></td>
                                                <td><?php echo $row->mobile2; ?></td>
                                                <?php if($row->status == "submitted"){ ?> 
                                                <td style="color: red">Printed</td>
                                                <?php }
                                                else{ 
                                                	?>
                                                	 <td>
						<select class="status" id="submitp<?php echo $i;?>">
						<option value="pending">Not Printed</option>
						<option value="submitted">Printed</option>
						</select>
					        </td>
                                              <?php } ?>                                               
                                               
                                               
                                                 <td><a href="<?php echo base_url()?>allform/deletepmgdishaStudent/<?php echo $row->sino;?>/<?php echo $row->student_image;?>">Delete</a></td>
                                            </tr>
                                               
                
                                             <script>
                                           $("#submitp<?php echo $i;?>").change(function(){
			var status = $("#submitp<?php echo $i;?>").val();
			
			var id = $("#rid<?php echo $i;?>").val();
			$.post("<?php echo site_url("apanel/updateStatus") ?>",{status : status,id : id}, function(data){
			$("#rahul").html(data);
			window.location.reload(true);
				});
		});
                                            </script>
                                            <?php } ?>
                                            <?php $i++ ; endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
            