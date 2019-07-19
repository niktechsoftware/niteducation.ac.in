<?php $this->load->view("header");?>
        <!-- header -->   
   <div class="banner-round">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			  <li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>
		<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			    
                                   <div class="item active">
                       <img src="<?php echo base_url();?>assets/uploads/banner1.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner2.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner3.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner4.jpg" alt="New York" width="1200" height="700">
                    </div>
                    <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner5.jpg" alt="New York" width="1200" height="700">
                    </div>
                     <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner6.jpg" alt="New York" width="1200" height="700">
                    </div>
                                  
			</div>
	    </div>
    </div>    
      
   
        
        <!-- /.banner-round -->
        <!-- ============== Banner section ============== -->
        <!-- ============== About and Service section ============== -->
        <div class="second-section">
            <div class="container about-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4 for-color">
                        <div class="about">
                            <h2>Latest News</h2>
                          <marquee class="new_maquee" behavior="scroll" direction="up" direction="up" scrollamount="1"  onMouseOver="stop()" onMouseOut="start()" width="100%" height="259px" style="padding-left:10px;font-size:12px; font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;" >
		
           <?php $res = $this->db->get("notice")->result();?>
           <?php foreach($res as $row):?>
           <p> <img src="<?php echo base_url();?>assets/images/symbol.jpg" width="15" height="18" />
           <?php echo $row->msg; ?>
            <img src="<?php echo base_url();?>assets/images/new.gif" width="33" height="16" /> </p>
            <?php endforeach;?>
           
            <br />
           
          </marquee>
                           </div>
                        <!-- The Modal -->

                        <!-- /.about -->
                    </div><br>
                    <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                    <div class="col-sm-12 col-lg-8 col-md-8  service">
                        <!--<h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" id="servicehome">Program</h2>-->
                        <div class="row">
                           
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/pmkvy.png" class="img-responsive serv" alt="online" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2">
                                    <p class="newse2">PMKVY</p>
                                    <p class="news6">Pradhan Mantri Kaushal Vikas Yojana (PMKVY) </p>
                                     <p><a href="goverment_institutional.html" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/lawyer.png" class="img-responsive serv" alt="business" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <p class="newse2">RPL</p>
                                    <p class="news6">Recognition of Prior Learning (RPL) is a platform to provide recognition to the informal learning or learning through work to get equal acceptance as the formal levels of education. </p>
                                    <p><a href="#" target="_blank" style="color:#000;">Read More</a></p>
                                  
                                </div>
                                <!-- /.business -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/business.png" class="img-responsive serv" alt="lawyer" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2">
                                    <p class="newse2">UPSDM</p>
                                    <p class="news6">Our milestone over these years is a huge acceptance of our training programmes.</p>
                                     <p><a href="fee_model.html" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                           
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/pmkk.png" class="img-responsive serv" alt="it management" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2" >
                                    <p class="newse2">Yoga</p>
                                    <p class="news6">It is ideal for those who have always wanted to have an in depth understanding of Yoga but have been unable to take a long time off.</p>
                                     <p><a href="goverment_institutional.html" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.service -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <br>
        
      <div class="our-clients">
       <section id="counter" class="counter-section content-section">
                <div class="container">

                    <div class="row text-center">
                    
                        <div class="col-md-12 col-lg-12">
                          <!--  <h2 class="white">STATS</h2>-->
                           
                        </div><!-- /.col-md-12 -->
                        <div class="col-sm-2 counter-wrap wow fadeInUp bdr_right" data-wow-offset="10">
                           <strong><span class="timer">10</span>+ </strong>
                            <span class="count-description"> Year Training Experience</span>
                        </div><!-- /.col-sm-3 -->
                        
                        <div class="col-sm-2 counter-wrap wow fadeInUp bdr_right" data-wow-offset="10">
                            <strong><span class="timer">14</span>+</strong>
                            <span class="count-description">Trained Trainers</span>
                        </div>

                        <div class="col-sm-2 counter-wrap wow fadeInUp bdr_right" data-wow-offset="10">
                            <strong><span class="timer">2500</span>+</strong>
                            <span class="count-description">Students</span>
                        </div><!-- /.col-sm-3 -->
                        
                        <div class="col-sm-2 counter-wrap wow fadeInUp bdr_right" data-wow-offset="10">
                            <strong><span class="timer">10000</span>+</strong>
                            <span class="count-description">Trained</span>
                        </div>
                       
                        <div class="col-sm-2 counter-wrap wow fadeInUp bdr_right" data-wow-offset="10">
                            <strong><span class="timer">5000</span>+ </strong>
                            <span class="count-description">Placed</span>
                        </div>
                          <div class="col-sm-2 counter-wrap wow fadeInUp" data-wow-offset="10">
                            <strong><span class="timer">3500</span></strong>
                            <span class="count-description">Scholarships</span>
                        </div>
                        <!-- /.col-sm-3 -->

                    </div><!-- /.row -->

                    <div style="height:0px;"></div>

                </div><!-- /.container -->

            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Courses in NIT</h2>
                        <div class="clients">
													<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client1.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client2.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client3.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client4.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client4_1.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client6.png" alt="client" />
                            </div>
                        							<div class="client">
                                <img src="<?php echo base_url();?>assets/uploads/client7.png" alt="client" />
                            </div>
                        							
                        							
                                                </div>
                    </div>
                    <!-- /.col-sm-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
          
                       
        
      
<?php $this->load->view("footer");?>