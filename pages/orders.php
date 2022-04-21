<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION["user_id"])){
            $userId = $_SESSION["user_id"];
        }
    }

    require_once('../includes/templates/OrderOps.php');

	$orderOp = new OrderOps();
?>
<html>

<head>
    <title>OneStop - Orders</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
    <link rel="stylesheet" type="text/css" href="../css/orders.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid main-container">
        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->
        <div class="row order-section">
        <div class="cart-item-title">
                Your Orders
                <hr>
            </div>
        <?php
            if(isset($userId)){
                $allUserOrders =  $orderOp->displayOrderByUser($userId);
                if(!empty($allUserOrders)){
                    foreach($allUserOrders as $userOrder){
                        $currentOrderId = $userOrder["order_id"];

                    
        ?>

        <div class="row order-det-section">
            <div class="col-lg-12 order-items">
                <div class="order-item">
                    <table class="order-item-table">
                        <?php 
                            $allOrderItems =  $orderOp->displayAllOrders($userId,$currentOrderId);
                            foreach($allOrderItems as $orderItem){
                                $orderId = $orderItem["order_id"];
                                $orderStatus = $orderItem["delivery_status"];
                                $orderPlacedDate = $orderItem["order_placed_date"];
                                $orderTotal = $orderItem["order_total_price"];
                                $custName = $orderItem["name"];
                                $custMob = $orderItem["mob_num"];
                                $address1 = $orderItem["address_1"];
                                $address2 = $orderItem["address_2"];
                                $city = $orderItem["city"];
                                $state = $orderItem["state"];
                                $country = $orderItem["country"];
                                $pincode = $orderItem["pincode"];

                            }                                
                                
                        ?>
                        <!-- Top row -->
                        
                        <tr class="top-row">

                                <td class="theader" style="font-size:15px;"><b>Order Placed</b></td>

                                <td class="theader" style="font-size:15px;"><b>Total</b></td>

                                <td class="theader" style="font-size:15px;"><b>Ship To</b></td>

                                <td class="colmspan" colspan="1"></td>

                                <td colspan="4" style="font-size:15px;">Order Id : <?php echo $orderId; ?></td>

                                <tr class="top-row">

                                    <td data-label="Order Placed:"><?php   

                                    $o_date=$orderPlacedDate;

                                    $n_date = date("d M Y", strtotime($o_date));

                                    echo $n_date;?></td>

                                    <td data-label="Total price:">CDN$ <?php echo number_format($orderTotal,2);?></td>

                                    <td data-label="Ship To:">  

                                        <div class="dropdown">

                                            <span class="btn  dropdown-toggle" data-toggle="dropdown" style="font-size:13px; color:#fff;">

                                            <?php echo $custName;?>

                                            </span>

                                        

                                            <div class="dropdown-content">

                                            <span class="content"><b> <?php echo $custName;?></b><br>

                                            <?php  

                                                if(!empty($address1)):

                                                    

                                                    echo $address1 .'<br>'; 



                                                    echo $address2 .'<br>'; 

                                                    echo $city .","; echo $state ."," .'<br>';

                                                

                                                    echo $country."-".$pincode .'<br>'; 

                                                    echo 'Phone:'.$custMob;

                                                endif;
                                                

                                                ?></span>

                                            </div>

                                            

                                    

                                        </div>

                                    </td>

                                    <td class="colmspan" colspan="1"></td>
                                    <td colspan="3"></td>
                                                
                                    

                                    </td>



                                    </tr>

                                </tr>
                                <!-- //Top row -->
                                <tr> 
                                    <td>&nbsp</td>
                                </tr>
                                <tr> 
                                    <td colspan='5'>
                                         <p style="font-size:18px;"><strong>Order Status: </strong><?php echo $orderStatus;?></p>
                                         <!-- <hr> -->
                                    </td>
                                </tr>

                                <?php 
                                    foreach($allOrderItems as $orderItem){
                                        $orderId = $orderItem["order_id"];
                                        $orderStatus = $orderItem["delivery_status"];
                                        $orderPlacedDate = $orderItem["order_placed_date"];
                                        $orderTotal = $orderItem["order_total_price"];
                                        $prodQty = $orderItem["product_quantity"];
                                        $custName = $orderItem["name"];
                                        $custMob = $orderItem["mob_num"];
                                        $address1 = $orderItem["address_1"];
                                        $address2 = $orderItem["address_2"];
                                        $city = $orderItem["city"];
                                        $state = $orderItem["state"];
                                        $country = $orderItem["country"];
                                        $pincode = $orderItem["pincode"];
        
                                    
                                        $prodId = $orderItem["product_id"];
                                        $orderedProducts = $orderOp->displaySingleProduct($prodId);
                                        foreach($orderedProducts as $orderProductItem){ 
                                            $prodName = $orderProductItem["product_name"];
                                            $prodBrand = $orderProductItem["brand_name"];
                                            $prodPhoto = $orderProductItem["product_img"];
                                            $prodImg = explode(",",$prodPhoto); 
                                ?>
                        <tr>
                            <td class="product-image">
                            <a href="subproduct.php?id=<?php echo $prodId;?>"><img src="../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" /></a>
                            </td>
                            
                            <td class="product-details" colspan='4'>
                            <a href="subproduct.php?id=<?php echo $prodId;?>"><div class="product-title"><?php echo $prodBrand;?></div>
                                <div class="product-subtitle"><?php echo $prodName."<strong>(Quantity: ".$prodQty.")</strong>";?></div></a>
                            </td>
                            
                          
                        </tr>
                        <tr>
                            <td colspan="4">
                                <!-- <hr> -->
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <!-- <hr> -->
                            </td>
                        </tr>
                        <?php } } ?>
                    </table>
                </div>
                                        </div>                        
            </div>
            <?php 
                    }
                    }else{

                        ?>

                                    <!--Orders page when there's no orders placed-->
                    <div class="row orders">
                        <div class="orders-title">You haven't placed any order yet !</div>
                        <div class="orders-subtitles">
                            Order section is empty. After placing order, you can manage them from here!
                        </div>
                        <br /><br />
                        <div class="orders-image">
                            <img src="../images/orders3.webp" alt="Image not found" class="orders-img" />
                        </div>
                        <br /><br />
                        <div class="orders-button">
                            <a href="../index.php"><button type="button" class="btn btn-danger orders-btn">Start shopping</button></a>
                        </div>
                    </div>
            <?php
                    }
                }else{
                        ?>
                        <!--Orders page when there's no orders placed-->
        <div class="row orders">
            <div class="orders-title">You haven't placed any order yet !</div>
            <div class="orders-subtitles">
                Order section is empty. After placing order, you can manage them from here!
            </div>
            <br /><br />
            <div class="orders-image">
                <img src="../images/orders3.webp" alt="Image not found" class="orders-img" />
            </div>
            <br /><br />
            <div class="orders-button">
                <a href="../index.php"><button type="button" class="btn btn-danger orders-btn">Start shopping</button></a>
            </div>
        </div>
            <?php    }
                
            ?>

        
        <!--End of orders page-->
       
    
    </div>
     <!--footer-->
     <?php include("footer.php"); ?>
        <!--End of footer-->
</body>

</html>