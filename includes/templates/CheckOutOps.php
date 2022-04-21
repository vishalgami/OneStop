<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once(dirname(__FILE__).'../../config/Config.php');

    class CheckOutOps extends Config{
        //Display Address
        public function displayAddress($userID){
            $selectQy = "select * from address where user_id=$userID";

            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Place Order 
        public function placeOrder($userId,$orderAddressId,$orderTotalPrice){

            date_default_timezone_set("Canada/Eastern");
            $timestamp  = date('Y-m-d H:i:s'); 

            //Insert order data to order table
            $conn = $this->connect();
            $insertOrderQy = "insert into orders(user_id,address_id,order_total_price,delivery_status,order_placed_date) values ('$userId','$orderAddressId','$orderTotalPrice','Order yet to be confirmed by seller','$timestamp')";
            $conn->exec($insertOrderQy); 

            $orderId = $conn->lastInsertId();
            
            //Get cart details
            $selectCartQy = "select * from cart where user_id = $userId";
            $cartData = $this->connect()->query($selectCartQy)->fetchAll();

            //Get user details
            $selectUserQy = "select * from users where user_id = $userId";
            $userData = $this->connect()->query($selectUserQy)->fetchAll();

            foreach($userData as $userDetails){
                $customerName = $userDetails["username"];
                $mailTo = $userDetails["email"];
            }

            //Get product details
            $allProdName = "";
            foreach($cartData as $cartDetails){
                $productId = $cartDetails["product_id"];
                $productQty = $cartDetails["product_quantity"];
            
                //Get product unit price
                $getProductQy = "select * from products where product_id = $productId";
                $productData = $this->connect()->query($getProductQy)->fetchAll();

                foreach($productData as $productDetails){
                    $prod_id = $productDetails["product_id"];
                    $unitPrice = $productDetails["product_price"];
                    $prodName = $productDetails["product_name"];
                    $prodStock = $productDetails["product_stock"];
                    $allProdName = $prodName." (Qty:".$productQty."), ".$allProdName;

                    $insertOrderDetailsQy = "insert into order_details(order_id,product_id,unit_price,product_quantity) values ('$orderId','$productId','$unitPrice','$productQty')";
                    $orderDetailsData= $this->connect()->exec($insertOrderDetailsQy);

                    //Update product stock
                    $newStock = $prodStock - $productQty;
                    $updateQy = "UPDATE products SET product_stock='$newStock' WHERE product_id = '$prod_id'";
                    $updatedStock = $this->connect()->exec($updateQy);
                }
            }   

            $deleteQy = "DELETE FROM cart WHERE user_id = '$userId'";

            $clearCart = $this->connect()->exec($deleteQy);
            
                    // $code=uniqid(true);

                    $myOrder="localhost/OneStop/pages/orders.php";
                    $orderDetails="localhost/OneStop/pages/orderDetails.php";
                 
                    $mailSub="Your OneStop order with id:$orderId for product(s):$allProdName";
                    $mailMsg="<div style='padding:0 10% 0 10%;'>
                    <h2 style='text-align:right; line-height: 0.5;'>Order yet to be confirmed by seller</h2>
                <h3 style='text-align:right;  line-height: 0.5;'>Order Id :<a style='text-decoration: none;' href='$orderDetails'>$orderId</a></h3>
                <h2 style='color:blue;'>Hello $customerName,</h2>
                <h3>Thank you for shopping with us. We'd like to let you know that OneStop has received your order, and seller would confirm your order in short time.If you would like to view the status of your order, please visit <a href='$myOrder' style='text-decoration: none;'>My orders</a> on OneStop website.</h3>
                            <br><br>
                            We hope to see you again soon.
                            <h2 style='line-height: 0.05; color:blue;'>OneStop team</h2>
                        </div>";

                require '../includes/PHPMailer-master/PHPMailerAutoload.php';
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
                        echo "<script>alert('Check you email inbox for the updates');
                        window.location.href='orders.php';
                        </script>";
                }
        

            // echo "<script>alert('Your order is placed successfully.');window.location.href='../index.php';</script>";         
        }
    }
?>