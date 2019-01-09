<!DOCTYPE html>
<html>

<head>

    <!-- Title -->
    <title>Result</title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="width=device-width, initial-scale=1" name="print" />
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    
    
    <link href="<?php echo base_url();?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
   
   

 


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        table {

            width: 100%;


        }

        table,
        tr,
        td {
            border: 1px solid black;
        }

        .fdiv {
            background-color: lightblue;
        }

        .sn {
            margin-top: 10px;
            margin-left: 20px;
            width: 100px;
            height: 50px;

            float: left;
        }


        .photo {
            margin-top: 40px;
            border: 1px solid black;
            margin-left: 780px;
            margin-right: 20px;
            text-align: right;
        }

        .tbl1 {

            margin-top: 200px;
            width: 97%;
            margin-left: auto;
            margin-right: auto;

        }

        .title {
            margin-top: 10px;
            height: 60px;
            width: 97%;
            margin-left: auto;
            margin-right: auto;



        }

        .tbl2 {
            margin-top: 75px;
            width: 97%;
            margin-left: auto;
            margin-right: auto;

        }

        .footer {
            margin-top: 1px;
            width: 97%;
            margin-left: auto;
            margin-right: auto;

        }

        @media print {
            body * {
                visibility: hidden;
            }

            #printcontent * {
                visibility: visible;
            }
        }

    </style>
</head>
<?php 
   
	    $studentID=$stu_id;
	$this->db->where('student_id',$studentID);
        $studentInfo= $this->db->get('student_info');
	$data['info'] = $studentInfo->row();
    ?>

<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row" id="printcontent">
                    <div class="col-md-8 center">

                        <div class="sn">
                            Sr No. <br>
                            <?php echo $data['info']->signature; ?>
                        </div>
                        <div class="photo">
                            <img src="<?php echo base_url()?>assets/images/stuImage/<?php  echo $data['info']->photo; ?>">
                        </div>



                        <!--	<table border="1" width="100%">
								<tr>
									<td style="width:20%">
										<div class="sn">
											Sr No.

										</div>

									</td>
									<!--	<td colspan="6" align="center"> 
									<td style="width:60%">
										<div class="title">
											<h3> GOVERNMENT OF INDIA NEW DELHI </h3>
											<h4> PROVISIONAL MARKSHEET CUM CERTIFICATE </h4>
											<h4> योग शिक्षक प्रशिक्षण परीक्षा - JULY (2017-18) </h4>

										</div>
									</td>
									<!--	<td colspan="2" align="right">
									<td style="width:20%">
										<div>
											<img src="<?php //echo base_url()?>assets/images/stuImage/<?php // echo $data['info']->photo; ?>" width="100">
										</div>
									</td>
								</tr>
							</table> -->

                        <div class="tbl1">
                            <table style="text-align: center;">
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $data['info']->student_id; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['info']->branch_id; ?>
                                    </td>
                                    <td>Private</td>
                                    <td>Regular</td>
                                    <td>3 Year</td>
                                    <td>
                                        <?php echo $data['info']->signature; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['info']->id; ?>
                                    </td>

                                </tr>
                            </table>
                        </div>


                        <!--					
<table border="1" width="100%">
	<tr>
		<td width="22%"></td>
		<td width="22%"></td>
		<td width="22%"> </td>
		<td width="22%"></td>
		<td width="22%"></td>
		<td width="22%"></td>
		<td width="22%"></td>

	</tr>
	<tr style="border: 2px solid black;" width="100%">
		<td width="22%">
			<?php // echo $data['info']->student_id; ?> 
		</td>
		<td width="22%">UP30D0013828</td>
		<td width="22%">REGULAR</td>
		<td width="22%">July:2017-18</td>
		<td width="22%">1 Year</td>
		<td width="30%"></td>
		<td width="22%">MSME
			<?php // echo $data['info']->id; ?>
		</td>
	</tr>
