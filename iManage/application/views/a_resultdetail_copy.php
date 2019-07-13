
<!DOCTYPE html>
<html>
<head>
        
        <!-- Title -->
        <title>Result</title>
        
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
                            <table border="1" width="100%">
                        		<tr style="border-bottom: 0px solid #FFF;">
                        			<td colspan="10" align="center">
                        				<h3 style="margin:0px;"><img src="<?= base_url()?>assets/msme-logo.png" width="100" >MINISTRY OF MICRO, SMALL & MEDIUM ENTERPRISES</h3>
                        				<h3 style="margin-top:-20px;margin-bottom:25px;">GOVERNMENT OF INDIA NEW DELHI</h3>
                        				<h4 style="margin-bottom:10px;">PROVISIONAL MARKSHEET CUM CERTIFICATE</h4>
                        				<?php if(strlen($this->input->post('sid'))==4){?>
                        				<h4>योग शिक्षक प्रशिक्षण परीक्षा - JULY (2017-18 ) </h4>
                        			<?php }else{ ?>
                        			<h4>योग शिक्षक प्रशिक्षण परीक्षा - MARCH (2018-19 ) </h4><?php }?>
                        			</td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;text-transform: uppercase;"><strong>NAME OF THE CANDIDATE:</strong> <?= $info->name; ?></td>
                        			<td colspan="5" style="border: 0px solid #FFF;text-transform: uppercase;"><strong>ROLL NO:</strong> <?= $info->student_id; ?></td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;text-transform: uppercase;"><strong>FATHER/HUSBAND NAME:</strong> <?= $info->fName; ?></td>
                        			<td colspan="5" style="border: 0px solid #FFF;"><strong>CATEGORY:</strong> REGULAR</td>
                        		</tr style="border: 0px solid #FFF;">
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;text-transform: uppercase;"><strong>MOTHER NAME:</strong> <?= $info->mother_name; ?></td>
                        			<td colspan="5" style="border: 0px solid #FFF;"><strong>ENROLL NO:</strong> MSME<?= $info->id; ?></td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="10" align="center" style="border: 0px solid #FFF; padding:20px;font-size:25px;font-weight:bold;">
                        				<u>MARKS OBTAINED</u>
                        			</td>
                        		</tr>
                        		<tr>
                        			<td align="center" rowspan='3' style="font-weight:bold;">विषय</td>
                        			<td align="center" colspan='3' style="font-weight:bold;">पूर्णांक</td>
                        			<td align="center" colspan='3' style="font-weight:bold;">उत्तीर्णांक</td>
                        			<td align="center" colspan='3' style="font-weight:bold;">प्राप्तांक</td>
                        		</tr>
                        		<tr>
                        			<td align="center" rowspan='2'>लिखित</td>
                        			<td align="center" colspan='2'>प्रायोगिक</td>
                        			<td align="center" rowspan='2'>लिखित</td>
                        			<td align="center" colspan='2'>प्रायोगिक</td>
                        			<td align="center" rowspan='2'>लिखित</td>
                        			<td align="center" colspan='2'>प्रायोगिक</td>
                        		</tr>
                        		<tr>
                        			<td align="center" style="font-weight:bold;">बाह्य</td>
                        			<td align="center" style="font-weight:bold;">आंतरिक</td>
                        			<td align="center" style="font-weight:bold;">बाह्य</td>
                        			<td align="center" style="font-weight:bold;">आंतरिक</td>
                        			<td align="center" style="font-weight:bold;">बाह्य</td>
                        			<td align="center" style="font-weight:bold;">आंतरिक</td>
                        		</tr>
                        		<?php
                        		    $totalMarks = 0;
                        		    foreach ($result as $key => $value):
                        		        if($value->s_id != 5 && $value->s_id != 7):
                            		        echo '<tr>';
                            		            echo '<td>'.explode("_",$value->subject_name)[0].'</td>';
                            		            
                            		            if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                            		                echo '<td align="center">'.$value->max_marks.'</td><td align="center">-</td><td align="center">-</td>';
                            		            
                            		            if($value->s_id == 4)
                            		                echo '<td align="center">-</td><td align="center">'.$value->max_marks.'</td><td align="center">'.$result[4]->max_marks.'</td>';
                            		                
                            		            if($value->s_id == 6)
                            		                echo '<td align="center">-</td><td align="center">'.$value->max_marks.'</td><td align="center">'.$result[6]->max_marks.'</td>';
                            		                
                            		            if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                            		                echo '<td align="center">25</td><td align="center">-</td><td align="center">-</td>';
                            		                
                            		            if($value->s_id == 4)
                            		                echo '<td align="center">-</td><td align="center">75</td><td align="center">25</td>';
                            		                
                            		            if($value->s_id == 6)
                            		                echo '<td align="center">-</td><td align="center">50</td><td align="center">25</td>';
                            		                
                            		            if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                            		                echo '<td align="center">'.$value->marks_obtain.'</td><td align="center">-</td><td align="center">-</td>';
                            		                
                            		            if($value->s_id == 4)
                            		                echo '<td align="center">-</td><td align="center">'.$value->marks_obtain.'</td><td align="center">'.$result[4]->marks_obtain.'</td>';
                            		                
                            		            if($value->s_id == 6)
                            		                echo '<td align="center">-</td><td align="center">'.$value->marks_obtain.'</td><td align="center">'.$result[6]->marks_obtain.'</td>';
                            		      endif;
                            		      $totalMarks += $value->marks_obtain;
                                    endforeach;
                                    $fail="250";
                                    $first="400";
                                    $second="350";
                                    $third="250";
                        		?>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;padding-top:30px;"><strong>RESULT:</strong> <?php if($totalMarks>$fail){echo "PASS";}else{echo "FAIL";}?></td>
                        			<td colspan="5" style="border: 0px solid #FFF;padding-top:30px;"><strong>MARKS OBTAINED:</strong> <?= $totalMarks; ?></td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;"><strong>DIVISION:</strong><?php if($totalMarks>=$first){echo "FIRST";}elseif($totalMarks>$second && $totalMarks<$third){echo "SECOND";}elseif($totalMarks>$third){echo"THIRD";}else{"FAIL";}?> </td>
                        			<td colspan="5" style="border: 0px solid #FFF;"><strong>TOTAL MARKS:</strong> 500</td>
                        		</tr style="border: 0px solid #FFF;">
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="5" style="padding-left:50px;padding-top:30px;">&nbsp;</td>
                        			<td colspan="5" style="border: 0px solid #FFF;padding-top:30px;"><strong>CONTROLLER OF EXAMINATION</strong></td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        		    	<?php if(strlen($this->input->post('sid'))==4){?>
                        			                        			<td colspan="5" style="padding-left:50px;padding-top:30px;"><strong>DECLARE DATE:<strong>27/10/2018</td>
	<?php }else{ ?>
                        			                        			<td colspan="5" style="padding-left:50px;padding-top:30px;"><strong>DECLARE DATE:<strong>31/03/2019</td>
<?php }?>

                        			<td colspan="5" style="border: 0px solid #FFF;padding-top:30px;">&nbsp;</td>
                        		</tr>
                        		<tr style="border: 0px solid #FFF;">
                        			<td colspan="10" style="padding-left:50px;padding-top:30px;">
                        			    <strong>Note: </strong> The marks shown above are for display purpose only. In case of dispute ....
                        			</td>
                        		</tr>
                        	</table>
                        	
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