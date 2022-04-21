<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION["user_id"])){
            $userId = $_SESSION["user_id"];
        }
    }

    require_once('../includes/templates/ProductOps.php');

    require_once('../includes/templates/CartOps.php');

    require_once('../includes/templates/WishlistOps.php');

	$prod = new ProductOps(); 

	$cartOp = new CartOps();

    $wishlistOp = new WishlistOps();

    //Handle get request and delete the product details from cart
	if(isset($_GET["wishlistRemId"])){
		$wishlistId = $_GET["wishlistRemId"];
		$isDeleted = $wishlistOp->removeProdFromWishlist($userId,$wishlistId);
		if($isDeleted){
			echo "<script>alert('Product Removed Successfully from Wishlist!');window.location.href='./wishlist.php';</script>";
		}
		else{
			echo "<script>alert('Some error occured while removing product from wishlist!');</script>"; 
		}
	}

    //Move product from wishlist to cart
    if(isset($_GET["wishlistId"])){
        if(isset($_GET["prodId"])){
            $wishlistId = $_GET["wishlistId"];
            $prodId = $_GET["prodId"];

            $checkProductStock = $wishlistOp->checkProductStock($prodId);

                    if($checkProductStock){
                        foreach($checkProductStock as $productStock){
                            $prodStock = $productStock["product_stock"];
                        }
                        if($prodStock != 0){
                            $isDeleted = $wishlistOp->removeProdFromWishlist($userId,$wishlistId);
                            if($isDeleted){
                                $checkedProductInCart = $cartOp->checkProductInCart($userId,$prodId);

                                //check if product is in cart if yes display message else add it to cart
                                if($checkedProductInCart){
                                        echo "<script>alert('Product is already in cart');window.location.href='cart.php';</script>";
                                }
                                else{
                                    $AddedproductToCart = $cartOp->addToCart($userId,$prodId,'1');
                                    if($AddedproductToCart){
                                        echo "<script>alert('Successfully added product to cart');window.location.href='cart.php';</script>";
                                    }
                                    else{
                                        echo "<script>alert('Some error occured while adding product to cart!');</script>"; 
                                    }
                                }
                            }
                           
                        }
                        else{
                            echo "<script>alert('Product is out of stock, please check again!');</script>"; 
                        }
                    }
                    else{
                        echo "<script>alert('Some error occured while checking product stock!');</script>"; 
                    }
        }
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>OneStop - Wishlist</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/wishlist_items.css">
    <link rel="stylesheet" type="text/css" href="../css/wishlist.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->

        <?php
            if(isset($userId)){
                $allWishlistItems = $wishlistOp->displayWishlistItems($userId);
                if(!empty($allWishlistItems)){
        ?>
        <!-- wishlist section -->
        <div class="row wishlist-section">
            <div class="col">
                <div class="wishlist-item-title">
                    Your Wishlist
                </div>
                <div class="clothing-grid-container">
                    <?php 
                         
                         foreach($allWishlistItems as $wishlistItem){
                            $wishlistId = $wishlistItem["wishlist_id"];
                            $prodId = $wishlistItem["product_id"];
                            $prodName = $wishlistItem["product_name"];
                            $prodBrand = $wishlistItem["brand_name"];
                            $prodPhoto = $wishlistItem["product_img"];
                            $prodImg = explode(",",$prodPhoto);
                            $prodPrice = $wishlistItem["product_price"];
                            $prodMrp = $wishlistItem["product_mrp"];
                     ?>
                        <div class="clothing-grid-item">
                            <a href="subproduct.php?id=<?php echo $prodId;?>" target="_blank" class="product-link">
                                <div class="clothing-image">
                                    <img src="../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" />
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        <?php echo $prodBrand;?>
                                    </div>
                                    <div class="product-label">
                                        <?php echo $prodName;?>
                                    </div>
                                    <div class="product-price">
                                        <?php 
                                            if($prodPrice == $prodMrp){ 
                                                echo "$$prodMrp";
                                            }
                                            else{
                                                echo "$$prodPrice <sub class='text-muted'><del>$$prodMrp</del></sub>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </a>
                            <div class="move-to-bag-section">
                                <a href="wishlist.php?wishlistId=<?php echo $wishlistId;?>&prodId=<?php echo $prodId?>" class="move-to-bag-link">
                                    <button type="button" class="move-to-bag-btn">MOVE TO BAG</button>
                                </a>
                            </div>
                            <div class="remove-section">
                                <a href="wishlist.php?wishlistRemId=<?php echo $wishlistId;?>" class="remove-link">
                                    <button type="button" class="remove-btn">REMOVE</button>
                                </a>
                            </div>
                        </div>
                    
                   <?php } ?>
                </div>
            </div>
        </div>
        <!--End of wishlist section-->
        <?php  
                } else{ 
            
             ?>                                   
        <!--Wishlist page when there is no items in wishlist-->
        <div class="row wishlist">
            <div class="wishlist-title">Your Wishlist is empty !</div>
            <div class="wishlist-subtitles">
                Explore more and shortlist some items
            </div>
            <br /><br />
            <div class="wishlist-image">
                <img src="../images/wishlist2.png" alt="Image not found" class="wishlist-img" />
            </div>
            <br /><br />
            <div class="wishlist-button">
                <a href="../index.php"><button type="button" class="btn btn-primary wishlist-btn">Continue Shopping</button></a>
            </div>
        </div>
        <!--End of wishlist page-->
        <?php 
                }
            }
            else{
        ?>
        <!--Wishlist page when there is no items in wishlist-->
        <div class="row wishlist">
            <div class="wishlist-title">Your Wishlist is empty !</div>
            <div class="wishlist-subtitles">
                Explore more and shortlist some items
            </div>
            <br /><br />
            <div class="wishlist-image">
                <img src="../images/wishlist2.png" alt="Image not found" class="wishlist-img" />
            </div>
            <br /><br />
            <div class="wishlist-button">
                <a href="../index.php"><button type="button" class="btn btn-primary wishlist-btn">Continue Shopping</button></a>
            </div>
        </div>
        <!--End of wishlist page-->

        <?php 
                }
        ?>
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
    
</body>

</html>