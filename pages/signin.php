<html>
    <head>
        <title>OneStop - Signin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/signin.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/signin-validation.js"></script>
        <script src="../js/header.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            
            <!--Header-->
            <?php 
                include("header.php")
            ?>
            <!-- End of header -->
            
            <!--Signin form-->
            <div class="row signin">
                <h5 style="text-align:right; padding-right:30px;"><a href="admin/index.php">Go to Admin Panel</a></h5>
                <div class="col-lg-4 col-md-4 col-sm-2 form-container">
                    <h2 style="text-align: center;">Sign in</h2>
                    <hr/>
                    <br/>
                    <form class="form-box" method="post" action="../index.php" id="signinForm">
                    
                        <div class="form-group">
                            <label class="required-field">Email / Mobile Number</label><span id="notify"></span>
                            <input type="text" class="form-control input-lg" id="email" required/><br/>
                        </div>
                        <div class="form-group">
                            <label class="required-field">Password</label><span id="notify"></span>
                            <input type="password" class="form-control input-lg" id="password" required/><br/>
                        </div>
                       
                        <br/>
                        <div class="form-group">
                            <input type="button" class="form-control btn btn-danger" value="Sign In" id="signinBtn"/>
                        </div>

                    </form>
                    <div><a href="signup.php">Don't have an account? Sign Up!</a></div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <img src="../images/shopping1.jpg" alt="Image not found" class="signin-img">
                </div>
            </div>
            <!--End of Signin form-->
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
            <!--End of footer-->
        </div>
    </body>
</html>
