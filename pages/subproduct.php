<!DOCTYPE html>
<html>

<head>
    <title>Solid Round Neck T-shirt</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/subproduct.css">
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
                <div class="product-brand">Puma</div>
                <div class="product-title text-muted">Men Black Solid Round Neck T-shirt</div>
                <hr />
                <div class="product-price">$17 <span class="product-subprice text-muted"><del>$25</del></span></div>
                <br />
                <div class="product-size-title">Select Size</div>
                <div class="product-size-main">
                    <span class="product-size">S</span>
                    <span class="product-size">M</span>
                    <span class="product-size">L</span>
                    <span class="product-size">XL</span>
                </div><br /><br>
                <div class="product-size-title">Quantity</div>
                <div class="product-quantity col-sm-3">
                    <select class="form-select">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="product-btn">
                    <a href="cart_items.php"><button type="button" class="product-cart" onclick="addCart()"><i class="fa fa-shopping-bag" style="color:#fff;"></i> ADD TO CART</button></a>
                    <a href="wishlist_items.php"><button type="button" class="product-wishlist" onclick="addList()"> <i class="fa fa-heart-o" style="color:#000;"></i> WISHLIST</button></a>
                </div>
                <hr />
                <div class="product-details">
                    <div class="product-details-title">Product Details</div>
                    <div class="product-description">Black solid T-shirt, has a round neck, and short sleeves</div>
                    <div class="product-details-subtitle">Specifications</div>
                    <div class="specification-details">
                        <ul>
                            <li>Fabric: <span class="specification-info">Cotton</span></li>
                            <li>Fit: <span class="specification-info">Regular Fit</span></li>
                            <li>Occasion: <span class="specification-info">Casual</span></li>
                            <li>Pattern: <span class="specification-info">Solid</span></li>
                            <li>Wash Care: <span class="specification-info">Machine Wash</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
    <script src="../js/product-image.js"></script>
</body>

</html>