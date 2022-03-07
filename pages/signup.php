<html>
    <head>
        <title>OneStop - Signup</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/header.js"></script>
        <script src="../js/signup-validation.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            
            <!--Header-->
            <?php 
                include("header.php")
            ?>
            <!-- End of header -->
            
            <!--Signup form-->
            <div class="row signup">
                <div class="col-lg-6 col-md-6 col-sm-2">
                    <img src="../images/shopping.jpg" alt="Image not found" class="signup-img">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-2 form-container">
                    <h2 style="text-align: center;">Connect with us</h2>
                    <hr/>
                    <br/>
                    <form class="form-box" id="signupForm" method="post" action="./signin.php" >
                        <div class="form-group">
                            <label class="required-field">Username</label><span id="notify"></span>
                            <input type="text" class="form-control input-lg" id="username" /><br/>
                        </div>
                        <div class="form-group">
                            <label class="required-field">Email</label><span id="notify"></span>
                            <input type="email" class="form-control input-lg" id="email"/><br/>
                        </div>
                        <div class="form-group">
                            <label class="required-field">Create a password</label><span id="notify"></span>
                            <input type="password" class="form-control input-lg" id="password" /><br/>
                        </div>
                        <div class="form-group">
                            <label class="required-field">Mobile Number</label><span id="notify"></span>
                            <input type="number" class="form-control input-lg" id="mobile" />
                        </div>
                        <div class="form-group">
                            <label class="required-field">Date of birth</label><span id="notify"></span>
                            <input type="date" class="form-control input-lg" id="dob" />
                        </div>
                        <br/>
                        <div class="form-group">
                            <input type="button" class="form-control btn btn-danger" id="signupBtn" value="Sign Up"/>
                        </div>

                    </form>
                    <div><a href="signin.php">Already have an account? Sign In!</a></div>
                </div>
            </div>
            <!--End of Signup form-->
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
