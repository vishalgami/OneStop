<html>
    <head>
        <title>OneStop - Signin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/signin.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
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
            <?php include("footer.php");?>
            <!--End of footer-->
        </div>
    </body>
</html>
