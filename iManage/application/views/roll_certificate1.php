<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Certificate Section</h4>
                                </div>
                            	<div class="panel-body">
                            		 <div class="col-lg-12 col-md-6">
		                                 <form class="form-horizontal" action="<?php echo base_url()?>apanel/getCertificatemsme" method="post" enctype="multipart/form-data">
						                          
						                          
						                 <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Enter SI No</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="rollnumber" class="form-control" placeholder="Enter SI No" required="required">
                                            </div>
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	
                                                <button type="submit" class="btn btn-success">Get Certificate</button>
                                            </div>
                                           
                                        </div>    
						                        <?php if($this->uri->segment(3)){
                                            echo "Please Enter A valid Rollnumber.";
                                            }?>    
						                  </form>  
						              </div>
		                               
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->