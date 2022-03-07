<?php

include("db_conx.php");

session_start();

if(isset($_POST['out_for_delivery'])){
  $dboy = $_POST['dboy'];
  $get_dboy_det=mysqli_query($conx,"SELECT register_mobile FROM registration WHERE `register_username`='$dboy' and `role_id`='3'");
  $dboy_num=mysqli_fetch_array($get_dboy_det);
  $dboy_mob=$dboy_num['register_mobile'];
  $mobile=$_POST['mob_num'];

  $order_id = $_POST['order_id'];
  $product_name=$_POST['product_name'];
  $myorder="http://XYZ.com/My-orders.php";
  
  $message="Out for Delivery: $product_name with order Id: $order_id from ABC,will be delivered today by our delivery boy ( $dboy: $dboy_mob)";
  
  $apiKey = urlencode('AccessCode');
  $numbers = array($mobile);
//   $sender = urlencode('TXTLCL');//TXTLCL-testing
  $sender = urlencode('ABC');
  $message = rawurlencode($message);
  $numbers = implode(',', $numbers);
  $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
  $ch = curl_init('https://api.textlocal.in/send/');
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  // echo $response;
} 

if(isset($_POST['out_for_delivery'])){
 $dboy = $_POST['dboy'];
$order_id=$_POST['order_id'];

date_default_timezone_set("Asia/Kolkata");
$timestamp  = date('Y-m-d H:i:s');  

$ch_order_stat = mysqli_query($conx,"UPDATE `orders` SET `delivery_status`='Order is out for delivery',`order_out_for_delivery_date`='$timestamp',`delivery_boy`='$dboy' WHERE `order_id`='$order_id';");
}
    $mailto = $_POST['mail_to'];
    $order_id = $_POST['order_id'];
    $product_name=$_POST['product_name'];
    $customer_name=$_POST['customer_name'];
    //$mailSub = $_POST['mail_sub'];
    //$mailMsg = $_POST['mail_msg'];
    //$code=uniqid(true);

    
    $myorder="https://XYZ.com/My-orders.php";
    $order_details="https://XYZ.com/order-details.php";
    // $url="http://".$_SERVER["HTTP_HOST"]. dirname($_SERVER["PHP_SELF"]) ."/password_reset_final.php?token=$code";   //  passing token in link
    $mailSub="Your XYZ order with id : $order_id is out for delivery ";
    $mailMsg="<div style='padding:0 10% 0 10%;'>
     <h2 style='text-align:right; line-height: 0.5;'>Order is out for delivery</h2>
  <h3 style='text-align:right;  line-height: 0.5;'>Order Id :<a style='text-decoration: none;' href='$order_details'>$order_id</a></h3>
  <h2 style='color:#ff7f3d;'>Hey $customer_name,</h2>
<h3>Your order is out for delivery ,our delivery boy will contact you for the confirmation of your presence , please stay at home to receive your order.<br> To track your order please visit  <a href='$myorder' style='text-decoration: none;'>My orders</a> on XYZ.com.</h3>
              <br><br>
              We hope to see you again soon.
              <h2 style='line-height: 0.05; color:#ff7f3d;'>XYZ.com</h2>
          </div>";
   require '../PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   //$mail ->IsSmtp();
   $mail ->SMTPDebug = 0;//O for live domain,1 for debugging
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';//ssl or tls
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // 465 for SSL or 587 for TLS
   $mail ->IsHTML(true);
   $mail ->Username = "abc@gmail.com";
   $mail ->Password = "abc12345678";
   $mail ->SetFrom("abc@gmail.com","ABC");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);


$check_user=mysqli_query($conx,"SELECT * from `registration` where `register_email`='$mailto' ");
$query = mysqli_fetch_array($check_user);
if(!empty($query)){
   if(!$mail->Send())
   {
       echo "<script>alert('Oops! Mail not sent,Please try again!');
       window.location.href='orders.php';</script>";
   }
   else
   {
    //   $token_todb=mysqli_query($conx,"INSERT INTO `password_reset` (`code`,`email`) VALUES ('$code','$mailto')");
       echo "<script>alert('Order out for delivery mail is successfully sent to the customer');
       window.location.href='orders.php';
       </script>";

   }
}
else{

  echo "<script>alert('Invalid Email address');
        window.location.href='orders.php';
        </script>";
  
}



?>
<?php include("db_conx_close.php");?>