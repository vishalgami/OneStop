<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION["user_id"])){
            $userId = $_SESSION["user_id"];
        }
    }
    

    require_once('../includes/templates/CartOps.php');

    require_once('../includes/templates/WishlistOps.php');

	$cartOp = new CartOps();

	$wishlistOp = new WishlistOps();

    //Handle get request and delete the product details from cart
	if(isset($_GET["cartRemId"])){
		$cartId = $_GET["cartRemId"];
		$isDeleted = $cartOp->removeProdFromCart($userId,$cartId);
		if($isDeleted){
			echo "<script>alert('Product Removed Successfully from Cart!');window.location.href='./cart.php';</script>";
		}
		else{
			echo "<script>alert('Some error occured while removing product from cart!');</script>"; 
		}
	}

    //Update Quantity
    if(isset($_POST["qty"])){
        $cartId = $_POST["cart_id"];
        $newProdQty = $_POST["qty"];
        $updatedQty= $cartOp->updateQuantity($userId,$cartId,$newProdQty);
            if($updatedQty){
                 echo "<script>alert('Successfully updated product quantity in cart');window.location.href='cart.php';</script>";
            }
            else{
                echo "<script>alert('Some error occured while updating product quantity in cart!');</script>"; 
            }
    }

    //Move product from cart to wishlist
    if(isset($_GET["cartId"])){
        if(isset($_GET["prodId"])){
            $cartId = $_GET["cartId"];
            $prodId = $_GET["prodId"];

            $checkedProductInWishlist = $wishlistOp->checkProductInWishlist($userId,$prodId);

            //check if product is in wishlist if yes display message else add it to wishlist
            if($checkedProductInWishlist){
                    echo "<script>alert('Product is already in wishlist');window.location.href='wishlist.php';</script>";
            }
            else{
                $addedProductInWishlist = $wishlistOp->addToWishlist($userId,$prodId);
                if($addedProductInWishlist){
                    echo "<script>alert('Successfully added product to wishlist');window.location.href='wishlist.php';</script>";
                }
                else{
                    echo "<script>alert('Some error occured while adding product to wishlist!');</script>"; 
                }
            }
        }
    }

?>
<html>

<head>
    <title>OneStop - Shopping Bag</title>
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
            if(isset($userId)){
                $allCartItems =  $cartOp->showAllCartItems($userId);
                if(!empty($allCartItems)){
                    $totalMrp = 0;
                    $totalPrice = 0;
                    $totalQty = 0;
        ?>
    
        <!-- cart section -->
        <div class="row cart-section">
            <div class="cart-item-title">
                Your Shopping Bag
            </div>
            <div class="col-lg-8 cart-items">
                <div class="cart-item">
                    <table class="cart-item-table">
                        <?php 
                            foreach($allCartItems as $cartItem){
                                $cartId = $cartItem["cart_id"];
                                $prodId = $cartItem["product_id"];
                                $prodName = $cartItem["product_name"];
                                $prodBrand = $cartItem["brand_name"];
                                $prodStock = $cartItem["product_stock"];
                                $prodQty = $cartItem["product_quantity"];
                                $prodPhoto = $cartItem["product_img"];
                                $prodImg = explode(",",$prodPhoto);
                                $prodPrice = $cartItem["product_price"];
                                $prodMrp = $cartItem["product_mrp"];
                                $totalMrp += ($prodMrp*$prodQty);
                                $totalPrice += ($prodPrice*$prodQty);
                                $prodPriceDiff = $totalMrp - $totalPrice;
                                // $prodTax = $totalPrice * 0.13;
                                // $orderTotal = $totalPrice + $prodTax;
                                $totalQty += 1
                                
                                
                        ?>
                        <tr>
                            <td class="product-image">
                            <a href="subproduct.php?id=<?php echo $prodId;?>"><img src="../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" /></a>
                            </td>
                            
                            <td class="product-details">
                            <a href="subproduct.php?id=<?php echo $prodId;?>"><div class="product-title"><?php echo $prodBrand;?></div>
                                <div class="product-subtitle"><?php echo $prodName;?></div></a>
                            </td>
                            
                            <td class="product-retail-price">
                            <?php 
                                            if($prodPrice == $prodMrp){ 
                                                echo "$$prodMrp";
                                            }
                                            else{
                                                echo "$$prodPrice <sub class='text-muted'><del>$$prodMrp</del></sub>";
                                            }
                                        ?>
                            </td>
                            <td class="product-quantity">
                                <div class="col">
                                    <form action="" method="post">
                                        <input type="hidden" name="cart_id" value="<?php echo $cartId;?>">
                                        <select name='qty' class="form-select" onchange="this.form.submit()">
                                        <option value="" disabled>Qty</option>
                                            <?php 
                                            

                                                $quant=1;
                                                if($prodStock > 10){
                                                    for($idx=1;$idx<=$prodStock;$idx++){
                                                        if($quant == 11){
                                                            break;
                                                        }else{
                                                            if($quant == $prodQty){
                                                                echo "<option value='$quant' selected>$quant</option>";
                                                                }
                                                                else{
                                                                    echo "<option value='$quant'>$quant</option>";
                                                                }
                                                            $quant +=1;
                                                        }
                                                    }
                                                }
                                                else{
                                                    for($idx=1;$idx<=$prodStock;$idx++){
                                                        if($quant == $prodQty){
                                                            echo "<option value='$quant' selected>$quant</option>";
                                                            }
                                                            else{
                                                                echo "<option value='$quant'>$quant</option>";
                                                            }
                                                        $quant +=1;
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
                                <!-- <hr> -->
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cartitem-remove-btn"><a href="./cart.php?cartRemId=<?php echo $cartId;?>" class="cartitem-remove-link" >REMOVE</a></div>
                            </td>
                            <td>
                                <div class="cartitem-wishlist-btn"><a href="./cart.php?cartId=<?php echo $cartId;?>&prodId=<?php echo $prodId;?>" class="cartitem-wishlist" onclick="addList()">MOVE TO WISHLIST</a></div>
                            </td>
                            <td ></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 cart-item-price">
                <div class="product-sidebar-title">PRICE SUMMARY (<?php echo $totalQty;?> Item)</div>
                <div class="sidebar-product-price">
                    <span>Merchandise Total</span>
                    <span class="product-price">
                        <span>$<?php echo $totalMrp;?></span>
                    </span>
                </div>
                <div class="sidebar-product-price">
                    <span>Promotional Discount</span>
                    <span class="product-price-discount">
                        <span>-$<?php echo $prodPriceDiff;?></span>
                    </span>
                </div>
                <hr>
                <div class="sidebar-product-price">
                    <span><strong>Subtotal</strong></span>
                    <span class="product-price">
                        <span><strong>$<?php echo $totalPrice;?></strong></span>
                    </span>
                </div>
               
                <div class="place-order-button">
                    <a href="checkout.php">
                        <button type="button" class="place-order-btn" onclick="placeOrder()">
                            PROCEED TO CHECKOUT
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!--End of cart section-->
        
        <?php  
                } else{ 
            
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
            }
            else{
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