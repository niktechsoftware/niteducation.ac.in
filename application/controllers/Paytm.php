<?php
require_once(APPPATH."libraries/PaytmKit/lib/config_paytm.php");
require_once(APPPATH."libraries/PaytmKit/lib/encdec_paytm.php");

class Paytm extends CI_Controller{

	function __construct(){
		parent::__construct();
	}
	
	function pgRedirect(){
		header("Pragma: no-cache");
		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

		$checkSum = "";
		$paramList = array();

		//$ORDER_ID = $_POST["ORDER_ID"];
		$ORDER_ID = "ORD".time().rand(100,999);
		//$CUST_ID = $_POST["CUST_ID"];
		$CUST_ID = $_POST["mobile"];
		//$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
		$INDUSTRY_TYPE_ID = "Retail";
		//$CHANNEL_ID = $_POST["CHANNEL_ID"];
		$CHANNEL_ID = "WEB";
		$TXN_AMOUNT = $_POST["pay_fee"];

		$this->load->library("session");
		$this->session->set_userdata("REGISTRAION_NUM",$_POST["regnumber"]);
        $this->session->set_userdata("STUDENT_NAME",$_POST["name"]);
        $this->session->set_userdata("STUDENT_FNAME",$_POST["f_name"]);
        $this->session->set_userdata("MOBILE",$_POST["mobile"]);
        $this->session->set_userdata("EMAIL",$_POST["email"]);
        $this->session->set_userdata("COURSE",$_POST["course"]);
        $this->session->set_userdata("TOTAL_FEE",$_POST["fee"]);
        $this->session->set_userdata("PAY_FEE",$_POST["pay_fee"]);
        $this->session->set_userdata("REMAIN_FEE",$_POST["remain_fee"]);
        $this->session->set_userdata("COMMENT",$_POST["comment"]);


		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = PAYTM_MERCHANT_MID;
		$paramList["ORDER_ID"] = $ORDER_ID;
		$paramList["CUST_ID"] = $CUST_ID;
		$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
		$paramList["CHANNEL_ID"] = $CHANNEL_ID;
		$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
		$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

		$paramList["CALLBACK_URL"] = "https://niteducation.ac.in/Paytm/payStatus";
		/*$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
		$paramList["EMAIL"] = $EMAIL; //Email ID of customer
		$paramList["VERIFIED_BY"] = "EMAIL"; //
		$paramList["IS_USER_VERIFIED"] = "YES"; //

		*/

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

		?>
		<html>
		<head>
		<title>Merchant Check Out Page</title>
		</head>
		<body>
			<center><h1>Please do not refresh this page...</h1></center>
				<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
				<table border="1">
					<tbody>
					<?php
					foreach($paramList as $name => $value) {
						echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
					}
					?>
					<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
					</tbody>
				</table>
				<script type="text/javascript">
					document.f1.submit();
				</script>
			</form>
		</body>
		</html>
		<?php
			}


	function pgResponse(){

		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

		$paytmChecksum = "";
		$paramList = array();
		$isValidChecksum = "FALSE";

		$paramList = $_POST;
		$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

		//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


		if($isValidChecksum == "TRUE") {
			echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
			if ($_POST["STATUS"] == "TXN_SUCCESS") {
				echo "<b>Transaction status is success</b>" . "<br/>";
				//Process your transaction here as success transaction.
				//Verify amount & order id received from Payment gateway with your application's order id and amount.
			}
			else {
				echo "<b>Transaction status is failure</b>" . "<br/>";
			}

			if (isset($_POST) && count($_POST)>0 )
			{ 
				foreach($_POST as $paramName => $paramValue) {
						echo "<br/>" . $paramName . " = " . $paramValue;
				}
			}
		}
		else {
			echo "<b>Checksum mismatched.</b>";
			//Process transaction as suspicious.
		}

	}

	public function payStatus(){

        header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");
		$this->load->view('paystatus');
        
    }
		
}


	