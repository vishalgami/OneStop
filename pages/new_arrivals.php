<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    require_once('../includes/templates/ProductOps.php');

	$prod = new ProductOps();

?>
<html>
<head>
    <title>OneStop - New Arrivals</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/products.css">
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
        <!--collection section-->
        <div class="row mens">
            <a href="women.php" class="fade banner">
                <img src="../images/classic.webp" alt="Image not found" class="banner-img" />
            </a>
            <div class="fade mens-header">
                <div class="mens-title" style="text-align: center; padding-top:20px; font-size:30px;">
                    Latest collections from all the brands are here
                </div>
            </div>
        </div>
        <div class="row mens-content">
            <div class="collection-title" style="padding-top:20px;font-size:22px; text-align: center;">Men</div>
            <div class="col-md clothing-home">
                <div class="clothing-grid-container">
                <?php
                        $data = $prod->displayNewProd(2);
							foreach($data as $row){
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
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <a href="women.php" class="fade banner">
                <img src="../images/offers.webp" alt="Image not found" class="banner-img" style="margin-top:20px;" />
            </a>
            <div class="collection-title" style="padding-top:40px;font-size:22px; text-align: center;">Women</div>
            <div class="col-md clothing">
                <div class="clothing-grid-container">
                <?php
                        $data = $prod->displayNewProd(1);
							foreach($data as $row){
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
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--End of collection section-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>