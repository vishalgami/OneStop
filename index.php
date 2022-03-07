<!DOCTYPE HTML>
<html>
    <head>
        <title>OneStop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/header.js"></script>
        <script src="./js/product.js"></script>
        
<!--        <link rel="stylesheet" type="text/css" href="../css/products.css">-->
    </head>
    <body>
        <div class="container-fluid">
            
            <!--Header-->
            <?php 
                include("pages/header.php")
            ?>
            <!-- End of header -->
           
            <!--Banner-->
            <div class="banner">
                <a href="pages/collections.php"><img src="images/5.jpg" alt="Image not found" class="banner-img"></a>
            </div>
            <!--End of banner-->
            
            <!--Trending now section-->
            <div class="row category">
                <h1 class="category-title">Trending Now</h1>
                <div class="category-grid-container">
                    <div class="category-grid-item">
                        <a href="pages/women.php" class="category-link">
                            <img src="images/Adventure.jpg" alt="" title="" class="category-img"/>
                            <div class="category-label">
                                Winter Wear
                            </div> 
                        </a>
                    </div>
                    <div class="category-grid-item">
                        <a href="pages/men.php" class="category-link">
                            <img src="images/western3.jpg" alt="" title="" class="category-img"/>
                            <div class="category-label">
                                Western Wear
                            </div>    
                        </a>
                    </div>
                    <div class="category-grid-item">
                        <a href="pages/women.php" class="category-link">
                            <img src="images/festive.jpg" alt="" title="" class="category-img"/>
                            <div class="category-label">
                                Festive Wear
                            </div>  
                        </a>
                    </div>
                    
                    <div class="category-grid-item">
                        <a href="pages/men.php" class="category-link">
                            <img src="images/ethnic.jpg" alt="" title="" class="category-img"/>
                            <div class="category-label">
                                Ethnic Wear
                            </div>  
                        </a>
                    </div>
                    <div class="category-grid-item">
                        <a href="pages/women.php" class="category-link">
                            <img src="images/sports3.jpg" alt="" title="" class="category-img"/>
                            <div class="category-label">
                                Sports Wear
                            </div> 
                        </a>
                    </div>
                    
                </div>    
            </div>
            <!--End of Trending now section-->
            
            <!-- Products section-->
            <div class="mens-title" style="text-align: center; padding-top:20px; font-size:35px;">
                Experience the style
            </div>
            
            <div class="row mens-content" style="border:none;">
                
                <div class="collection-title" style="padding-top:20px;font-size:22px; text-align: center;">Men</div>
                <div class="col-md clothing">
                    <div class="clothing-grid-container">
                        
                        
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/teamspirit.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Teamspirit
                                    </div>
                                    <div class="product-label">
                                        Heathered Crew-Neck T-shirt
                                    </div>
                                    <div class="product-price">
                                        $10
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/antony.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Antony Morato
                                    </div>
                                    <div class="product-label">
                                        Abstract Print Crew-Neck T-shirt
                                    </div>
                                    <div class="product-price">
                                        $60
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/johnplayers.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        John Players Jeans
                                    </div>
                                    <div class="product-label">
                                        Washed Slim Fit Shirt
                                    </div>
                                    <div class="product-price">
                                        $30
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/levis1.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Levis
                                    </div>
                                    <div class="product-label">
                                        Textured Shirt with Patch Pocket
                                    </div>
                                    <div class="product-price">
                                        $45
                                    </div>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div> 
                
                
                <!-- Banner -->
                <div class="banner">
                    <a href="pages/new_arrivals.php"><img src="images/1.jpg" alt="Image not found" class="banner-img" style="margin-top:20px; margin-bottom: 30px;"></a>
                </div>
                <!--End of banner-->
                
                <div class="collection-title" style="padding-top:40px;font-size:22px; text-align: center;">Women</div>
                <div class="col-md clothing">
                    <div class="clothing-grid-container">
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/fig.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Fig
                                    </div>
                                    <div class="product-label">
                                        Round-Neck Top with Ribbed Hems 
                                    </div>
                                    <div class="product-price">
                                        $15
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/kipex.jpg" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Kipex
                                    </div>
                                    <div class="product-label">
                                        Floral Print Top
                                    </div>
                                    <div class="product-price">
                                        $28
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/woowzerz.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Woowzerz
                                    </div>
                                    <div class="product-label">
                                        Slim Fit Peplum Top
                                    </div>
                                    <div class="product-price">
                                        $30
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="pages/subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="images/product/u&f.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        U & F
                                    </div>
                                    <div class="product-label">
                                        A-line Top with Puff Sleeves
                                    </div>
                                    <div class="product-price">
                                        $25
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
            <!-- End of products section-->
            
            
            
            <!--footer-->
            <?php include("pages/footer.php");?>
            <!--End of footer-->
        </div>
    </body>
</html>