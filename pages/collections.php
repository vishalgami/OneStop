<html>
    <head>
        <title>OneStop - Collections</title>
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
            <div class="header">
                <ul class="left-menu" type="none">
                    <li class="logo">
                        <a href="../index.php">
                            <img src="../images/One1.png" alt="logo not found" title="logo" class="logo-img">
                        </a>
                    </li>
                    <li><a href="men.php" class="header-link">Men</a></li>
                    <li><a href="women.php" class="header-link">Women</a></li>
                    <li><a href="kids.php" class="header-link">Kids</a></li>
                    <li><a href="collections.php" class="header-link">Collections</a></li>
                    <li><a href="new_arrivals.php" class="header-link">New Arrivals</a></li>
                </ul>
                <ul class="search-bar-menu" type="none">
                    <li>
                        <form>
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
                                        <a href="signin.php">
                                            <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                        </a><br/>
                                        <a href="signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                        <hr/>
                                        <a href="profile.php" class="profile-links">Account</a>
                                        <a href="orders.php" class="profile-links">Orders</a>
                                        <a href="wishlist.php" class="profile-links">Wishlist</a>
                                        <a href="contact.php" class="profile-links">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="wishlist.php" class="header-link">
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
                        <a href="cart.php" class="header-link">
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
            
            <!-- End of header -->
            
            <!--collection section-->
            <div class="row mens">
                <a href="men.php" class="banner">
                    <img src="../images/treasure.jpg" alt="Image not found" class="banner-img"/>
                </a>
                <div class="mens-header">
                    <div class="mens-title" style="text-align: center; padding-top:20px; font-size:30px;">
                        Our Exclusive Collections
                    </div>
                </div>
                
            </div>
            
            <div class="row mens-content">
                
                <div class="collection-title" style="padding-top:20px;font-size:22px; text-align: center;">Women: New in Capsule Collections</div>
                <div class="col-md clothing">
                    <div class="clothing-grid-container">
                        
                        
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/trendyol.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Trendyol
                                    </div>
                                    <div class="product-label">
                                        Sheath Dress with Surplice Neckline
                                    </div>
                                    <div class="product-price">
                                        $70
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/outryt1.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Outryt
                                    </div>
                                    <div class="product-label">
                                        Women High-Rise Mustard Culottes
                                    </div>
                                    <div class="product-price">
                                        $32
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/vera-moda.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Vera Moda
                                    </div>
                                    <div class="product-label">
                                        Fit & Flare Dress with Smocked Sleeve Hems
                                    </div>
                                    <div class="product-price">
                                        $55
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/project-eve.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Project Eve
                                    </div>
                                    <div class="product-label">
                                        Embroidered Top with Neck Tie-Up
                                    </div>
                                    <div class="product-price">
                                        $30
                                    </div>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div> 
                
                <div class="collection-title" style="padding-top:40px;font-size:22px; text-align: center;">Men: New in Capsule Collections</div>
                <div class="col-md clothing">
                    <div class="clothing-grid-container">
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/jack&jones.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        Jack & Jones
                                    </div>
                                    <div class="product-label">
                                        Striped Shirt With Patched Pocket
                                    </div>
                                    <div class="product-price">
                                        $60
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/h&m.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        H & M
                                    </div>
                                    <div class="product-label">
                                        Hooded Sweatshirt
                                    </div>
                                    <div class="product-price">
                                        $30
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/denim.jpg" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        SuperDry
                                    </div>
                                    <div class="product-label">
                                        Resurrection Shirt With Flap Pockets
                                    </div>
                                    <div class="product-price">
                                        $125
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link">
                            <div class="clothing-grid-item">
                                <div class="clothing-image">
                                    <img src="../images/product/ucb2.webp" alt="Image not found" class="product-img"/>
                                </div>
                                <div class="product-info">
                                    <div class="brand-label">
                                        United Colors Of Benetton
                                    </div>
                                    <div class="product-label">
                                        Typography Printed Cotton T-shirt
                                    </div>
                                    <div class="product-price">
                                        $35
                                    </div>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                </div> 
            </div>
            <!--End of collection section-->
            
            <!--footer-->
            <?php include("footer.php");?>
            <!--End of footer-->
        </div>
    </body>
</html>
