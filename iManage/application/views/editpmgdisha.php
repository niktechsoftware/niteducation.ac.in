<?php 

	$sino = $this->uri->segment(3);

$this->db->where("sino",$sino);
$profile = $this->db->get("pmgdish")->row();
?>
              <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/saveEditPmgdisha" method="post" >
                                       
                                        
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">SI No</label>
                                            <div class="col-sm-4">
                                            <label><?php echo $profile->sino;?></label>
                                            <input type ="hidden" name ="sino" id="sino" value ="<?php echo $profile->sino;?>" /> 
                                                
                                            </div>
                                           <label for="inputEmail3" class="col-sm-2 control-label">Aadhar Number</label>
                                            <div class="col-sm-4">
                                            <label><?php echo $profile->aadhar_number;?></label>
                                                
                                            </div>
                                        </div>
                                     
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                             <label><?php echo $profile->name;?></label>
                                              
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                              <label><?php echo $profile->fname;?></label>
                                             
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mother's Name</label>
                                            <div class="col-sm-4">
                                             <label><?php echo $profile->mother_name;?></label>
                                                
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Guardian's Name</label>
                                            <div class="col-sm-4">
                                             <label><?php echo $profile->gaurdian_name;?></label>
                                                 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile no 1</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="mobile1"  placeholder="Mobile no 1" value="<?php echo $profile->mobile1;?>" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile no 2</label>
                                            <div class="col-sm-4">
                                                 <input class="form-control" type="text" name="mobile2"   value="<?php echo $profile->mobile2;?>" placeholder="Mobile no 2">
                                            </div>
                                        </div>
                                       
                                         <div class="form-group">
                                        
                                            <div class="col-sm-offset-2 col-sm-3">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->