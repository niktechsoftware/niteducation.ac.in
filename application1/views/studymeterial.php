<?php $this->load->view('header.php')?>
 <div class="inner-banner inner">
            <img src="<?php echo base_url();?>assets/asset/images/about-banner.png" alt="about banner" />
        </div>
        <!-- /.inner-banner -->
        <!-- ============== About ============== -->
        <div class=" about-page ">
            <div class="container">
                <div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
							<h2>Study Meterial</h2>
						</div>
						<!-- /.col-lg-3 col-md-3 col-sm-3 -->
						<div class="wow bounceInUp col-lg-9 col-md-9 col-sm-9 " data-wow-duration="1s " data-wow-delay="0.5s ">
							<p><p>Download Study Meterial from download Link</p>
						</div>
									
                    <!-- /.col-lg-9 col-md-9 col-sm-9 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.about-page -->
        <!-- ============== Why choose us section ============== -->
       <div class="container journey_box">
        <div class="row">
    
      <div class="col-md-8">
					
						<div>
						<?php $i = 1;?>
                                        	<?php $res = $this->db->get("studymeterialpdf")->result();?>
                                        	<?php foreach($res as $row):?>
							<p style="color:green;"><img src="<?php echo base_url();?>assets/images/detail.png" height="50px" width="50px" /><b style="font-size:22px;"><?php echo $row->coursedesc; ?> </b>
<a href="<?php echo base_url();?>iManage/assets/studymeterial/<?php echo $row->coursepdf;?>" alt="Course Notification" target="_blank"><img src="<?php echo base_url();?>assets/images/downloadicon.png" height="50px" width="50px" /></a></span></p>
							
							<hr/>
							
  <?php $i++;?>
                                            <?php endforeach;?>
							<br/>
							
					</div>
				</div>
        </div>
        </div>
  
        </div>
<br>

<br>
        

<?php $this->load->view('footer.php')?>