       <style>

.highlight-error {
  border-color: green;
}

</style>        
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>allform/savepmgdisha" method="post" enctype="multipart/form-data">
                                       
                                        
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">SI No</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="sino" placeholder="SI No" >
                                            </div>
                                           <label for="inputEmail3" class="col-sm-2 control-label">Aadhar Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="aadhar_number" data-type="aadhar_number" maxLength="16" class="form-control"  placeholder="AAdhar Number" required="required">
                                            </div>
                                        </div>
                                     
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" placeholder="Candidate Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" placeholder="Father's Name" required="required">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mother's Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="mother_name"  placeholder="Mother Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Guardian's Name</label>
                                            <div class="col-sm-4">
                                                 <input class="form-control" type="text" name="gaurdian_name"  placeholder="Guardian's Name" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile no 1</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="mobile1"  placeholder="Mobile no 1" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Mobile no 2</label>
                                            <div class="col-sm-4">
                                                 <input class="form-control" type="text" name="mobile2"  placeholder="Mobile no 2">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date Of Passing</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="year"  placeholder="Date Of Passing" >
                                            </div>
                                           
                                           
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Photo</label>
                                           
                                             <div class="col-sm-4">
                                            <input class="form-control" type="file" name="cphoto"   required="required">
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