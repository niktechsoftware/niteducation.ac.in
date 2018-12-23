        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index-2.html" class="logo-name text-lg text-center">NIT Eduction Verification Card</a>
                                <p class="text-center m-t-md">Please prvoid student-ID for Verification Card.</p>
                                <form class="m-t-md" action="<?php echo base_url();?>apanel/getcard.jsp" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Student-ID" name="sid" required="required" autocomplete="off"> 
                                    </div>
                                    
                                    <?php if($this->uri->segment(3) == "authFals"){?>
                                    <div class="alert alert-danger" role="alert">
                                        Oh snap! Wrong studentID or you are belogns to yoga.
                                    </div>
                                    <?php }?>
                                    <?php if($this->uri->segment(3) == "fals"){?>
                                    <div class="alert alert-danger" role="alert">
                                        Oh snap! your photo and signature not uploaded. Please provide first.
                                    </div>
                                    <?php }?>
                                    <button type="submit" class="btn btn-success btn-block">Get Verification-Card</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->