<!DOCTYPE html>
<html>
    <head>
        <title>OneStop - Wishlist</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/wishlist_items.css">
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
            
            <!-- wishlist section -->
            <div class="row wishlist-section">
                <div class="col">
                    <div class="wishlist-item-title">
                        Your Wishlist
                    </div>
                    
                    <div class="clothing-grid-container">
                        
                            <div class="clothing-grid-item">
                                <a href="subproduct.php" target="_blank" class="product-link">
                                    <div class="clothing-image">
                                        <img src="../images/product/puma.webp" alt="Image not found" class="product-img"/>
                                    </div>
                                    <div class="product-info">
                                        <div class="brand-label">
                                            Puma
                                        </div>
                                        <div class="product-label">
                                            Solid Round Neck T-shirt
                                        </div>
                                        <div class="product-price">
                                            $17 <sub class="text-muted"><del>$25</del></sub>
                                        </div>
                                    </div>
                                </a>
                                <div class="move-to-bag-section">
                                    <a href="cart_items.php" class="move-to-bag-link">
                                        <button type="button" class="move-to-bag-btn" onclick="addCart()">MOVE TO BAG</button>
                                    </a>
                                </div>
                            </div>
                        
                        
                        
                            <div class="clothing-grid-item">
                                <a href="subproduct.php" target="_blank" class="product-link">
                                    <div class="clothing-image">
                                        <img src="../images/product/antony.webp" alt="Image not found" class="product-img"/>
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
                                </a>
                                <div class="move-to-bag-section">
                                    <a href="cart_items.php" class="move-to-bag-link">
                                        <button type="button" class="move-to-bag-btn" onclick="addCart()">MOVE TO BAG</button>
                                    </a>
                                </div>
                            </div>
                        
                        
                            <div class="clothing-grid-item">
                                <a href="subproduct.php" target="_blank" class="product-link">
                                    <div class="clothing-image">
                                        <img src="../images/product/johnplayers.webp" alt="Image not found" class="product-img"/>
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
                                </a>
                                <div class="move-to-bag-section">
                                    <a href="cart_items.php" class="move-to-bag-link">
                                        <button type="button" class="move-to-bag-btn" onclick="addCart()">MOVE TO BAG</button>
                                    </a>
                                </div>
                            </div>
                            
                     
                        
                        
                            <div class="clothing-grid-item">
                                <a href="subproduct.php" target="_blank" class="product-link">
                                    <div class="clothing-image">
                                        <img src="../images/product/levis1.webp" alt="Image not found" class="product-img"/>
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
                                </a>
                                <div class="move-to-bag-section">
                                    <a href="cart_items.php" class="move-to-bag-link">
                                        <button type="button" class="move-to-bag-btn" onclick="addCart()">MOVE TO BAG</button>
                                    </a>
                                </div>
                            </div>
                     
                    
          
                            <div class="clothing-grid-item">
                                <a href="subproduct.php" target="_blank" class="product-link">
                                    <div class="clothing-image">
                                        <img src="../images/product/teamspirit.webp" alt="Image not found" class="product-img"/>
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
                                </a>
                                  <div class="move-to-bag-section">
                                    <a href="cart_items.php" class="move-to-bag-link">
                                        <button type="button" class="move-to-bag-btn" onclick="addCart()">MOVE TO BAG</button>
                                    </a>
                                </div>
                            </div>
                       
                       
                    </div>
                </div>
            </div>
            <!--End of wishlist section-->
            <!--footer-->
            <?php include("footer.php");?>
            <!--End of footer-->
            
        </div>
        <script>
            function addCart(){
                alert("Product successfully added to the cart.");      
            }
        </script>
    </body>  
</html>