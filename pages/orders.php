<html>
    <head>
        <title>OneStop - Orders</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/orders.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/header.js"></script>
    </head>
    <body>
        <div class="container-fluid main-container">
            
            <!--Header-->
            <?php 
                include("header.php")
            ?>
            <!-- End of header -->
            
            <!--Orders page when there's no orders placed-->
            <div class="row orders">
                <div class="orders-title">You haven't placed any order yet !</div>
                <div class="orders-subtitles">
                    Order section is empty. After placing order, you can manage them from here!
                </div>
                <br/><br/>
                <div class="orders-image">
                    <img src="../images/orders3.webp" alt="Image not found" class="orders-img"/>
                </div>
                <br/><br/>
                <div class="orders-button">
                    <a href="../index.php"><button type="button" class="btn btn-danger orders-btn">Start shopping</button></a>
                </div>
            </div>
            <!--End of orders page-->
            <!--footer-->
            <div class="footer-parent">
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
                                <li><a href="men.php" class="footer-link">Men</a></li>
                                <li><a href="women.php" class="footer-link">Women</a></li>
                                <li><a href="kids.php" class="footer-link">Kids</a></li>
                                <li><a href="collections.php" class="footer-link">Collections</a></li>
                                <li><a href="new_arrivals.php" class="footer-link">New Arrivals</a></li>
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
                                <li><a href="profile.php" class="footer-link">Account</a></li>
                                <li><a href="orders.php" class="footer-link">Orders</a></li>
                                <li><a href="wishlist.php" class="footer-link">Wishlist</a></li>
                                <li><a href="cart.php" class="footer-link">Shopping Bag</a></li>
                                <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of footer-->
        </div>
    </body>
</html>
