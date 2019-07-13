<?php $this->load->view('header.php')?>
<div class="inner-banner inner">
           
        </div>
        <!-- /.inner-banner -->
        <!-- ============== About ============== -->
        <div class=" about-page ">
            <div class="container">
                <div class="row">
											<div class="col-lg-3 col-md-3 col-sm-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
							<h2>Student Registration</h2>
						</div>
						<div class="wow bounceInUp col-lg-9 col-md-9 col-sm-9 " data-wow-duration="1s " data-wow-delay="0.5s ">
<style type="text/css">

    #printable { display: block; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
</style>
<script>
    function autoResize(id){
        var newheight;
        var newwidth;

        if(document.getElementById){
            newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
            newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
        }

        document.getElementById(id).height= (newheight) + "px";
        document.getElementById(id).width= (newwidth) + "px";
    }
</script>
	
	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<IFRAME SRC="<?php echo base_url(); ?>invoiceController/registerC/<?php echo $stu_id; ?>" width="100%" height="100%" id="iframe1" style="border: 0px;" onLoad="autoResize('iframe1');"></iframe>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->
	
	 <!-- /.col-lg-9 col-md-9 col-sm-9 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
       
        </div>
<br>

<br>
<?php $this->load->view('footer.php')?>