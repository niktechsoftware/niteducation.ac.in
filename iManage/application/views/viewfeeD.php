                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Student Fee Section</h4>
                                </div>
                            	<div class="panel-body">
                            		
		                            	
		                            	
		                            <?php $trfee = $this->db->query("SELECT * from cal_paid_fee where student_id = '$deta->student_id'  ORDER BY sno ASC");
		                            if($trfee->num_rows()>0){
		                            ?>	
		                                 <div class="col-lg-12 col-md-6">
		                                           <div class="panel panel-white">
						                                <div class="panel-heading">
						                                    <h3 class="panel-title">Fee Record Of <?php echo $deta->student_id." ( ".$deta->name." ) ";?></h3>
						                                    <div class="panel-control">
						                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"></a>
						                                    </div>
						                                </div>
						                               
						                                <div class="panel-body">
						                                    <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>SNo.</th>
												<th>Deposite Date</th>
												<th>invoice Date</th>
												<th>Course_fee</th>
												<th>Form_fee</th>
												<th>Registration_Fee</th>
												<th>Exam_fee</th>
												<th>Late_Fee</th>
													<th>total</th>
													<th>paid</th>
													<th>Invoice No</th>	
													<th>Status</th>	
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $sno = 1; foreach ($trfee->result() as $row): ?>
											<tr>
												<td><?php echo $sno; ?></td>
												<td><?php echo $row->should_paid_date; ?></td>
												<td><?php echo $row->invoice_date; ?></td>
												<td><?php echo $row->Course_fee; ?></td>
												<td><?php echo $row->Form_fee; ?></td>
												<td><?php echo $row->Registration_Fee; ?></td>
												<td><?php echo $row->Exam_fee; ?></td>
												<td><?php echo $row->Late_Fee; ?></td>
												<td><?php echo $row->total_amount; ?></td>
												<td><?php echo $row->paid_amount; ?></td>
												<td><a href="<?php echo base_url(); ?>apanel/feeInvoice/<?php echo $deta->student_id;?>/<?php echo $row->invoice_number;?>"><?php echo $row->invoice_number;?></a></td>
												<td><?php echo $row->status; ?></td>
											</tr>
											<?php $sno++; endforeach; ?>
                                        </tbody>
                                       </table>  
                                    </div>
						                                </div>
						                            </div>
						                          </form>  
						                        </div>
		                                <?php }else{
		                                	$dt=date("Y-m-d");
		                                	
		                                	$dt = date('Y-m-d', strtotime("+1 months", strtotime($dt)));   
		                                	echo date('M-Y', strtotime($dt));;
		                                }?>
		                              
		                                
		                               
								
								
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->