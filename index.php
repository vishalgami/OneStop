<?php
   if(!isset($_SESSION)){
        session_start();
    }

    require_once('./includes/templates/ProductOps.php');

	$prod = new ProductOps();
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>OneStop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/product.js"></script>
    <link rel="icon" type="img/ico" href="images/One1.ico">
</head>

<body>
    <div class="container-fluid">
        <!-- start of header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                    <img src="images/One1.png" height="15" alt="logo not found" title="logo" class="logo-img" loading="lazy" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/men.php">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/women.php">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/kids.php">Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/collections.php">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/new_arrivals.php">New Arrivals</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <ul class="right-menu" type="none">
                            <li>
                                <div class="profile-dropdown">
                                    <div class="header-icon">
                                        <i class="fa fa-user-o " style="color:darkblue;"></i>
                                        <div class="header-icon-label">
                                            Profile
                                            <?php 
                                                if(!isset($_SESSION["login"])){?>
                                                <div class="profile-dropdown-content">
                                                    <b>Welcome</b><br />
                                                    <div class="text-muted">Access your account and manage orders</div><br />
                                                    <a href="pages/signin.php">
                                                        <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                                    </a><br />
                                                    <a href="pages/signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                                    <hr />
                                                    
                                                    <a href="pages/contact.php" class="profile-links">Contact Us</a>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="profile-dropdown-content">
                                                    <b>Hi,<span class="username"><?php echo $_SESSION["username"];?></span></b><br />
                                                    <a href="pages/profile.php" class="profile-links">Account</a>
                                                    <a href="pages/orders.php" class="profile-links">Orders</a>
                                                    <a href="pages/wishlist.php" class="profile-links">Wishlist</a>
                                                    <a href="pages/contact.php" class="profile-links">Contact Us</a>
                                                    <hr />
                                                    <a href="./includes/templates/logout.php">
                                                        <button type="button" class="btn btn-danger login-btn">Log Out</button>
                                                    </a>
                                                </div>
                                            <?php } ?>
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
                </div>
                <div class="justify-content-center search" id="navbarCenteredExample">
                    <form class="d-flex input-group w-auto" action="./pages/search.php" method="get">
                        <input type="search" name="query" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <button type="submit" class="input-group-text border-0"><i class="fa fa-search"></i></button>
                        </span>
                    </form>
                </div>
            </div>
        </nav>
        <br />
        <!-- End of header -->
        <!--Banner-->
        <div class="banner">
            <a href="pages/collections.php"><img src="images/5.jpg" alt="Image not found" class="banner-img"></a>
        </div>
        <!--End of banner-->
        <!--Trending now section-->
        <div class="row fade category">
            <h1 class="category-title">Trending Now</h1>
            <div class="category-grid-container">
                <div class="category-grid-item">
                    <a href="pages/women.php" class="category-link">
                        <img src="images/Adventure.jpg" alt="" title="" class="category-img" />
                        <div class="category-label">
                            Winter Wear
                        </div>
                    </a>
                </div>
                <div class="category-grid-item">
                    <a href="pages/men.php" class="category-link">
                        <img src="images/western3.jpg" alt="" title="" class="category-img" />
                        <div class="category-label">
                            Western Wear
                        </div>
                    </a>
                </div>
                <div class="category-grid-item">
                    <a href="pages/women.php" class="category-link">
                        <img src="images/festive.jpg" alt="" title="" class="category-img" />
                        <div class="category-label">
                            Festive Wear
                        </div>
                    </a>
                </div>
                <div class="category-grid-item">
                    <a href="pages/men.php" class="category-link">
                        <img src="images/ethnic.jpg" alt="" title="" class="category-img" />
                        <div class="category-label">
                            Ethnic Wear
                        </div>
                    </a>
                </div>
                <div class="category-grid-item">
                    <a href="pages/women.php" class="category-link">
                        <img src="images/sports3.jpg" alt="" title="" class="category-img" />
                        <div class="category-label">
                            Sports Wear
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End of Trending now section-->
        <!-- Products section-->
        <div class="fade mens-title" style="text-align: center; padding-top:20px; font-size:35px;">
            Experience the style
        </div>
        <div class="row mens-content" style="border:none;">
            <div class="fade collection-title" style="padding-top:20px;font-size:22px; text-align: center;">Men</div>
            <div class=" col-md clothing-home">
                <div class="clothing-grid-container">
                <?php
                        $getSimilarData = $prod->displaySomeProd(2);
							foreach($getSimilarData as $row){
								$prodId = $row["product_id"];
								$prodName = $row["product_name"];
								$prodBrand = $row["brand_name"]; 
								$prodPhoto = $row["product_img"]; 
								$prodImg = explode(",",$prodPhoto);
								$prodPrice = $row["product_price"]; 
								$prodMrp = $row["product_mrp"]; 
                        ?>
                    <a href="pages/subproduct.php?id=<?php echo $prodId;?>" target="_blank" class="product-link">
                        <div class="fade clothing-grid-item">
                            <div class="clothing-image">
                                <img src="./images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    <?php echo $prodBrand;?>
                                </div>
                                <div class="product-label">
                                    <?php echo $prodName;?>
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
            <!-- Banner -->
            <div class="fade banner">
                <a href="pages/new_arrivals.php"><img src="images/1.jpg" alt="Image not found" class="banner-img" style="margin-top:20px; margin-bottom: 30px;"></a>
            </div>
            <!--End of banner-->
            <div class="fade collection-title" style="padding-top:40px;font-size:22px; text-align: center;">Women</div>
            <div class="col-md clothing-home">
                <div class="clothing-grid-container">
                <?php
                        $getSimilarData = $prod->displaySomeProd(1);
							foreach($getSimilarData as $row){
								$prodId = $row["product_id"];
								$prodName = $row["product_name"];
								$prodBrand = $row["brand_name"]; 
								$prodPhoto = $row["product_img"]; 
								$prodImg = explode(",",$prodPhoto);
								$prodPrice = $row["product_price"]; 
								$prodMrp = $row["product_mrp"]; 
                        ?>
                    <a href="pages/subproduct.php?id=<?php echo $prodId;?>" target="_blank" class="product-link">
                        <div class="fade clothing-grid-item">
                            <div class="clothing-image">
                                <img src="./images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    <?php echo $prodBrand;?>
                                </div>
                                <div class="product-label">
                                    <?php echo $prodName;?>
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
                <br />
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
                <br />
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