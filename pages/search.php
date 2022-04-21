<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    require_once('../includes/templates/SearchOps.php');

	$search = new SearchOps();

    if(isset($_GET["query"])){
       $searchQuery =  $_REQUEST["query"]; 
        $gotCatId = $search->getCatId($searchQuery);
        foreach($gotCatId as $row){
            $catId = $row["cat_id"];
        }

        if(isset($catId)){
            $searchResult = $search->displayProdWithCatId($searchQuery,$catId);
        }else{
            $searchResult = $search->displayProd($searchQuery);
        }
    }
?>
<html>

<head>
    <title>OneStop - Search Results</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/products.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/filter.js"></script>
    <script src="../js/product.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid">

        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->

        <!--products section-->
        <div class="row mens">
            <div class="mens-header">
                <div class="mens-title">
                <?php if(isset($searchResult) && !empty($searchQuery)){
                        if($searchResult){
                            echo "<h2 >Search result(s) for ".strtolower($searchQuery)."</h2>";
                            echo "<div class='underline'></div>";
                        }
                        else{
                            echo "<h2 >No search result found for ".strtolower($searchQuery)."</h2>";
                            echo "<div class='underline'></div>";
                        }
                    }else{
                        echo "<h2 >No search result(s) found!</h2>";
				    	echo "<div class='underline'></div>";
                    }?>
                </div>

            </div>
            
        </div>

            <?php if(isset($searchResult) && !empty($searchQuery)){
                if($searchResult){
                ?>
            <div class="col-md clothing">
                
                <div class="clothing-grid-container">
                    <?php
							foreach($searchResult as $row){
								$prodId = $row["product_id"];
								$prodName = $row["product_name"];
								$prodBrand = $row["brand_name"]; 
								$prodPhoto = $row["product_img"]; 
								$prodImg = explode(",",$prodPhoto);
								$prodPrice = $row["product_price"]; 
								$prodMrp = $row["product_mrp"]; 
                        ?>
                        <a href="subproduct.php?id=<?php echo $prodId;?>" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
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
            <?php 
                    }
                    else{?>
                    <div class="col-md clothing">
                        <br><br>
				    	<h6>Try checking your spelling or use more general terms</h6><br><br>
				    	<h4>Need help?</h4>
							Visit the <a href="contact.php" style="text-decoration:none;">contact us </a>page
                    </div>

                    <?php
                }
            }else{?>
                <div class="col-md clothing">
                        <br><br>
				    	<h6>Try checking your spelling or use more general terms</h6><br><br>
				    	<h4>Need help?</h4>
							Visit the <a href="contact.php" style="text-decoration:none;">contact us </a>page
                </div>
            <?php
                }
            ?>
        </div>
        <!--End of products section-->

        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>