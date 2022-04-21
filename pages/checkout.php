<?php
if (!isset($_SESSION)) {
    session_start();
    if (isset($_SESSION["user_id"])) {
        $userId = $_SESSION["user_id"];
    }
}

require_once('../includes/templates/CartOps.php');
require_once('../includes/templates/CheckOutOps.php');
require_once('../includes/templates/OrderOps.php');

$cartOp = new CartOps();
$checkoutOp = new CheckOutOps();
$orderOp = new OrderOps();

if (isset($_POST['place_order'])) {

    if (isset($_POST['orderAddressId'])) {
        $orderAddressId = $_POST['orderAddressId'];

        $orderTotalPrice = $_POST['orderTotalPrice'];

        $orderPlaced = $checkoutOp->placeOrder($userId, $orderAddressId, $orderTotalPrice);
        if ($orderPlaced) {
            echo "<script>alert('Your order is placed successfully.');window.location.href='../../index.php';</script>";
        } else {
            echo "<script>alert('Some error occured while placing order!');</script>";
        }
    } else {
        echo "<script>alert('Some error occured while placing order, ship to address not selected!');</script>";
    }
}

?>
<html>

<head>
    <title>OneStop - CheckOut Summary</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid main-container">
        <!--Header-->
        <?php
        include("header.php");
        ?>
        <!-- End of header -->
        <?php
        if (isset($userId)) {
            $allCartItems =  $cartOp->showAllCartItems($userId);
            if (!empty($allCartItems)) {
                $totalMrp = 0;
                $totalPrice = 0;
                $totalQty = 0;

        ?>

                <!-- Shipping address section -->
                <div class="row cart-section">
                    <div class="cart-item-title">
                        Choose Shipping Address
                    </div>
                    <div class="col-lg-6 cart-item-price">
                        <div class="sidebar-product-price">
                            <span>Select address</span>
                            <form action="" method="post">
                                <select name='address' class="form-select" onchange="this.form.submit()">
                                    <option value="">Select Address</option>
                                    <?php
                                    //Get the address details

                                    $addressDetails = $checkoutOp->displayAddress($userId);
                                    foreach ($addressDetails as $addressData) {
                                        $addressId = $addressData["address_id"];
                                        $custName = $addressData["name"];
                                        $custMob = $addressData["mob_num"];
                                        $address_1 = $addressData["address_1"];
                                        $address_2 = $addressData["address_2"];
                                        $city = $addressData["city"];
                                        $state = $addressData["state"];
                                        $country = $addressData["country"];
                                        $pincode = $addressData["pincode"];
                                    ?>

                                        <?php if (isset($_POST["address"])) {
                                            $myAddressId = $_POST["address"];
                                            if ($myAddressId == $addressId) {
                                        ?>

                                                <option value="<?php echo $addressId ?>" selected><?php echo $custName . " - " . $address_1 . ", " . $address_2 . ", " . $city . ", " . $state . "-" . $pincode . ", " . $country; ?></option>

                                            <?php
                                            } else {
                                            ?>

                                                <option value="<?php echo $addressId ?>"><?php echo $custName . " - " . $address_1 . ", " . $address_2 . ", " . $city . ", " . $state . "-" . $pincode . ", " . $country; ?></option>

                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option value="<?php echo $addressId ?>"><?php echo $custName . " - " . $address_1 . ", " . $address_2 . ", " . $city . ", " . $state . "-" . $pincode . ", " . $country; ?></option>


                                    <?php

                                        }
                                    }
                                    ?>

                                </select>

                            </form>



                            <?php
                            if (isset($_POST["address"])) {
                                echo "<div class='product-sidebar-title'>SEND TO :</div>";

                                $myAddressId = $_POST["address"];
                                //Get the address details on address id        
                                $myAddressDetails = $orderOp->getAddressDetails($myAddressId);
                                foreach ($myAddressDetails as $myAddressData) {
                                    $myAddressId = $myAddressData["address_id"];
                                    $myCustName = $myAddressData["name"];
                                    $myCustMob = $myAddressData["mob_num"];
                                    $myAddress_1 = $myAddressData["address_1"];
                                    $myAddress_2 = $myAddressData["address_2"];
                                    $myCity = $myAddressData["city"];
                                    $myState = $myAddressData["state"];
                                    $myCountry = $myAddressData["country"];
                                    $myPincode = $myAddressData["pincode"];
                                }


                                echo $myCustName . "<br><br>" . $myAddress_1 . ",<br>" . $myAddress_2 . ",<br>" . $myCity . ", " . $myState . "-" . $myPincode . "<br>" . $myCountry;
                            }
                            ?>
                        </div>

                        <div class="col-lg-4 place-order-button">
                            <form action="./add_address.php" method="post">
                                
                                <input type="submit" class="place-order-btn" name="add_new_address" value="Add New Address">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 cart-items">
                        <div class="cart-item">
                            <table class="cart-item-table">
                                <?php
                                foreach ($allCartItems as $cartItem) {
                                    $cartId = $cartItem["cart_id"];
                                    $prodId = $cartItem["product_id"];
                                    $prodName = $cartItem["product_name"];
                                    $prodBrand = $cartItem["brand_name"];
                                    $prodStock = $cartItem["product_stock"];
                                    $prodQty = $cartItem["product_quantity"];
                                    $prodPhoto = $cartItem["product_img"];
                                    $prodImg = explode(",", $prodPhoto);
                                    $prodPrice = $cartItem["product_price"];
                                    $prodMrp = $cartItem["product_mrp"];
                                    $prodQty = $cartItem["product_quantity"];
                                    $totalMrp += ($prodMrp * $prodQty);
                                    $totalPrice += ($prodPrice * $prodQty);
                                    $prodPriceDiff = $totalMrp - $totalPrice;
                                    // $prodTax = $totalPrice * 0.13;
                                    // $orderTotal = $totalPrice + $prodTax;
                                    $totalQty += 1


                                ?>
                                    <tr>
                                        <td class="product-image">
                                            <a href="subproduct.php?id=<?php echo $prodId; ?>"><img src="../images/product/<?php echo $prodBrand . "/" . $prodImg[0]; ?>" alt="Image not found" class="product-img" /></a>
                                        </td>

                                        <td class="product-details">
                                            <a href="subproduct.php?id=<?php echo $prodId; ?>">
                                                <div class="product-title"><?php echo $prodBrand; ?></div>
                                                <div class="product-subtitle"><?php echo $prodName; ?></div>
                                            </a>
                                        </td>

                                        <td class="product-retail-price">
                                            <?php
                                            if ($prodPrice == $prodMrp) {
                                                echo "$$prodMrp";
                                            } else {
                                                echo "$$prodPrice <sub class='text-muted'><del>$$prodMrp</del></sub>";
                                            }
                                            ?>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="col">
                                                <form action="" method="post">
                                                    <input type="hidden" name="cart_id" value="<?php echo $cartId; ?>">
                                                    <select name='qty' class="form-select" disabled onchange="this.form.submit()">
                                                        <option value="" disabled>Qty</option>
                                                        <?php


                                                        $quant = 1;
                                                        if ($prodStock > 10) {
                                                            for ($idx = 1; $idx <= $prodStock; $idx++) {
                                                                if ($quant == 11) {
                                                                    break;
                                                                } else {
                                                                    if ($quant == $prodQty) {
                                                                        echo "<option value='$quant' selected>$quant</option>";
                                                                    } else {
                                                                        echo "<option value='$quant'>$quant</option>";
                                                                    }
                                                                    $quant += 1;
                                                                }
                                                            }
                                                        } else {
                                                            for ($idx = 1; $idx <= $prodStock; $idx++) {
                                                                if ($quant == $prodQty) {
                                                                    echo "<option value='$quant' selected>$quant</option>";
                                                                } else {
                                                                    echo "<option value='$quant'>$quant</option>";
                                                                }
                                                                $quant += 1;
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="4">
                                            <hr>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="col-lg-12 cart-item-price">
                            <div class="product-sidebar-title">PRICE SUMMARY (<?php echo $totalQty; ?> Item)</div>
                            <div class="sidebar-product-price">
                                <span>Merchandise Total</span>
                                <span class="product-price">
                                    <span>$<?php echo $totalMrp; ?></span>
                                </span>
                            </div>
                            <div class="sidebar-product-price">
                                <span>Promotional Discount</span>
                                <span class="product-price-discount">
                                    <span>-$<?php echo $prodPriceDiff; ?></span>
                                </span>
                            </div>
                            
                            <div class="sidebar-product-price">
                                <span>Subtotal</span>
                                <span class="product-price">
                                    <span><strong>$<?php echo $totalPrice; ?></strong></span>
                                </span>
                            </div>

                            <div class="sidebar-product-price">
                                <span>Tax</span>
                                <span class="product-price">
                                    <span><strong>$<?php 
                                        $tax = $totalPrice * 0.13;
                                        echo $tax; 
                                    ?></strong></span>
                                </span>
                            </div>
                            <hr>
                            <div class="sidebar-product-price">
                                <span><strong>Order Total</strong></span>
                                <span class="product-price">
                                    <span><strong>$<?php 
                                    $totalPrice = $tax + $totalPrice;
                                    echo $totalPrice; ?></strong></span>
                                </span>
                            </div>

                            <div class="place-order-button">
                                <form action="" method="post">
                                    <?php if (isset($myAddressId)) { ?>
                                        <input type="hidden" name="orderAddressId" value="<?php echo $myAddressId; ?>">
                                        <input type="hidden" name="orderTotalPrice" value="<?php echo $totalPrice; ?>">
                                    <?php } ?>
                                    <input type="submit" class="place-order-btn" name="place_order" value="PLACE ORDER">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End of cart section-->

            <?php
            } else {
            ?>
                <!--Shopping bag page when there is no items in bag-->
                <div class="row bag">
                    <div class="bag-title">Your shopping bag is empty !</div>
                    <div class="bag-subtitles">
                        Give it a purpose - get it full with your favourite apparels
                    </div>
                    <br /><br />
                    <div class="bag-image">
                        <img src="../images/bag3.png" alt="Image not found" class="bag-img" />
                    </div>
                    <br /><br />
                    <div class="bag-button">
                        <a href="wishlist.php"><button type="button" class="btn btn-danger bag-btn">Add items from wishlist</button></a>
                    </div>
                </div>
                <!--End of shopping bag page-->
            <?php
            }
        } else {
            ?>
            <!--Shopping bag page when there is no items in bag-->
            <div class="row bag">
                <div class="bag-title">Your shopping bag is empty !</div>
                <div class="bag-subtitles">
                    Give it a purpose - get it full with your favourite apparels
                </div>
                <br /><br />
                <div class="bag-image">
                    <img src="../images/bag3.png" alt="Image not found" class="bag-img" />
                </div>
                <br /><br />
                <div class="bag-button">
                    <a href="wishlist.php"><button type="button" class="btn btn-danger bag-btn">Add items from wishlist</button></a>
                </div>
            </div>
            <!--End of shopping bag page-->
        <?php } ?>
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>