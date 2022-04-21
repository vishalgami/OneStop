<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class OrderOps extends Config{

        public function displayAllOrders($userId,$orderId){
            $selectQy = "SELECT * FROM `orders` o JOIN `order_details` od ON o.order_id = od.order_id JOIN `address` addr ON o.address_id = addr.address_id WHERE o.user_id = $userId AND o.order_id = $orderId ORDER BY o.order_id DESC";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        public function displayOrderByUser($userId){
            $selectQy = "select * from orders where user_id = $userId order by order_id DESC";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }


        public function displaySingleProduct($productId){
            $selectQy = "select * from products where product_id = $productId";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display all products details
        public function displayOrders(){
            $selectQy = "select * from orders order by order_id DESC";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        public function getOrderDetails($orderId){
            $selectQy = "SELECT * from order_details WHERE order_id = '$orderId'";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        public function getAddressDetails($addressId){
            $selectQy = "SELECT * from address WHERE address_id = '$addressId'";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        public function order_confirmed_mail($orderId,$mailTo,$customerName,$productName){

                date_default_timezone_set("Canada/Eastern");
                $timestamp  = date('Y-m-d H:i:s');  

                //set delivery status and order confirmed date
                $setDeliveryStatus = "UPDATE `orders` SET `delivery_status`='Order confirmed and placed by seller',`order_confirmed_date`='$timestamp' WHERE `order_id`='$orderId';";
                $data = $this->connect()->exec($setDeliveryStatus);


                    // $code=uniqid(true);

                    $myOrder="localhost/OneStop/pages/orders.php";
                    $orderDetails="localhost/OneStop/pages/orderDetails.php";
                 
                    $mailSub="Your OneStop order with id:$orderId for product(s):$productName";
                    $mailMsg="<div style='padding:0 10% 0 10%;'>
                    <h2 style='text-align:right; line-height: 0.5;'>Order Confirmation</h2>
                <h3 style='text-align:right;  line-height: 0.5;'>Order Id :<a style='text-decoration: none;' href='$orderDetails'>$orderId</a></h3>
                <h2 style='color:blue;'>Hello $customerName,</h2>
                <h3>Thank you for shopping with us. We'd like to let you know that OneStop has received your order, and is preparing it for shipment.If you would like to view the status of your order, please visit <a href='$myOrder' style='text-decoration: none;'>My orders</a> on OneStop website.</h3>
                            <br><br>
                            We hope to see you again soon.
                            <h2 style='line-height: 0.05; color:blue;'>OneStop team</h2>
                        </div>";
                require '../../includes/PHPMailer-master/PHPMailerAutoload.php';
                $mail = new PHPMailer();
                $mail ->IsSmtp();
                // $mail ->SMTPDebug = 1;//O for live domain,1 for debugging
                $mail ->SMTPAuth = true;
                $mail ->SMTPSecure = 'tls';//ssl or tls
                $mail ->Host = "smtp.gmail.com";
                $mail ->Port = 587; // 465 for SSL or 587 for TLS
                $mail ->IsHTML(true);
                $mail ->Username = "onestop13455@gmail.com";
                $mail ->Password = 'One$top1920';
                $mail ->SetFrom("onestop13455@gmail.com","Onestop shopping");
                $mail ->Subject = $mailSub;
                $mail ->Body = $mailMsg;
                $mail ->AddAddress($mailTo);

                $mailSent = $mail->Send();
                if(!$mailSent)
                {
                    echo "<script>alert('Oops! Mail not sent,Please try again!');
                    window.location.href='orders.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Order confirmation mail successfully sent to the customer ');
                    window.location.href='orders.php';
                    </script>";

                }
        }


        public function order_out_for_delivery_mail($orderId,$mailTo,$customerName,$productName){

            date_default_timezone_set("Canada/Eastern");
            $timestamp  = date('Y-m-d H:i:s');  

            //set delivery status and order confirmed date
            $setDeliveryStatus = "UPDATE `orders` SET `delivery_status`='Order is out for delivery',`order_out_for_delivery_date`='$timestamp' WHERE `order_id`='$orderId';";
            $data = $this->connect()->exec($setDeliveryStatus);


                // $code=uniqid(true);

                $myOrder="localhost/OneStop/pages/orders.php";
                $orderDetails="localhost/OneStop/pages/orderDetails.php";
             
                $mailSub="Your OneStop order with id : $orderId is out for delivery";
                $mailMsg="<div style='padding:0 10% 0 10%;'>
                <h2 style='text-align:right; line-height: 0.5;'>Order is out for delivery</h2>
            <h3 style='text-align:right;  line-height: 0.5;'>Order Id :<a style='text-decoration: none;' href='$orderDetails'>$orderId</a></h3>
            <h2 style='color:blue;'>Hello $customerName,</h2>
            <h3>Your order is out for delivery ,our delivery boy will contact you for the confirmation of your presence , please stay at home to receive your order.If you would like to track your order, please visit <a href='$myOrder' style='text-decoration: none;'>My orders</a> on OneStop website.</h3>
                        <br><br>
                        We hope to see you again soon.
                        <h2 style='line-height: 0.05; color:blue;'>OneStop team</h2>
                    </div>";
            require '../../includes/PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            // $mail ->SMTPDebug = 1;//O for live domain,1 for debugging
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'tls';//ssl or tls
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 587; // 465 for SSL or 587 for TLS
            $mail ->IsHTML(true);
            $mail ->Username = "onestop13455@gmail.com";
            $mail ->Password = 'One$top1920';
            $mail ->SetFrom("onestop13455@gmail.com","Onestop shopping");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailTo);

            $mailSent = $mail->Send();

            if(!$mailSent)
            {
                echo "<script>alert('Oops! Mail not sent,Please try again!');
                window.location.href='orders.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Order out for delivery mail successfully sent to the customer ');
                window.location.href='orders.php';
                </script>";

            }
        }

        public function order_delivered_mail($orderId,$mailTo,$customerName,$productName){

            date_default_timezone_set("Canada/Eastern");
            $timestamp  = date('Y-m-d H:i:s');  

            //set delivery status and order confirmed date
            $setDeliveryStatus = "UPDATE `orders` SET `delivery_status`='Order Successfully Delivered',`order_delivered_date`='$timestamp' WHERE `order_id`='$orderId';";
            $data = $this->connect()->exec($setDeliveryStatus);


                // $code=uniqid(true);
                $siteurl="localhost/OneStop";
                $myOrder="localhost/OneStop/pages/orders.php";
                $orderDetails="localhost/OneStop/pages/orderDetails.php";
             
                $mailSub="Your OneStop order with id : $orderId is successfully delivered";
                $mailMsg="<div style='padding:0 10% 0 10%;'>
                <h2 style='text-align:right; line-height: 0.5;'>Order Delivered</h2>
            <h3 style='text-align:right;  line-height: 0.5;'>Order Id :<a style='text-decoration: none;' href='$orderDetails'>$orderId</a></h3>
            <h2 style='color:blue;'>Hello $customerName,</h2>
            <h3>Your order is successfully delivered<br> 
                Keep shopping on <a style='text-decoration: none;' href='$siteurl'>OneStop website</a> and check out the new offers.</h3>
              <br><br>
                        We hope to see you again soon.
                        <h2 style='line-height: 0.05; color:blue;'>OneStop team</h2>
                    </div>";
            require '../../includes/PHPMailer-master/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail ->IsSmtp();
            // $mail ->SMTPDebug = 1;//O for live domain,1 for debugging
            $mail ->SMTPAuth = true;
            $mail ->SMTPSecure = 'tls';//ssl or tls
            $mail ->Host = "smtp.gmail.com";
            $mail ->Port = 587; // 465 for SSL or 587 for TLS
            $mail ->IsHTML(true);
            $mail ->Username = "onestop13455@gmail.com";
            $mail ->Password = 'One$top1920';
            $mail ->SetFrom("onestop13455@gmail.com","Onestop shopping");
            $mail ->Subject = $mailSub;
            $mail ->Body = $mailMsg;
            $mail ->AddAddress($mailTo);

            $mailSent = $mail->Send();
            if(!$mailSent)
            {
                echo "<script>alert('Oops! Mail not sent,Please try again!');
                window.location.href='orders.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Order delivered mail successfully sent to the customer ');
                window.location.href='orders.php';
                </script>";

            }
        }

    }

?>