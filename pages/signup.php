<?php
    require('../includes/templates/auth.php');
    $register = new Auth(); 

    //----Signup Form----
    $usernameErr = $emailErr = $pwdErr = $confpwdErr = $mobErr = $dobErr = "";

    //filter data
    function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
   //Validation
       if(empty($_POST["username"])){

           $usernameErr = "Username is required!";
       }
       else {
           $username = test_input($_POST["username"]);
           
       }

       if(empty($_POST["email"])){
           $emailErr = "Email is required!";
       }
       else {

           $email = test_input($_POST["email"]);
           
       }

       if(empty($_POST["password"])){
            $pwdErr = "Password is required!";
        }
        else {
            $password = test_input($_POST["password"]);
            if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password)){
                $pwdErr = "Password requires at least 8 characters and atleast one uppercase letter";
            }
            else{
                $pwd = $password;
            }
        }

        if(empty($_POST["confirmPassword"])){
            $confpwdErr = "Confirm Password is required!";
        }
        else {
            $confpwd = test_input($_POST["confirmPassword"]);
        }

       if(empty($_POST["mobile"])){
           $mobErr = "Mobile number is required!";
       }
       else {
           $mob = test_input($_POST["mobile"]);
       }

       if(empty($_POST["dob"])){
           $dobErr = "DOB is required!";
       }
       else {
           $dob = test_input($_POST["dob"]);
       }

   if(isset($username) && isset($email) && isset($pwd)  && isset($confpwd) &&  isset($mob) && isset($dob)){
       
       //Register new user
       if($pwd == $confpwd){  
            $emailStatus = $register->checkUser($email);  
            if(!$emailStatus){  
                $register->userRegister($username,$email,$pwd,$mob,$dob); 
                if($register){  
                    echo "<script>alert('Signup Successful');window.location.href='./signin.php';</script>";  
                }else{  
                    echo "<script>alert('Signup Not Successful, try again!')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
        echo "<script>alert('Password Does Not Match')</script>";  
      
        }
       


   }
}
//End of code for Signup Form

?>
<html>

<head>
    <title>OneStop - Signup</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
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
        <!--Signup form-->
        <div class="row signup">
            <div class="col-lg-6 col-md-6 col-sm-2">
                <img src="../images/shopping.jpg" alt="Image not found" class="signup-img">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-2 form-container">
                <h2 style="text-align: center;">Connect with us</h2>
                <hr />
                <br />
                <form class="form-box" id="signupForm" method="post" action="">
                    <div class="form-group">
                        <label class="required-field">Username</label><span id="notify"></span>
                        <span class="error"><?php echo $usernameErr;?></span><br>
                        <input type="text" class="form-control input-lg" id="username" name="username"/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Email</label><span id="notify"></span>
                        <span class="error"><?php echo $emailErr;?></span><br>
                        <input type="email" class="form-control input-lg" id="email" name="email"/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Create a password</label><span id="notify"></span>
                        <span class="error"><?php echo $pwdErr;?></span><br>
                        <input type="password" class="form-control input-lg" id="password" name="password"/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Confirm password</label><span id="notify"></span>
                        <span class="error"><?php echo $confpwdErr;?></span><br>
                        <input type="password" class="form-control input-lg" id="password" name="confirmPassword"/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Mobile Number</label><span id="notify"></span>
                        <span class="error"><?php echo $mobErr;?></span><br>
                        <input type="number" class="form-control input-lg" id="mobile" name="mobile"/>
                    </div>
                    <div class="form-group">
                        <label class="required-field">Date of birth</label><span id="notify"></span>
                        <span class="error"><?php echo $dobErr;?></span><br>
                        <input type="date" class="form-control input-lg" id="dob" name="dob"/>
                    </div>
                    <br />
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-danger" id="signupBtn" name="signup" value="Sign Up" />
                    </div>
                </form>
                <div><a href="signin.php">Already have an account? Sign In!</a></div>
            </div>
        </div>
        <!--End of Signup form-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>