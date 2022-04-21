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
    
    //Get the product details using its id which is in url query
    if(isset($_GET["id"])){
        $prodId = $_GET["id"];
    
                                $data = $prod->getProduct($prodId);
                                foreach($data as $row){
                                    $productId = $row["product_id"];
                                    $productName = $row["product_name"]; 
                                    $categId = $row["cat_id"]; 
                                    $categName = $prod->getCategory($categId);
                                    foreach($categName as $cat){
                                        $productCat = $cat["cat_name"];
                                    }
                                    $subCategId = $row["sub_cat_id"]; 
                                    $subCategName = $prod->getSubCategory($subCategId);
                                    foreach($subCategName as $subCat){
                                        $productSubCat = $subCat["sub_cat_name"];
                                    }
                                    $productBrand = $row["brand_name"]; 
                                    $productPhoto = $row["product_img"]; 
                                    $prodImg = explode(",",$productPhoto);
                                    // if($prodImg){
                                    //     $_SESSION['sub_product_image']=$prodImg;
                                    // }
                                    $productDesc = $row["product_details"]; 
                                    $productStock = $row["product_stock"]; 
                                    $productPrice = $row["product_price"]; 
                                    $productMrp = $row["product_mrp"]; 
                                    $productFabric = $row["fabric"]; 
                                    $productFit= $row["fit"]; 
                                    $productSize = $row["size"]; 
                                    $productOccasion = $row["occasion"]; 
                                    $productPattern = $row["pattern"]; 
                                    $productWash = $row["washcare"]; 
                                    
                                }
    }
    
    //Add product to cart 
    if(isset($_POST["addToCart"])){
        $pId = $_POST["pId"];
        $pQty = $_POST["qty"];

        $checkedProductInCart = $cartOp->checkProductInCart($userId,$pId);

        //check if product is in cart if yes update product quantity else add it to cart
        if($checkedProductInCart){
            foreach($checkedProductInCart as $row){
                $prevProdQty = $row["product_quantity"];
                $cartId = $row["cart_id"];
            }
            $newProdQty = $prevProdQty + $pQty;
            $updatedProductQtyInCart = $cartOp->updateQuantity($userId,$cartId,$newProdQty);
            if($updatedProductQtyInCart ){
                 echo "<script>alert('Product is already in cart, successfully updated product quantity in cart');window.location.href='cart.php';</script>";
            }
            else{
                echo "<script>alert('Some error occured while updating product quantity in cart!');</script>"; 
            }
        }
        else{
            $AddedproductToCart = $cartOp->addToCart($userId,$pId,$pQty);
            if($AddedproductToCart){
                echo "<script>alert('Successfully added product to cart');window.location.href='cart.php';</script>";
            }
            else{
                echo "<script>alert('Some error occured while adding product to cart!');</script>"; 
            }
        }
    }
    
    // if(isset($_POST["size"])){
    //     $size = $_POST["size"];
    //     echo "<script>alert('SizeValue: ".$size."');</script>";
    //     // $FetchedQtyBySize = $cartOp->getQtyBySize($pId,$size);
    // }

    //Add product to wishlist
    if(isset($_POST["addToWishlist"])){
        $pId = $_POST["pId"];

        $checkedProductInWishlist = $wishlistOp->checkProductInWishlist($userId,$pId);

        //check if product is in wishlist if yes display message else add it to wishlist
        if($checkedProductInWishlist){
                 echo "<script>alert('Product is already in wishlist');window.location.href='wishlist.php';</script>";
        }
        else{
            $addedProductInWishlist = $wishlistOp->addToWishlist($userId,$pId);
            if($addedProductInWishlist){
                echo "<script>alert('Successfully added product to wishlist');window.location.href='wishlist.php';</script>";
            }
            else{
                echo "<script>alert('Some error occured while adding product to wishlist!');</script>"; 
            }
        }


    }

