<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Result</title>

    <meta content="width=device-width, initial-scale=1, target-densitydpi=device-dpi" name="viewport" />
    <meta content="width=device-width, initial-scale=1" name="print" />
    <meta charset="UTF-8">
   
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />


    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/style1.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/invoice_css/print.css' media="print" />
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/jquery-1.3.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/invoice_js/example.js'></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />



    <link href="<?php echo base_url();?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BAckground Color change -->
    <!--  <link href="<?php echo base_url();?>assets/css/modern.min.css" rel="stylesheet" type="text/css" />
    -->

    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url();?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>




    <style type="text/css">
        @page {
            margin: 0;
        }


        @media print {
            body * {
                visibility: visible;
            }

            #printcontent * {
                visibility: visible;
            }

            #printcontent {
                position: absolute;
                top: -26px;
                left: 00px;
                min-height: 8.7cm;
                visibility: visible;
            }

            #printNot {
                display: none;
            }
        }

        table.example-table {
            clear: both; 
            width: 100%;
            margin: 30px 0 0 0;
            
        }

        .fdiv {
            background: url("<?php echo base_url(); ?>assets/msme.jpg");
            background-size: 100% auto;


        }

        .sn {
            margin-top: 20px;
            margin-left: 122px;
            width: 100px;
            height: 50px;
            font-size: 18px;
            float: left;
            
        }

        .photo {
            margin-top: 35.5px;
            margin-left: 554px;
            
            height: 126px;
            width: 105px;



        }

        .tbl1 {
            margin-top: 260px;
            width: 78%;
            margin-left: 95px;
            text-align: center;

        }

        .title {


            width: 97%;
            margin-left: auto;
            margin-right: auto;
        }

        .tbl2 {

            width: 79%;
            margin-left: 100px;
            height: 305px;
            text-align: center;

        }

        .footer {
            margin-top: 130px;
            width: 82%;
            margin-left: 110px;
        }

        .dt {

            margin-left: 120px;
            margin-top: -40px;
        }

        .bar {
            width: 120px;
            height: 110px;
            
            margin-left: 70px;

        }


        .exami {

            margin-top: -60px;

            margin-left: 20px;
        }

    </style>


</head>

