<?php $this->load->view('header.php')?>
 <div class="inner-banner inner">
 <img src="<?php echo base_url();?>assets/asset/images/online-payment-banner.jpg" style="margin-top:155px;" alt="Payment banner"/></div>
        <!-- /.inner-banner -->
        <!-- ============== About ============== -->
        <div class=" about-page ">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
					   <h2>Pay Fee</h2>
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
                                            <label for="inputEmail3" class="col-sm-3 control-label">REGISTRATION NUMBER</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="regnumber" name="regnumber" placeholder="REGISTRATION NUMBER" required="required" onkeyup="autocomplet()">
                                                <ul style="list-style: none; padding:0px;" id="student_list_id"></ul>
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">NAME</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="name" name="name" placeholder="NAME" required="required" onkeyup="alphabatevalid('name');">
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">FATHER NAME</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="f_name" name="f_name" placeholder="FATHER NAME" required="required" onkeyup="alphabatevalid('f_name');">
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">MOBILE No.</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="ENTERED REGISTERED MOBILE NUMBER" required="required" maxLength="10" onkeyup="digitvalid('mobile');">
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">EMAIL_ID</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="email" name="email" placeholder="EMAIL ID" onkeyup="stuEmailId('email','emailID');">
                                                <span id="emailID" Style="color:red"></span>

                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">COURSE NAME</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="course" name="course" placeholder="COURSE NAME" required="required" onkeyup="alphabatevalid('course')">
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">TOTAL AMOUNT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="fee" name="fee" placeholder="TOTAL AMOUNT" required="required" readonly >
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">SUBMIT AMOUNT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="pay_fee" name="pay_fee" placeholder="PAY AMOUNT" onkeyup="calculateFee()" required="required" >
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">REMAINING AMOUNT</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text" id="remain_fee" name="remain_fee" placeholder="REMAINING AMOUNT" required="required" readonly >
                                            </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">REMARKS</label>
                                            <div class="col-sm-6">
                                                <textarea rows="3" cols="58" id="comment" name="comment" form="feeform" class="form-control"  placeholder="Enter text here..."></textarea>

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
                                                <button type="submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp; PAY FEES &nbsp;&nbsp;&nbsp;&nbsp;</button>
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
          // if (!text_value.match(/^[A-Za-z]+$/)) {
          //     document.getElementById("fname").innerHTML = "Alphabates Only without space";
          //     document.getElementById(inputid).focus();
          //     if (text_value == "") {
          //        document.getElementById("fname").innerHTML = "";
                  
          //     }
          // }else{
          //      document.getElementById("fname").innerHTML = "";
          //      document.getElementById(inputid).focus();
          // }
          // console.log(text_value);
          value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z )]*/g, "");
          //value = text_value.replace(/[^(A-Za-z )]*/g, "");
          // console.log(value);
          document.getElementById(inputid).value=value;

    }
    function digitvalid(inputid) {
        var text_value = document.getElementById(inputid).value;
        value = text_value.replace(/[^(0-9)]*/g, "");
        document.getElementById(inputid).value=value;
    }
    function stuAddress() {
          var text_value = document.getElementById("address").value;
          // if (!text_value.match(/^[0-9a-zA-Z ]+$/)) {
          //     document.getElementById(spanid).innerHTML = "Enter Parmanent Address";
          //     document.getElementById("address").focus();
          //     if (text_value == "") {
          //         document.getElementById(spanid).innerHTML = " ";
          //     }
          // }else{
          //    document.getElementById(spanid).innerHTML = " ";
          //         document.getElementById("address").focus();
          // }
          value = text_value.replace(/[ ]+/g," ").replace(/[^(A-Za-z0-9- )]*/g, "");
          document.getElementById("address").value=value;
      }
      function stuEmailId(inputid,spanid) {
          var text_value = document.getElementById(inputid).value;
          if (!text_value.match(/^[a-z0-9._]+[@][a-z]+[.][a-z]+$/)) {
              document.getElementById(spanid).innerHTML = "Enter valid email id";
              document.getElementById(inputid).focus();
              if (text_value == "") {
                  document.getElementById(spanid).innerHTML = " ";
              }
          }else{
            document.getElementById(spanid).innerHTML = " ";
              document.getElementById(inputid).focus();
          }
      }
</script>
        

<?php $this->load->view('payfee_footer.php')?>