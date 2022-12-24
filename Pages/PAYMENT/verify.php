<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
  
  $razorpay_order_id=$_SESSION['razorpay_order_id'];
    $razorpay_payment_id=$_POST['razorpay_payment_id'];
    $service_email=$_SESSION['service_email'];
    $service_provider_name=$_SESSION['service_provider_name'];
    $service_name=$_SESSION['service_name'];
    $from_name=$_SESSION['UNAME'];
    $from_email=$_SESSION['EMAIL'];
    $service_id=$_SESSION['service_id'];
   $db = mysqli_connect("localhost","root","","miniproject") or die("connectiion Failed");
    
    $sql="INSERT INTO `orders` (`sid`,`order_id`, `razorpay_payment_id`, `status`, `fromemail`, `toemail`) VALUES ('$service_id','$razorpay_order_id', '$razorpay_payment_id', 'success', '$from_email', '$service_email')";
    $Result= mysqli_query($db,$sql) or die("unSUCCESS IN verify.php");
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $sql="INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `status`, `fromemail`, `toemail`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'fail', '$from_email', '$service_email')";
    $Result= mysqli_query($db,$sql) or die("unSUCCESS IN verify.php");

    echo"alert('Your payment failed!!!! please try again!!!')";
    
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
