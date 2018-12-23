                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Student Fee Section</h4>
                                </div>
                            	<div class="panel-body">
                            		
		                            	
		                            	<?php $this->db->where("student_id",$studentId);?>
		                            	<?php $deta = $this->db->get("student_info")->row();?>
		                            <?php 
		                            $temainFee = $this->db->query("SELECT remaining as remain from cal_paid_fee where student_id = '$deta->student_id' AND status='paid' ORDER BY sno DESC LIMIT 1")->row();
		                            $trfee = $this->db->query("SELECT should_paid_date from cal_paid_fee where student_id = '$deta->student_id' AND status='pending' ORDER BY sno ASC");
		                            if($trfee->num_rows()>0){
		                            ?>	
		                                 <div class="col-lg-12 col-md-6">
		                                 <form class="form-horizontal" action="<?php echo base_url()?>feeC/savestudentFee" method="post" enctype="multipart/form-data">
						                            <div class="panel panel-white">
						                                <div class="panel-heading">
						                                    <h4 class="panel-title">Student Fee</h4>
						                                    <div class="panel-control">
						                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"></a>
						                                    </div>
						                                </div>
						                                <div class="panel-body">
						                                    <div class="weather-widget">
						                                        <div class="row">
						                                            <div class="col-md-12">
						                                                <div class="col-md-2">
						                                                    <div class="pull-left">
						                                                    <?php if(strlen($deta->photo)>0){?>
						                                                        <img alt="" src="<?php echo base_url();?>assets/images/stuImage/<?php echo $deta->photo;?>" width="100" height="100"/>
						                                                    <?php }else{?>
						                                                      <img alt="" src="<?php echo base_url();?>assets/images/stuImage/<?php echo "homeless.jpg";?>" width="100" height="100"/>
						                                                    <?php }?>
						                                                    </div>
						                                                 </div> 
						                                                  <div class="col-md-3">
						                                                  Student ID <h2> <span><?php echo $deta->student_id;?>
						                                                  <input type="hidden" name="student_id" value="<?php  echo $deta->student_id;?>" id="student_id"/>
						                                                  </span></h2>
						                                                 </div>  
						                                                  <div class="col-md-6">
						                                                  <?php $this->db->where("id",$deta->courseApplied);
						                                                 $getcourse= $this->db->get("courses")->row();?>
						                                                     <h2 ><?php echo $getcourse->course_name;?><br><small><b><?php echo date("Y-m-d")." fee Type : ".$deta->fee_method; ?></b></small></h2>
						                                                 </div>   
						                                                  
						                                                  
						                                               
						                                            </div>
						                                            <div class="col-md-3">
						                                                <ul class="list-unstyled weather-info">
						                                                    <li>Name	: <span ><b><?php echo $deta->name; ?></b></span></li>
						                                                    <li>Father Name :<span ><b><?php echo $deta->fName; ?></b></span></li>
						                                                    <li>Aadhar_number "<span ><b><?php echo $deta->aadhar_number; ?></b></span></li>
						                                                    <li>Address :<span><b><?php echo $deta->address; ?></b></span></li>
						                                                     <li>Depositor Name :<span><b>
						                                                      <input type="text" name="depositor_name" class="form-control"  required="required">
                                           
						                                                     </b></span></li>
						                                                     <li>Remark :<span><b><textarea rows="3" cols="33" name = "remark"></textarea></b></span></li>
						                                                </ul>
						                                            </div>
						                                            <div class="col-md-3">
						                                                <ul class="list-unstyled weather-info">
						                                                    <li> Mother Name :<span ><b><?php echo $deta->mother_name; ?></b></span></li>
						                                                    <li>Date Of Birth : <span ><b><?php echo $deta->dob; ?></b></span></li>
						                                                    <li>Timing :<span><b><?php echo $deta->timing; ?></b></span></li>
						                                                    <li>Mobile :<span ><b><?php echo $deta->mobile; ?></b></span></li>
						                                                    
						                                                     <li>Paymode :<span ><b>  <select  class="form-control" name="paymode" required="required">
											                                    	<option value="">-Select MOde-</option>
											                                    	<option value="CASH">CASH</option>
											                                    	<option value="ONLINE">ONLINE</option>
											                                    </select></b></span></li>
											                                    
											                                <?php if($deta->fee_method!="One Time"){?>    
											                                     <li>Select Month/Installment :<span ><b>  <select  class="form-control" name="monthname" required="required">
											                                    	<option value="">-Select Month-</option>
											                                    	
											                                   
											                               <?php 
											                               
											                               foreach($trfee->result() as $row):
											                               ?>
											                               <option value="<?php echo $row->should_paid_date;?>">-<?php  echo date('M-Y', strtotime($row->should_paid_date));?>-</option>
											                            <?php    endforeach; ?>
											                             </select></b></span></li>
											                               <?php }?>
						                                                </ul>
						                                            </div>
						                                             <div class="col-md-6">
						                                                <ul class="list-unstyled weather-info">
						                                                <?php $fields = $this->db->list_fields('cal_paid_fee');
						                                              
						                                               $fieldfee = $this->db->query("SELECT * from cal_paid_fee where student_id = '$deta->student_id' AND status='pending' ORDER BY sno ASC LIMIT 1")->row();
						                                               
						                                               foreach($fields as $field):
						                                                if($field != "sno" && $field != "student_id" && $field != "remark" && $field != "should_paid_date" && $field != "invoice_date" && $field != "invoice_number" && $field != "branch_id" && $field != "status"){
																	
						                                               	?>
						                                                    <li><?php echo $field;?> <span class="pull-right"><b><input type="text" id ="<?php echo $field; ?>" name="<?php echo $field; ?>" value ="<?php if($temainFee){
						                                                    																																				if($field=="remaining"){
						                                                    																																					echo $temainFee->remain;
						                                                    																																				}else{
						                                                    																																				if($field=="total_amount"){
						                                                    																																					$tot = $fieldfee->$field + $temainFee->remain;
						                                                    																																					echo $tot;
						                                                    																																				}else{
						                                                    																																					echo $fieldfee->$field;
						                                                    																																				}
						                                                    																																				}}
						                                                    																																				else{echo $fieldfee->$field;}?>"/></b></span></li>
						                                             
						                                                <?php } endforeach;
						                                              ?>
						                                                </ul>
						                                              <input type="hidden" name="rowid" value = "<?php echo $fieldfee->sno;?>"/>
						                                                  <div class="col-sm-offset-2 col-sm-3">
                                            	
							                                                <button type="submit" class="btn btn-success">Save & Print</button>
							                                            </div>
						                                            </div>
						                                           
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                          </form>  
						                        </div>
		                                <?php }else{
		                                	echo "Fee Not Due";
		                                }?>
		                              
		                                
								
								
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                
                <script>
               <?php foreach($fields as $field): 
               if($field != "sno" && $field != "student_id" && $field != "remark" && $field != "should_paid_date" && $field != "invoice_date" && $field != "invoice_number" && $field != "branch_id" && $field != "status" && $field != "total_amount" && $field != "paid_amount"){
               ?>
               
               $("#<?php echo $field;?>").keyup(function(){
                   totsum=0;
                 <?php   foreach($fields as $field): 
                       if($field != "sno" && $field != "student_id" && $field != "remark" && $field != "should_paid_date" && $field != "invoice_date" && $field != "invoice_number" && $field != "branch_id" && $field != "status" && $field != "total_amount" && $field != "paid_amount"){
                       ?>
                       totsum += Number($("#<?php echo $field; ?>").val());
				<?php }
				endforeach;?>
				$("#total_amount").val(totsum);	
               });
               <?php }endforeach;?>
				
			$("#paid_amount").keyup(function(){
				var total_amount = $("#total_amount").val();
				var amount = $("#paid_amount").val();
			$("#remaining").val(total_amount-amount);	
			  });
		
                </script>
                