<body>
    <?php
   include "phpqrcode/qrlib.php";
   // QRcode::png("MY FIRST PHP QR CODE GENERATOR EXAMPLE") ; 


   
        $studentID=$stu_id;
    $this->db->where('student_id',$studentID);
        $studentInfo= $this->db->get('student_info');
    $data['info'] = $studentInfo->row();
    ?>

    <div id="printcontent">
        <div id="page-wrap" style="border: none; width:1000px; height:100%">
            <div class="fdiv">
                <table class="example-table" >

                    <tr style="height:300px;">

                        <td>
                            <div class="sn">
                                <strong>
                                    <?php echo $data['info']->signature; ?></strong>
                            </div>

                        </td>

                        <td>
                            <div class="photo">
                                <img style="width:105px; height:125.5px;" src="<?php echo base_url()?>assets/images/stuImage/<?php echo $data['info']->photo; ?>">
                            </div>
                        </td>

                    </tr>
                </table>


                <div class="tbl1">
                    <table class="example-table">
                        <tr>
                            <td style="width:14.29%;">
                                <strong><?php echo $data['info']->student_id; ?></strong>
                            </td>
                            <td style="width:14.29%;">
                                <strong>  <?php echo $data['info']->branch_id; ?></strong>
                            </td>
                            <td style="width:14.29%;"><strong>Private</strong></td>

                            <td style="width:14.29%;"><strong>Regular</strong></td>
                            <td style="width:14.29%;"><strong>3 Year</strong></td>
                            <td style="padding-left:25px;">
                                <strong><?php echo $data['info']->signature; ?></strong>
                            </td>
                            <td style="width:14.29%;">
                                <strong><?php echo $data['info']->id; ?></strong>
                            </td>

                        </tr>
                    </table>
                </div>

                <div class="row" style="margin-top:46px; margin-left:180px;">
                    <div class="col-md-5"></div>
                    <strong>
                        <?php echo $data['info']->name; ?></strong>
                </div>
                <div class="row" style="margin-top:1px; margin-left:50px;">
                    <div class="col-md-5"></div>
                    <div style="margin-left:400px;"> <strong>
                            <?php echo $data['info']->mother_name; ?></strong></div>
                </div>
                <div class="row" style="margin-top:1px; margin-left:1px;">
                    <div class="col-md-3"></div>
                    <div><strong>
                            <?php echo $data['info']->fName; ?></strong></div>
                </div>

                <div class="row" style="margin-top:21px; margin-left:180px;">
                    <div class="col-md-3"></div>
                    <div><strong> NITE EXAMINATION </strong></div>
                </div>


                <div class="tbl2">

                    <table class="example-table" id="items" style="height: 305px;">
                        <tr style="border:none; height:30px;">
                            <td rowspan='3' style="width:285px;">विषय</td>
                            <td colspan='3'>पूर्णांक</td>

                            <td colspan='3'>प्राप्तांक</td>
                            <td colspan='3' rowspan="3" style="width:72px;">Result</td>
                        </tr>
                        <tr style="border:none; height:30px;">
                            <td rowspan='2' style="width:65px; height:50px;">लिखित</td>
                            <td colspan='2'>प्रायोगिक</td>

                            <td rowspan='2' style="width:65px;">लिखित</td>
                            <td colspan='2'>प्रायोगिक</td>
                        </tr>
                        <tr>
                            <td style="width:65px;">बाह्य</td>
                            <td style="width:69px;">आंतरिक</td>
                            <td style="width:62px;">बाह्य</td>
                            <td style="width:75px;">आंतरिक</td>

                        </tr>



                        <?php
                                         
                                          
                                $result
                                 = $this->db->query("SELECT `c_id`, `s_id`, `atten`, `marks_obtain`, `course_subject`.* FROM `subject_marks` JOIN `course_subject` ON `subject_marks`.`s_id` = `course_subject`.`sno` WHERE `subject_marks`.`student_id` = $studentID");
                                $data['result'] = $result->result();
                                    $totalMarks = 0;
                                   foreach ($data['result'] as $key => $value)
                                   {
                                    $totalMarks += $value->marks_obtain;

                                   }
                                   $div=1;
                                   $percent=$totalMarks/5;
                                   
                                    $counter = 1;
                                    foreach ($data['result'] as $key => $value):
                                        if($value->s_id != 5 && $value->s_id != 7):
                                            echo '<tr>';
                                                echo '<td> </td>';
                                                
                                                if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                                                    echo '<td></td><td></td><td></td>';/*.$value->max_marks.*/
                                                
                                                if($value->s_id == 4)
                                                    echo '<td></td><td><strong>'.$value->max_marks.'</strong></td><td><strong>'.$data['result']  [4]->max_marks.'</strong></td>';
                                                    
                                                if($value->s_id == 6)
                                                    echo '<td>-</td><td><strong>'.$value->max_marks.'</strong></td><td><strong>'.$data['result'][6]->max_marks.'</strong></td>';
                                                    
                                                 
                                                if($value->s_id == 1 || $value->s_id == 2 || $value->s_id == 3)
                                                    echo '<td><strong>'.$value->marks_obtain.'</strong></td><td></td><td></td>';
                                                    
                                                if($value->s_id == 4)
                                                    echo '<td>-</td><td><strong>'.$value->marks_obtain.'</strong></td><td><strong>'.$data['result'][4]->marks_obtain.'</strong></td>';
                                                    
                                                if($value->s_id == 6)
                                                    echo '<td></td><td><strong>'.$value->marks_obtain.'</strong></td><td><strong>'.$data['result'][6]->marks_obtain.'</strong></td>';
                                                


                                                if($counter == 1)
                                                {

                                                    if($percent<50)
                                                           {
                                                               echo "<td colspan='2'><strong>Failed</strong></td>";
                                                             
                                                             }
                                                    else
                                                    echo "<td colspan='2'><strong>Pass</strong></td>";
                                                }
                                                if($counter == 2)
                                                    echo "<td colspan='2'><strong>500</strong></td>";
                                                if($counter == 3)
                                                    echo "<td colspan='2'><strong>".$totalMarks."</strong></td>";
                                                if($counter == 4)
                                                    {
                                                       if($percent<50)
                                                           {
                                                               echo "<td colspan='2'><strong>Failed</strong></td>";
                                                             
                                                             }
                                                             elseif($percent>=50 && $percent < 60)
                                                             {
                                                               echo "<td colspan='2'><strong>III DIV</strong></td>";
                                                             }
                                                              elseif($percent>=60 && $percent < 80)
                                                             {
                                                               echo "<td colspan='2'><strong>II DIV</strong></td>";
                                                             }
                                                             elseif($percent>=80)
                                                             {
                                                               echo "<td colspan='2'><strong>I DIV</strong></td>";
                                                             }

                                                    }
                                                if($counter == 5)
                                                    echo "<td colspan='2'><strong>".$percent."</strong></td>";
                                                
                                                $counter++;

                                          endif;
                                          
                                    endforeach;
                                ?>
                    </table>
                </div>

                <div class="footer">


                    <table class="example-table" id="items">
                        <tr style="height:135px;">

                            <td style="width:33%;">
                                <div class="dt"> <strong>27/10/2018</strong></div>
                            </td>


                            <td style="width:33%;">
                                <div class="bar">
                        <?php 

                           $qrdata="Yoga Teacher Training Name Examination- Student Name-".$data["info"]->name."/Father Name-".$data['info']->fName."/Mother Name-".$data['info']->mother_name."/Aadhar No-".$data['info']->aadhar_number."/Roll No-".$data['info']->student_id;
                           QRcode::png ( $qrdata , "test.png ", "L", 5, 0) ;


                        ?>
                           <img src="<?php echo base_url();?>test.png" width="120px" height="110px"/>
                           
                            </td>


                            <td style="width:33%;">
                                <div class="exami">&nbsp;</div>
                            </td>

                        </tr>

                    </table>
                </div>

                <br>
                <br>

                <div>
                    <center>
                        <button id="printNot" class="btn" onclick="window.print();">Print</button>
                    </center>
                </div>

            </div>
        </div>

    </div>

</body>

</html>