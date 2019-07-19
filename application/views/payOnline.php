<?php $this->load->view('header.php')?>
<div class="inner-banner inner">
<img src="<?php echo base_url();?>assets/asset/images/online-payment-banner.jpg" style="margin-top:155px;" alt="Payment banner" /> </div>
        <!-- /.inner-banner -->
        <!-- ============== About ============== -->
        <div class=" about-page ">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
					   <h2>Pay ONLINE</h2>
						</div>
						<!-- /.col-lg-3 col-md-3 col-sm-3 -->
						<div class="wow bounceInUp col-lg-9 col-md-9 col-sm-9 " data-wow-duration="1s " data-wow-delay="0.5s ">
							<form class="form-horizontal" action="<?php echo base_url()?>index.php/Paytm/pgRedirect" id="feeform" method="post" enctype="multipart/form-data">
									<br>
										<br>
										<h3>Please Fill All Details for Fees Payment Online.</h3>
										<br>
                                        <div>
                                            <?php 
                                            if($this->uri->segment(3) == 'success'){
                                            $msg = $this->uri->segment(3); 
                                            ?>
                                            <div class="alert alert-success" role="alert">
                                                Well done! You successfully  Customer detail.
                                            </div>
                                            <?php }?>
                                            </div>
										
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">PAY FOR</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="pay_for" name="pay_for" placeholder="ENTER PRODUCT/COURSE NAME" required="required" onkeyup="alphabatevalid('pay_for')">
                                                <ul style="list-style: none; padding:0px;" id="student_list_id"></ul>
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">AMOUNT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="pay_fee" name="pay_fee" placeholder="ENTER PAY AMOUNT" onkeyup="digitvalid('pay_fee')" required="required" >
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">PAID BY</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="f_name" name="f_name" placeholder="ENTER YOUR NAME" required="required" onkeyup="alphabatevalid('f_name')">
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">MOBILE No.</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="ENTERED REGISTERED MOBILE NUMBER" required="required" maxLength="10" onkeyup="digitvalid('mobile')">
                                            </div>    
                                        </div>

                                         <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">REMARKS</label>
                                            <div class="col-sm-6">
                                                <textarea rows="4" cols="50" id="comment" name="comment" form="feeform" class="form-control" placeholder="Describe yourself here..."></textarea>

                                            </div>    
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="inputEmail3" class="col-sm-3 control-label"></label>
                                          <div class="col-sm-6">
                                            <input type="checkbox" id="terms" name="terms" value="Yes"> I agree the <a href="#" style="color: blue">terms & conditions of the NIT Educational Institute</a><br>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-10">
                                                <input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp; PAY ONLINE &nbsp;&nbsp;&nbsp;&nbsp;</button>
                                            </div>
                                        </div>

                            </form>                
                        </div>
					</div>
									
                    <!-- /.col-lg-9 col-md-9 col-sm-9 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
       
    <br>

<br>
<script>
        // assign function to onsubmit property of form
       document.getElementById('feeform').onsubmit = function() {
        // get reference to required checkbox
        var terms = this.elements['terms'];
        
        if ( !terms.checked ) { // if it's not checked
            // display error info (generally not an alert these days)
            alert( 'Please click on agreement with our terms checkbox before payment ' );
            return false; // don't submit
        }
        return true; // submit
        };

     function alphabatevalid(inputid) {
          var text_value = document.getElementById(inputid).value;
          value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
          document.getElementById(inputid).value=value;
      }
      function digitvalid(inputid) {
          var text_value = document.getElementById(inputid).value;
          value = text_value.replace(/[^(0-9)]*/g, "");
          document.getElementById(inputid).value=value;
      }
</script>

<?php $this->load->view('footer.php')?>