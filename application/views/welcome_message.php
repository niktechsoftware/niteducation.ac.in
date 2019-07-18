<?php $this->load->view("header");?>
        <!-- header -->  
        <style>
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:auto;
  padding:10px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}
.maintext{
	text-align: center;
  font-family: "Segoe UI", sans-serif;
  text-decoration: none;
}
body{
  background: url('bg.jpg');
}
#lorem{
	font-family: "Segoe UI", sans-serif;
	font-size: 12pt;
  text-align: left;
}
#popupfoot{
	font-family: "Segoe UI", sans-serif;
	font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
	text-decoration: none;
}
.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
	background-color:#D1D1D1;
	color: green;
}
.popupoption2:hover{
	
	color: red;
}
</style> 
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
                       <img src="<?php echo base_url();?>assets/images/slider.jpg" alt="New York" width="1200" height="700">
                    </div>
                     <div class="item">
                       <img src="<?php echo base_url();?>assets/images/slider1.jpg" alt="New York" width="1200" height="700">
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
      <div class="breakingNews" id="bn4">
    	<div class="bn-title"><h2>Headlines</h2><span></span></div>
        
        <ul style="margin-top:0px;"> <marquee scrollamount="4" onMouseOver="this.stop();" onMouseOut="this.start();">
        	
            <li class="style17">
		<html>
<head>
	<title></title>
</head>
<body>
<p><span style="color:#0000CD;"><b>Admission are open for yoga teacher training diploma, solar energy technician course ( surya mitra), Nursery &amp; Primary teacher training course, computer courses &amp; various vocational courses.&nbsp;The Exam fee must be paid by crossed demand draft. If the student deposits the fee in cash, NIT Education Group will not be responsible in any case.</b>&nbsp;</span></p>
</body>
</html>
	</li> 
            <br>
           
            </marquee>
        </ul>
    </div>
    <!--/
   <div class="jquery-script-ads">
   <script type="text/javascript">
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
      <div id="lorem">
      <?php $res =$this->db->get('popup'); ?>
      <?php $row = $res->last_row() ?>
      <img src="<?php echo base_url();?>iManage/assets/<?php echo $row->popup; ?>" alt="New York" width="430" height="400">
    </div>
   
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
     -->
        <!-- /.banner-round -->
        <!-- ============== Banner section ============== -->
      

        <!-- ============== About and Service section ============== -->
       
            <div class="container" >
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-3" style="border:1px solid red;">
                        
                            <h2>Latest News</h2>
                          <marquee class="new_maquee" behavior="scroll" direction="up" direction="up" scrollamount="3"  onMouseOver="stop()" onMouseOut="start()" width="100%" height="465px" style="padding:5px;font-size:12px; font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;" >
		
           <?php $res = $this->db->get("notice")->result();?>
           <?php foreach($res as $row):?>
           <p> 
           <?php echo $row->msg; ?>
            <img src="<?php echo base_url();?>assets/images/new.gif" width="33" height="16" /> </p>
            <hr />
            <?php endforeach;?>
           
           
          </marquee>
                           
                        <!-- The Modal -->

                        <!-- /.about -->
                    </div>
                    <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                    <div class="col-sm-12 col-lg-8 col-md-8  service" style="margin-top:-1px;">
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
                                     <p><a href="#" target="_blank" style="color:#000;">Read More</a></p>
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
          
              
               <script>
         $(document).ready(function() {	

     		var id = '#dialog';
     	
     		//Get the screen height and width
     		var maskHeight = $(document).height();
     		var maskWidth = $(window).width();
     	
     		//Set heigth and width to mask to fill up the whole screen
     		$('#mask').css({'width':maskWidth,'height':maskHeight});
     		
     		//transition effect		
     		$('#mask').fadeIn(500);	
     		$('#mask').fadeTo("slow",0.9);	
     	
     		//Get the window height and width
     		var winH = $(window).height();
     		var winW = $(window).width();
                   
     		//Set the popup window to center
     		$(id).css('top',  winH/2-$(id).height()/2);
     		$(id).css('left', winW/2-$(id).width()/2);
     	
     		//transition effect
     		$(id).fadeIn(2000); 	
     	
     	//if close button is clicked
     	$('.window .close').click(function (e) {
     		//Cancel the link behavior
     		e.preventDefault();
     		
     		$('#mask').hide();
     		$('.window').hide();
     	});		
     	
     	//if mask is clicked
     	$('#mask').click(function () {
     		$(this).hide();
     		$('.window').hide();
     	});		
     	
     });

         </script> 
        
      
<?php $this->load->view("footer");?>