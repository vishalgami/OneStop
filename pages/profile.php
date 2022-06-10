<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION["user_id"])){
            $userId = $_SESSION["user_id"];
        }
    }

    require_once('../includes/templates/ProfileOps.php');

	$profileOp = new ProfileOps();

	$profileData = $profileOp -> displayProfile($userId);

    if(isset($profileData)){
		foreach($profileData as $row){
			$username = $row["username"];
			$email = $row["email"];
			$currentPwd = $row["password"];
			$mob = $row["mobile"];
			$dob = $row["dob"];
		}
    }
	
    //----Signup Form----
    $pwdErr = $newPwdErr = "";

    //filter data
    function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

    if(isset($_POST["updateProfile"])){

        $newUsername = $_POST["username"];
        $newMob = $_POST["mobile"];
        $newDob = $_POST["dob"];
        
        
        if(empty($_POST["currentPwd"])){
            // $pwdErr = "Current Password is required!";
        }
        else {
            if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",test_input($_POST["currentPwd"]))){
                $pwdErr = "Current password requires at least 8 characters and atleast one uppercase letter";
                echo "<script>alert('$pwdErr');window.location.href='./profile.php';</script>";  
            }
            else{
                $password = test_input($_POST["currentPwd"]);
                $pwd = $password;
                $pwd = md5($pwd);
            }
        }

        if(empty($_POST["newPwd"])){
            // $newPwdErr = "Confirm Password is required!";
            
        }
        else {
            if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",test_input($_POST["newPwd"]))){
                $newPwdErr = "New password requires at least 8 characters and atleast one uppercase letter";
                echo "<script>alert('$newPwdErr');window.location.href='./profile.php';</script>";  
            }else{
                $newPwd = test_input($_POST["newPwd"]);
                $newPwd = md5($newPwd);
            }
        }
        // echo "DB Pwd:".$currentPwd;
        // echo "New: ".$newPwd;
        // echo "Current:".$pwd;
        if(isset($newPwd) && isset($pwd)){
            if($currentPwd == $pwd){
                if($pwd == $newPwd){
                    echo "<script>alert('New password is same as current password');window.location.href='./profile.php';</script>";  
                }
                else{
                    $currentPwd = $newPwd;
                    if(isset($newUsername) && isset($currentPwd) && isset($newMob) && isset($newDob)){
                        $isUpdated = $profileOp->updateProfile($userId,$newUsername,$newMob,$currentPwd,$newDob);
                        if($isUpdated){
                            $_SESSION['username'] = $newUsername;
                            echo "<script>alert('Profile details are updated successfully');window.location.href='./profile.php';</script>";  
                        }
                        else{
                            echo "<script>alert('No details updated!');window.location.href='./profile.php';</script>";  
                        }
                      
                    }
                }
            }
            else{
                echo "<script>alert('You have entered incorrect current password');</script>"; 
            }
        }else{
            if($currentPwd == $pwd){
                if(isset($newUsername) && isset($currentPwd) && isset($newMob) && isset($newDob)){
                    $isUpdated = $profileOp->updateProfile($userId,$newUsername,$newMob,$currentPwd,$newDob);
                    if($isUpdated){
                        $_SESSION['username'] = $newUsername;
                        echo "<script>alert('Profile details are updated successfully');window.location.href='./profile.php';</script>";  
                    }
                    else{
                        echo "<script>alert('No details updated!');window.location.href='./profile.php';</script>";  
                    }
                
                }
            }else{
                echo "<script>alert('You have entered incorrect current password');window.location.href='./profile.php';</script>"; 
            }
        }
    }
?>
<html>

<head>
    <title>OneStop - Account</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
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
        <!--Profile section-->
        <div class="row profile">
            <div class="profile-container">
                <div class="profile-main-title">
                    Account
                </div>
                <hr />
                <div class="profile-subcontainer">
                    <div class="profile-title">
                        Profile Details
                    </div>
                    <hr />
                    <div class="profile-form">
                        <form class="form-box" action="" method="post">
                            <div class="form-group">
                                <label class="required-field">Username</label><br />
                                <input type="text" class="form-control input-lg" id="username" name="username"  required value="<?php echo $username;?>"/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Email</label><br />
                                <input type="email" class="form-control input-lg" id="email" name="email"  required disabled value="<?php echo $email;?>"/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Current password</label><br />
                                <input type="password" class="form-control input-lg" id="password" name="currentPwd" required /><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">New Password</label><br />
                                <input type="password" class="form-control input-lg" id="password" name="newPwd"/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Mobile Number</label><br />
                                <input type="number" class="form-control input-lg" id="mobile" name="mobile"  required value="<?php echo $mob;?>"/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Date of birth</label><br />
                                <input type="date" class="form-control input-lg" id="dob" name="dob"  required value="<?php echo $dob;?>"/>
                            </div>
                            <br />
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-danger" name="updateProfile" value="Save Details" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of profile section-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>