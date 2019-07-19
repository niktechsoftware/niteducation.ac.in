<?php
function sms($number,$msg)
{ 
    //$url="http://sms.hspsms.com/sendSMS?username=niteducation&message=".urlencode($msg)."&sendername=NITGZP&smstype=TRANS&numbers=".$number."&apikey=6357c666-be5a-4471-a88d-fc132d1d9ac8";

 $url="http://login.bulksmsgateway.in/sendmessage.php?user=niteducation&password=233304&mobile=".$number."&message=".urlencode($msg)."&sender=NITGZP&type=3"; 

    // $url="http://bulksms.gfinch.in/api/sendmsg.php?user=nitgzp&pass=ghazipur@123&sender=NITGZP&phone=".$number."&text=".urlencode($msg)."&priority=ndnd&stype=normal";
	//$url = "http://mysms.sms7.biz/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authkey."&message=".urlencode($message)."&senderId=".$senderID."&routeId=1&mobileNos=".$number."&smsContentType=english";
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$output=curl_exec($ch);
	curl_close($ch);
}

function checkBalSms()
{ 
   // $url="http://login.bulksmsgateway.in/userbalance.php?user=niteducation&password=233304&type=3";
    
 $url = "http://sms.hspsms.com/getSMSCredit?username=niteducation&apikey=6357c666-be5a-4471-a88d-fc132d1d9ac8";

//$url = "http://bulksms.gfinch.in/api/checkbalance.php?user=nitgzp&pass=ghazipur@123";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output=curl_exec($ch);
curl_close($ch);
return $output;
}


