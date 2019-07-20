<?php $this->load->view('payfee_header.php')?>

	<div class="inner-banner inner">
    <img src="<?php echo base_url();?>assets/asset/images/niteducation-banner.jpg" alt="about banner" />
    <?php
            $insert["regnumber"] = $this->session->userdata("REGISTRAION_NUM");
            $insert["stu_name"]   = $this->session->userdata("STUDENT_NAME");
            $insert["stu_Fname"] = $this->session->userdata("STUDENT_FNAME");
            $insert["mobile"] = $this->session->userdata("MOBILE");
            $insert["email_id"] = $this->session->userdata("EMAIL");
            $insert["course"]   = $this->session->userdata("COURSE");
            $insert["total_fee"] = $this->session->userdata("TOTAL_FEE");
            $insert["txn_amount"] =  $this->session->userdata("PAY_FEE");
            $insert["remain_fee"] = $this->session->userdata("REMAIN_FEE");
            $insert["comment"]   = $this->session->userdata("COMMENT");
            $insert["order_id"]   = $_POST["ORDERID"];
            $insert["txn_id"]   = $_POST["TXNID"];
            $insert["txn_amount"] = $_POST["TXNAMOUNT"];
            $insert["status"] = $_POST["STATUS"];
            $insert["txn_date_time"] = isset($_POST["TXNDATE"])?$_POST["TXNDATE"]:date("Y-m-d H:i:s");
            
            // $insert["product"] = $this->session->userdata("PRODUCT");
            // $insert["person_name"] = $this->session->userdata("PERSON_NAME");
            // $insert["person_mobile_no"] = $this->session->userdata("MOBILE");

            $this->db->where("order_id",$insert["order_id"]);
            $res = $this->db->get("paytm_txn");
            // echo "1";
            if($res->num_rows()<1){
               // echo "2";
                $this->db->insert("paytm_txn",$insert);
            }
    ?>
	 <?php
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";

        $paramList = $_POST;
        $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

        //Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
        $isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
        
        
        if($isValidChecksum == "TRUE") {
            //echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
            if ($_POST["STATUS"] == "TXN_SUCCESS") {
                echo "<center><h2 style='color:green;'>YOUR TRANSACTION  STATUS IS SUCCESS</h2> </center>" . "<br/>";
                //Process your transaction TRANSACTION here as success transaction TRANSACTION.
                //Verify amount & order id received from Payment gateway with your application's order id and amount.
            }
            else {
                echo "<center><h2 style='color:red;'>YOUR TRANSACTION STATUS IS FAILURE</h2></center>" . "<br/>";
            }
            
            

            if (isset($_POST) && count($_POST)>0 )
            { 
                // foreach($_POST as $paramName => $paramValue) {
                //         echo "<br/>" . $paramName . " = " . $paramValue;
                // }
              $this->db->where("regnumber",$this->session->userdata("REGISTRAION_NUM"));
              $stu_fee_txn=$this->db->get("paytm_txn")->row();                          
   ?>  
   <table style="width:70%; margin:auto; border:1px solid black; margin-bottom:50px;">
          <tr>
              <th style="border:1px solid black; "><?php echo "REGISTRAION_NUM" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->regnumber; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "STUDENT_NAME" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->stu_name; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "FATHER_NAME" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->stu_Fname; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "MOBILE_NO" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->mobile; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "Email_ID" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->email_id; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "COURSE_NAME" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->course; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "TOTAL_FEE" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php printf("%.2f", $stu_fee_txn->total_fee); ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "PAY_AMOUNT" ?></th>
              <!-- <td style="border:1px solid black; text-align:center;"><?php// echo $stu_fee_txn->pay; ?></td> -->
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["TXNAMOUNT"]; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "REMAINING" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php printf("%.2f", $stu_fee_txn->remain_fee); ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "ORDER_ID" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["ORDERID"]; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "TXN_ID" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["TXNID"]; ?></td>
          </tr>
          <!-- <tr>
              <th style="border:1px solid black; "><?php echo "TXN_AMOUNT" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["TXNAMOUNT"]; ?></td>
          </tr> -->
          <tr>
              <th style="border:1px solid black; "><?php echo "STATUS" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["STATUS"]; ?></td>
          </tr>
                    <tr>
              <th style="border:1px solid black; "><?php echo "RESP_MSG" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["RESPMSG"]; ?></td>
          </tr>
                    <tr>
              <th style="border:1px solid black; "><?php echo "CURRENCY" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["CURRENCY"]; ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "BANK_TXN_ID" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $_POST["BANKTXNID"]; ?></td>
          </tr>
                    <tr>
              <th style="border:1px solid black; "><?php echo "BANK_NAME" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo (isset($_POST["BANKNAME"])?$_POST["BANKNAME"]:""); ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "TXN_DATE_TIME" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo (isset($_POST["TXNDATE"])?$_POST["TXNDATE"]:date("Y-m-d H:i:s")); ?></td>
          </tr>
          <tr>
              <th style="border:1px solid black; "><?php echo "COMMENT" ?></th>
              <td style="border:1px solid black; text-align:center;"><?php echo $stu_fee_txn->comment; ?></td>
          </tr>

          
      </table><?php
            }
        }
        else {
            echo "<h3>Please Pay amount somthing Otherwise this error always occourd!</h3>";
            //Process transaction as suspicious.
        }
      ?><input type="checkbox" id="terms" name="terms" value="Yes" style="margin-left:10px;"> Declration,</a><br>
            <div>
              <container>
                <p>I, hereby declare that, I agree all the information  filled in the online registration application is based on my original records and correct and true in my cognition. I declare that the particulars field in the exam form are true to the best of my knowledge & belief. I have noted that the Examination Authority has the right to withhold my examination application or result, in addition to any other action as may be deemed fit in the event of any of the statements(s) made by me in the exam form/above being found incorrect. If any of the details of the examination after or after the examination is found to be false or incorrect then the concerned institution/college will have the power to abrogate my candidature and take legal action against me and I have 
                full responsibillity for it.</p>

                <table style="width:100%; margin:auto; border:none; margin-bottom:20px;">
                  <tr>
                    <td style="border:none; text-align:left;"><h5>Applicant's Signature</<h5></td>
                    <td style="border:none; text-align:right;"><h5>Authorised Signatory</h5></td>
                  </tr>
                </table>               
              </container>
            </div>
      </div>
      <div class="row ">
        <div class="container ">
          <div class="col-lg-9 col-md-8 col-sm-12 text-center ">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <button onclick="window.print();" type="button" class="main-button hvr-bounce-to-right-blue" >PRINT</button>
            </div>
          </div>
            <!-- /.col-lg-9 -->
        </div>
      </div>