?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $productName;?></title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/subproduct.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/product.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->
        <!-- Product details section -->
        <div class="row product-main-section">
            <div class="col-lg-2 product-list">
                <!-- Image list-->
                <div class="image-list-section">
                    <div id="image-list"></div>
                </div>
                <!--End of Image list-->
            </div>
            <div class="col-lg-4 product-image-slider">
                <!--Main image preview section-->
                <div id="main-img"></div>
                <div class="navigation-button">
                    <button class="leftBtn" onclick="left()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
                    <button class="rightBtn" onclick="right()"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </div>
                <!-- End of Main image preview section-->
            </div>
            <div class="col-lg-4 product-details-section">
                <form method="post" action="">
                <div class="product-brand"><?php echo $productBrand;?></div>
                <div class="product-title text-muted"><?php echo $productName;?></div>
                <hr />
                <div class="product-price">$<?php echo $productPrice;?> <span class="product-subprice text-muted"><del>$<?php echo $productMrp;?></del></span></div>
                <br />
                <div class="product-size-title">Select Size</div>
                <div class="product-size-main">
                    <input type="button" id="size" name="size" class="product-size" onClick="selectSize(this)" value="S">
                    <input type="button" id="size" name="size" class="product-size" onClick="selectSize(this)" value="M">
                    <input type="button" id="size" name="size" class="product-size" onClick="selectSize(this)" value="L">
                    <input type="button" id="size" name="size" class="product-size" onClick="selectSize(this)" value="XL">
                </div><br /><br>
                <div class="product-size-title">Quantity</div>
                <div class="product-quantity col-sm-3">
                    <select name='qty' class="form-select">
                        <?php if(isset($productStock)){
                            if($productStock !=0){
                        ?>
                        <option value="" disabled>Quantity</option>
                        <?php 

                            $quant=1;
                            if($productStock > 10){
                                for($idx=1;$idx<=$productStock;$idx++){
                                    if($quant == 11){
                                        break;
                                    }else{
                                        if($quant == 1){
                                            echo "<option value='$quant' selected>$quant</option>";
                                        }else{
                                            echo "<option value='$quant'>$quant</option>";
                                        }
                                        $quant +=1;
                                    }
                                }
                            }
                            else{
                                for($idx=1;$idx<=$productStock;$idx++){
                                    if($quant == 1){
                                        echo "<option value='$quant' selected>$quant</option>";
                                    }else{
                                        echo "<option value='$quant'>$quant</option>";
                                    }
                                    $quant +=1;
                                }
                            }
                        }
                        else{?>
                            <option value="" disabled selected>Quantity</option>
                       <?php 
                       }
                        ?>
                    </select>
                </div>
                <?php if(!isset($_SESSION["login"])){
                    if($productStock !=0){?>
                        <div class="product-btn">
                            <a href="signin.php"><button type="button" class="product-cart disabled" ><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO BAG</button></a>
                            <a href="signin.php"><button type="button" class="product-wishlist disabled"> <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button></a>
                        </div>
                        <?php }else{?>
                            <div class="product-btn">
                                <a href="signin.php"><button type="button" class="product-cart disabled" ><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO BAG</button></a>
                                <a href="signin.php"><button type="button" class="product-wishlist disabled"> <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button></a>
                            </div><br><br>

                            <strong><span class="out">Item Sold Out!</span></strong>
                        <?php }?>

                <?php 
                }else{
                    if($productStock !=0){
                    ?>
                <div class="product-btn">
                    <input type="hidden" name="pId" value="<?php echo $productId?>">
                    <button type="submit" name="addToCart" class="product-cart" ><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO BAG</button>
                    <button type="submit" name="addToWishlist" class="product-wishlist"> <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button>
                </div>
                <?php } else{?>
                    <div class="product-btn">
                    <input type="hidden" name="pId" value="<?php echo $productId?>">
                    <button type="button"  class="product-cart disabled"  disabled><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO BAG</button>
                    <button type="submit" name="addToWishlist" class="product-wishlist" > <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button>
                    </div><br><br>
                    <strong><span class="out">Item Sold Out!</span></strong>
                   <?php }
                }
            }
                ?>
                <hr />
                <div class="product-details">
                    <div class="product-details-title">Product Details</div>
                    <div class="product-description"><?php echo $productDesc;?></div>
                    <div class="product-details-subtitle">Specifications</div>
                    <div class="specification-details">
                        <ul>
                            <li>Fabric: <span class="specification-info"><?php echo $productFabric;?></span></li>
                            <li>Fit: <span class="specification-info"><?php echo $productFit;?></span></li>
                            <li>Occasion: <span class="specification-info"><?php echo $productOccasion;?></span></li>
                            <li>Pattern: <span class="specification-info"><?php echo $productPattern;?></span></li>
                            <li>Wash Care: <span class="specification-info"><?php echo $productWash;?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
             <!-- Similar Products section-->
             <?php 
             
                $getSimilarData = $prod->getSimilarProd($productId,$categId,$subCategId);
                if($getSimilarData){

             ?>
        <div class="fade mens-title" style="text-align: center; padding-top:20px; font-size:35px;">
            Similar products
        </div>
        <div class="row mens-content" style="border:none;">
            <div class="collection-title" style="padding-top:20px;font-size:22px; text-align: center;"><?php echo $productSubCat;?></div>
            <div class="col-md clothing">
                <div class="clothing-grid-container">
                <?php
							foreach($getSimilarData as $row){
								$prodId = $row["product_id"];
								$prodName = $row["product_name"];
								$prodBrand = $row["brand_name"]; 
								$prodPhoto = $row["product_img"]; 
								$prodImg = explode(",",$prodPhoto);
								$prodPrice = $row["product_price"]; 
								$prodMrp = $row["product_mrp"]; 
								
                        ?>
                    <a href="subproduct.php?id=<?php echo $prodId;?>" target="_blank" class="product-link">
                        <div class="fade clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    <?php echo $prodBrand;?>
                                </div>
                                <div class="product-label">
                                    <?php echo ucwords(strtolower($prodName));?>
                                </div>
                                <div class="product-price">
                                    $<?php echo $prodPrice;?> <sub class="text-muted"><del>$<?php echo $prodMrp;?></del></sub>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                   
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- ./Similar Products section-->
    </div>

    <!--footer-->
    <?php include("footer.php"); ?>
        <!--End of footer-->
    <script type="text/javascript">
        var productImg = "<?= $productPhoto ?>";
        var productBrand = "<?= $productBrand ?>";
    </script>
    <script  type="text/javascript" src="../js/product-image.js"></script> 
    <script type="text/javascript">
        var selectedSize = document.getElementById("size");
        function selectSize(size){
                    
                    // size.classList.add('product-selected-size');
                    // size.classList.remove('product-size');

                    var selectedSize = document.getElementsByClassName("product-size");
                    // if ( size.classList.contains('product-selected-size') ){
                    //    size.classList.toggle('product-size');
                    // }
                    var sizeValue = size.value;

                    // alert("Size: " + sizeValue );
                    

                    
                        size.classList.add('product-selected-size');
                        size.classList.remove('product-size');

                    // for (var i=0;i<selectedSize.length;i++) {

                    //     selectedSize[i].classList.add('product-selected-size');
                    //     selectedSize[i].classList.remove('product-size');
                    //         if(selectedSize[i].classList.contains('product-selected-size') ){
                    //             selectedSize[i].classList.toggle('product-size');
                    //         }
                        
                        
                    // }

        }
    </script>
</body>

</html>