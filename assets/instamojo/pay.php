<?php 

$payment = $_SESSION['payment'];
echo '<pre> pk';
print_r($payment);
echo '</pre>';
$product_name = $purpose;
$price = $amount;
$name = $buyer_name;
$phone = $phone;
$email = $email;

echo $product_name;

include 'src/instamojo.php';

$api = new Instamojo\Instamojo('ed3fc46b07333211a21e165ac6a0c9a7', '7d25c627d043f2e89b1916fbfe5baa27','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://niteducation.ac.in/instamojo/thankyou.php",
        "webhook" => "http://niteducation.ac.in/instamojo/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>