</table>
-->
                        <br>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-md-6"></div>
                            <strong>
                                <?php echo $data['info']->name; ?></strong>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div style="margin-left:400px;"> <strong>
                                    <?php echo $data['info']->mother_name; ?></strong></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div><strong>
                                    <?php echo $data['info']->fName; ?></strong></div>
                        </div>






                        <div class="title">
                            <table>
                                <tr>
                                    <td> This is certifide that (this is certified that) </td>
                                </tr>
                                <tr>
                                    <td> According to institude's Record (According to institude's Record) &nbsp;<strong>
                                            <?php echo $data['info']->name; ?> </strong> </td>
                                </tr>
                                <tr>
                                    <td>Son/Daughter of Mrs. (Son/Daughter of Mrs.) &nbsp;<strong>
                                            <?php echo $data['info']->mother_name; ?></strong></td>
                                </tr>
                                <tr>
                                    <td> &amp; Mr. (&amp; Mr. ) &nbsp;<strong>
                                            <?php  echo $data['info']->fName; ?> </strong></td>

                                <tr>
                                    <td> has passed Yoga Teacher Traning Examination Held in July/ March From Institude/ Center(has passed Yoga Teacher Traning Examination Held in July/ March From Institude/ Center) &nbsp; &nbsp;<strong> NIKTRCH SOLUTION </strong>&nbsp; passed </td>
                                </tr>
                                <tr>
                                    <td> Mark Obtain by candidate in passed subject under (Mark Obtain by candidate in passed subject under) </td>
                                </tr>

                            </table>

                        </div>

                        <!--<table>
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td width="500px" colspan=3></td>
										<td width="500px" colspan=7>
											<?php // echo $data['info']->name; ?>
										</td>
									</tr>
									<tr style="border: 0px solid black; margin:10px; " width="100%">
										<td width="500px" colspan=3></td>
										<td width="500px" colspan=7>
											<?php // echo $data['info']->mother_name; ?>
										</td>
									</tr>
									<tr style="border: 0px solid black; margin:10px; " width="100%">
										<td width="500px" colspan=1></td>
										<td width="500px" colspan=9>
											<?php // echo $data['info']->fName; ?>
										</td>
									</tr>
									<tr style="border: 0px solid black; margin:10px; " width="100%">
										<td width="500px" colspan=3></td>
										<td width="500px" colspan=7></td>
									</tr>


									<tr style="border: 0px solid black; margin:10px; " width="100%">
										<td width="500px" colspan=2></td>
										<td width="500px" colspan=8> National Institute of Technologies Ghazipur</td>
									</tr>
									<tr style="border: 0px solid black; margin:10px; " width="100%">
										<td width="500px" colspan=3></td>
										<td width="500px" colspan=7> </td>
									</tr>
								</table>
							</div> -->

                        <div class="tbl2">

                            <table style="text-align:center; font-weight:bold;">

                                <tr>
                                    <td rowspan='3'>विषय</td>
                                    <td colspan='3'>पूर्णांक</td>

                                    <td colspan='3'>प्राप्तांक</td>
                                    <td colspan='3' rowspan="3">Result</td>
                                </tr>
                                <tr>
                                    <td rowspan='2'>लिखित</td>
                                    <td colspan='2'>प्रायोगिक</td>

                                    <td rowspan='2'>लिखित</td>
                                    <td colspan='2'>प्रायोगिक</td>
                                </tr>
                                <tr>
                                    <td>बाह्य</td>
                                    <td>आंतरिक</td>
                                    <td>बाह्य</td>
                                    <td>आंतरिक</td>

                                </tr>



                                <?php
                                         
                                          
                        		$result
                        		 = $this->db->query("SELECT `c_id`, `s_id`, `atten`, `marks_obtain`, `course_subject`.* FROM `subject_marks` JOIN `course_subject` ON `subject_marks`.`s_id` = `course_subject`.`sno` WHERE `subject_marks`.`student_id` = $studentID");
	                            $data['result'] = $result->result();
                        		    $totalMarks = 0;
                        		   
                        		    $counter = 1;
                        		    foreach ($data['result'] as $key => $value):
                        		        if($value->s_id != 5 && $value->s_id != 7):
                            		        echo '<tr>';
                            		            echo '<td>'.explode("_",$value->subject_name)[0].'</td>';
                            		            
                            		            if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                            		                echo '<td>'.$value->max_marks.'</td><td>-</td><td>-</td>';
                            		            
                            		            if($value->s_id == 4)
                            		                echo '<td>-</td><td>'.$value->max_marks.'</td><td>'.$data['result']	[4]->max_marks.'</td>';
                            		                
                            		            if($value->s_id == 6)
                            		                echo '<td>-</td><td>'.$value->max_marks.'</td><td>'.$data['result'][6]->max_marks.'</td>';
                            		                
                            		             
                            		            if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                            		                echo '<td>'.$value->marks_obtain.'</td><td>-</td><td>-</td>';
                            		                
                            		            if($value->s_id == 4)
                            		                echo '<td>-</td><td>'.$value->marks_obtain.'</td><td>'.$data['result'][4]->marks_obtain.'</td>';
                            		                
                            		            if($value->s_id == 6)
                            		                echo '<td>-</td><td>'.$value->marks_obtain.'</td><td>'.$data['result'][6]->marks_obtain.'</td>';
                            		      		


                            		            if($counter == 1)
                            		      			echo "<td colspan='2'>Pass</td>";
                            		            if($counter == 2)
                            		      			echo "<td colspan='2'>500</td>";
                            		            if($counter == 3)
                            		      			echo "<td colspan='2'>432</td>";
                            		            if($counter == 4)
                            		      			echo "<td colspan='2'>70</td>";
                            		            if($counter == 5)
                            		      			echo "<td colspan='2'>726</td>";
                                                
                                                $counter++;

                            		      endif;
                            		      $totalMarks += $value->marks_obtain;
                                    endforeach;
                        		?>
                            </table>
                        </div>

                        <div class="footer">

                            <table>
                                <tr>
                                    <td>DECLARE DATE:27/10/2018</td>


                                    <td><img src=""></td>
                                    <td>CONTROLLER OF EXAMINATION</td>
                                </tr>

                            </table>

                        </div>

                    </div>
                    <!-- Row -->
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


                    <!-- Main Wrapper -->
                </div>
            </div>
        </div>
        <!-- Page Inner -->
    </main>
    <!-- Page Content -->


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
