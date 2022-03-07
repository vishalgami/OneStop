<!DOCTYPE HTML>
<html>
    <head>
        <title>OneStop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/header.js"></script>
        <script src="./js/product.js"></script>
        
<!--        <link rel="stylesheet" type="text/css" href="../css/products.css">-->
    </head>
    <body>
        <div class="container-fluid">
            
            <!--Header-->
<<<<<<< Updated upstream
            <?php 
                include("pages/header.php")
            ?>
=======
            <div class="header">
                <ul class="left-menu" type="none">
                    <li class="logo">
                        <a href="index.php">
                            <img src="images/One1.png" alt="logo not found" title="logo" class="logo-img">
                        </a>
                    </li>
                    <li><a href="pages/men.php" class="header-link">Men</a></li>
                    <li><a href="pages/women.php" class="header-link">Women</a></li>
                    <li><a href="pages/kids.php" class="header-link">Kids</a></li>
                    <li><a href="pages/collections.php" class="header-link">Collections</a></li>
                    <li><a href="pages/new_arrivals.php" class="header-link">New Arrivals</a></li>
                </ul>
                <ul class="search-bar-menu" type="none">
                    <li class="search-bar-li">
                        <form class="search-bar-form">
                            <input type="text" class="search-bar" placeholder="Search for products,brands..." title="">
                            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="right-menu" type="none">
                    <li>
                        <div class="profile-dropdown">
                            <div class="header-icon ">
                                <i class="fa fa-user-o" style="color:darkblue;"></i>
                                <div class="header-icon-label">
                                    Profile
                                    <div class="profile-dropdown-content">
                                        <b>Welcome</b><br/>
                                        <div class="text-muted">Access your account and manage orders</div><br/>
                                        <a href="pages/signin.php">
                                            <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                        </a><br/>
                                        <a href="pages/signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                        <hr/>
                                        <a href="pages/profile.php" class="profile-links">Account</a>
                                        <a href="pages/orders.php" class="profile-links">Orders</a>
                                        <a href="pages/wishlist.php" class="profile-links">Wishlist</a>
                                        <a href="pages/contact.php" class="profile-links">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="pages/wishlist.php" class="header-link">
                            <div class="header-icon ">
                                <div>
                                    <i class="fa fa-heart-o" style="color:deeppink;"></i>
                                    <div class="header-icon-label">
                                        Wishlist
                                     </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="pages/cart.php" class="header-link">
                            <div class="header-icon ">
                                <div>
                                    <i class="fa fa-shopping-bag" style="color:red;"></i>
                                    <div class="header-icon-label">
                                        Bag
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <br/>
>>>>>>> Stashed changes
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
            <div class="row footer">
                <div class="col footer-column">
                    <div class="footer-main-heading">
                        OneStop
                    </div>
                    
                    <div class="footer-content">
                        If you would like to experience the best of online shopping for men, women and kids, you are at the right place. OneStop is the ultimate destination for fashion and lifestyle. It is time to redefine your style statement with our treasure-trove of trendy items.
                    </div>
                </div>
                <div class="col footer-column">
                    <div class="footer-heading">
                        Shop By
                    </div>
                    <br/>
                    <div class="footer-links">
                        <ul type="none">
                            <li><a href="pages/men.php" class="footer-link">Men</a></li>
                            <li><a href="pages/women.php" class="footer-link">Women</a></li>
                            <li><a href="pages/kids.php" class="footer-link">Kids</a></li>
                            <li><a href="pages/collections.php" class="footer-link">Collections</a></li>
                            <li><a href="pages/new_arrivals.php" class="footer-link">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col footer-column">
                    <div class="footer-heading">
                        Useful Links
                    </div>
                    <br/>
                    <div class="footer-links">
                        <ul type="none">
                            <li><a href="pages/profile.php" class="footer-link">Account</a></li>
                            <li><a href="pages/orders.php" class="footer-link">Orders</a></li>
                            <li><a href="pages/wishlist.php" class="footer-link">Wishlist</a></li>
                            <li><a href="pages/cart.php" class="footer-link">Shopping Bag</a></li>
                            <li><a href="pages/contact.php" class="footer-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End of footer-->
        </div>
    </body>
</html>