
<!DOCTYPE html>
<html>
<head>
        
        <!-- Title -->
        <title>Admit Card</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url();?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
    		table { border-collapse: collapse; }
    		h2,h3,h4 {
    			margin: 0px;
    		}
    		table tr td {
    		    padding:5px;
    		}
    		
        	@media print {
    			body * { visibility: hidden; }
    			#printcontent * { visibility: visible; }
    	    }
    	</style>
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row" id="printcontent">
                        <div class="col-md-8 center">
                            <table border="1">
                        		<tr>
                        			<td colspan="4" align="center">
                        				<h2 style="margin:0px;"><img src="<?= base_url()?>assets/msme-logo.png" width="100" >MINISTRY OF MICRO, SMALL & MEDIUM ENTERPRISES</h2>
                        				<h3 style="margin:0px;">GOVERNMENT OF INDIA</h3>
                        				<h4>PROVISIONAL ADMIT CARD - EXAM 2017-18</h4>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td colspan="2">NAME OF THE CANDIDATE: <?= $info->name; ?></td>
                        			<td colspan="2">FATHER/HUSBAND NAME: <?= $info->fName; ?></td>
                        		</tr>
                        		<tr>
                        			<td width="40%">ROLL NO: <?= $info->student_id; ?></td>
                        			<td>CLASS/COURSE: Yoga Teacher Training Programme (1 year)</td>
                        			<td>CATEGORY: REGULAR</td>
                        			<td rowspan="3" width="15%">
                        			    <?php if($info->photo): ?>
                        			        <img src="<?= base_url()?>assets/images/stuImage/<?= $info->photo; ?>" width="100" /> 
                        			    <?php elseif($info->photo == 'Male'): ?>
                        			        <img src="<?= base_url()?>assets/male.jpeg" width="100" /> 
                        			    <?php elseif($info->photo == 'Female'): ?>
                        			        <img src="<?= base_url()?>assets/female.png" width="100" /> 
                        			    <?php else: ?>
                        			        <img src="<?= base_url()?>assets/male.jpeg" width="100" /> 
                        			    <?php endif; ?>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td>ENROLL NO: MSME<?= $info->id; ?></td>
                        			<td>GENDER: <?= $info->gender; ?></td>
                        			<td>FORM NO: <?= $info->id; ?></td>
                        		</tr>
                        		<tr>
                        			<td>INSTITUTE OF STUDYING: UP30D0013828-NATIONAL INSTITUTE OF TECHNOLOGIES AAMGHAT SUBHASH NAGAR GHAZIPUR</td>
                        			<td>CENTER OF EXAMINATION: Samrat Ashok Inter College HathiKhana Adarsh Gaon Ghazipur</td>
                        			<td>INSTITUTE'S SIGNATURE: </td>
                        		</tr>
                        		<tr>
                        			<td>SUBJECTS: FACULTY OF YOGA योग दर्शन शास्त्र एवं क्रिया विज्ञान, मानव शरीर आहार एवं शुद्धि, व्यावहारिक योग * प्रायोगिक योग प्रशिक्षण  * योग शिक्षण कौशल एवं अभ्यास</td>
                        			<td>SIGNATURE OF SECRETARY: <img src="<?= base_url()?>assets/sig.png" width="100" /></td>
                        			<td colspan="2">
                        			    <?php if($info->signature != ''): ?>
                        			        <img src="<?= base_url()?>assets/images/stuImage/<?= $info->signature; ?>" width="100" /> <br/>
                        			    <?php endif; ?>
                        			     CANDIDATE'S SIGNATURE
                        			</td>
                        		</tr>
                        	</table>
                        	<br/>
                        	<strong>परीक्षा दिन एवं तिथि:</strong> १९ अगस्त २०१८, रविवार
                        	<br/>
                        	<table border="1" width="100%">
                        	    <tr>
                        	        <th style="padding-left:10px;">प्रश्न पत्र संख्या</th>
                        	        <th style="padding-left:10px;">समय</th>
                        	    </tr>
                        	    <tr>
                        	        <td>प्रथम - योग दर्शन शास्त्र एवं क्रिया विज्ञान</td>
                        	        <td>प्रातः १० बजे से ११:३० बजे तक </td>
                        	    </tr>
                        	    <tr>
                        	        <td>द्रितीय - मानव शरीर आहार एवं शुद्धि </td>
                        	        <td>अपराहन १२:०० बजे से १:३० बजे तक </td>
                        	    </tr>
                        	    <tr>
                        	        <td>तृतीय - व्यावहारिक योग विज्ञान</td>
                        	        <td>अपराहन २:३० बजे से ४:०० बजे तक </td>
                        	    </tr>
                        	</table>
                        	<br/>
                        	<h4>अभ्यर्थियों के लिए आवश्यक निर्देश !</h4>
                        	<ol>
                        	    <li>अभ्यर्थी को परीक्षा केंद्र पर कम से कम २० मिनट पूर्व पहुंचना अनिवार्य है |</li>
                        	    <li>प्रवेश पत्र में किसी भी प्रकार की त्रुटि होने पर अपने कॉलेज / संस्था को तुरंत सूचित करें |</li>
                        	    <li>अभ्यर्थी को केंद्र के केन्द्राध्यक्ष, सहायक केन्द्राध्यक्ष एवं निरीक्षकों के निर्देश का सर्वथा अनुपालन करना होगा |</li>
                        	    <li>उत्तर पुस्तिका के आवरण पृष्ठ पर अंकित सूचनाओं के अतिरिक्त अन्य किसी पृष्ठ पर नाम, अनुक्रमांक या अन्य चिन्ह अंकित करना अनुचित साधन की श्रेणी में माना जाएगा |</li>
                        	    <li>अभ्यर्थी अपनी उत्तर पुस्तिका कक्ष निरीक्षण के हाथ में सौपे बिना परीक्षा कक्ष के बहार नहीं जा सकेगा |</li>
                        	    <li>अभ्यर्थी द्वारा किसी भी प्रकार का अनुचित आचरण या अनुचित साधन काप्रयोग करने पर उसे तुरंत परीक्षा से निष्कासित कर दिया जायेगा, इसके लिए स्वयं अभ्यर्थी जिम्मेदार होगा |</li>
                        	</ol>
                        </div>
                        
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-md-5">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-1">
                            <button onclick="window.history.back();" class="btn btn-success btn-block">Back</button>
                        </div>
                        <div class="col-md-1">
                        	<button onclick="window.print();" class="btn btn-success btn-block">Print</button>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modern.min.js"></script>
        
    </body>
</html>