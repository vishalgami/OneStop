<?php 
    if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION["user_id"])){
            $userId = $_SESSION["user_id"];
        }
    }

    require_once('../includes/templates/AddAddressOps.php');

	$addAddressOp = new AddAddressOps();

	
    // if(isset($profileData)){
	// 	foreach($profileData as $row){
	// 		$username = $row["username"];
	// 		$email = $row["email"];
	// 		$currentPwd = $row["password"];
	// 		$mob = $row["mobile"];
	// 		$dob = $row["dob"];
	// 	}
    // }
	
    // //----Signup Form----
    // $pwdErr = $newPwdErr = "";

//     //filter data
//     function test_input($data){
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }

    if(isset($_POST["addAddress"])){

        $name = $_POST["name"];
        $phone = $_POST["mobile"];
        $address1 = $_POST["address_1"];
        $address2 = $_POST["address_2"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $pincode = $_POST["pincode"];
        
        $addAddress = $addAddressOp -> AddAddress($userId,$name,$phone,$address1,$address2,$city,$state,$country,$pincode);

        if($addAddress){
            echo "<script>alert('New address added successfully.');window.location.href='checkout.php';</script>";
        } else {
            echo "<script>alert('Some error occured while adding address!');</script>";
        }
        // if(empty($_POST["currentPwd"])){
        //     // $pwdErr = "Current Password is required!";
        // }
        // else {
        //     $password = test_input($_POST["currentPwd"]);
        //     if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$password)){
        //         $pwdErr = "Current password requires at least 8 characters and atleast one uppercase letter";
        //         echo "<script>alert('$pwdErr');window.location.href='./profile.php';</script>";  
        //     }
        //     else{
        //         $pwd = $password;
        //         $pwd = md5($pwd);
        //     }
        // }

        // if(empty($_POST["newPwd"])){
        //     // $newPwdErr = "Confirm Password is required!";
            
        // }
        // else {
        //     $newPwd = test_input($_POST["newPwd"]);
        //     if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$newPwd)){
        //         $newPwdErr = "New password requires at least 8 characters and atleast one uppercase letter";
        //         echo "<script>alert('$newPwdErr');window.location.href='./profile.php';</script>";  
        //     }else{
        //         $newPwd = md5($newPwd);
        //     }
        // }
        // // echo "DB Pwd:".$currentPwd;
        // // echo "New: ".$newPwd;
        // // echo "Current:".$pwd;
        // if(isset($newPwd) && isset($pwd)){
        //     if($currentPwd == $pwd){
        //         if($pwd == $newPwd){
        //             echo "<script>alert('New password is same as current password');window.location.href='./profile.php';</script>";  
        //         }
        //         else{
        //             $currentPwd = $newPwd;
        //             if(isset($newUsername) && isset($currentPwd) && isset($newMob) && isset($newDob)){
        //                 $isUpdated = $profileOp->updateProfile($userId,$newUsername,$newMob,$currentPwd,$newDob);
        //                 if($isUpdated){
        //                     $_SESSION['username'] = $newUsername;
        //                     echo "<script>alert('Profile details are updated successfully');window.location.href='./profile.php';</script>";  
        //                 }
        //                 else{
        //                     echo "<script>alert('No details updated!');window.location.href='./profile.php';</script>";  
        //                 }
                      
        //             }
        //         }
        //     }
        //     else{
        //         echo "<script>alert('You have entered incorrect current password');</script>"; 
        //     }
        // }else{
        //     if($currentPwd == $pwd){
        //         if(isset($newUsername) && isset($currentPwd) && isset($newMob) && isset($newDob)){
        //             $isUpdated = $profileOp->updateProfile($userId,$newUsername,$newMob,$currentPwd,$newDob);
        //             if($isUpdated){
        //                 $_SESSION['username'] = $newUsername;
        //                 echo "<script>alert('Profile details are updated successfully');window.location.href='./profile.php';</script>";  
        //             }
        //             else{
        //                 echo "<script>alert('No details updated!');window.location.href='./profile.php';</script>";  
        //             }
                
        //         }
        //     }else{
        //         echo "<script>alert('You have entered incorrect current password');window.location.href='./profile.php';</script>"; 
        //     }
        // }
    }
?>
<html>

<head>
    <title>OneStop - Add Address</title>
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
                <div class="">
                    <a href="./checkout.php"><button class="btn btn-danger">Back To Checkout</button></a>
                </div><br>
                <div class="profile-main-title">
                    Address Information
                </div>
                <hr />
                <div class="profile-subcontainer">
                    <div class="profile-title">
                        Enter Address Details
                    </div>
                    <hr />
                    <div class="profile-form">
                        <form class="form-box" action="" method="post">
                            <div class="form-group">
                                <label class="required-field">Name</label><br />
                                <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Enter Name" required value=""/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Mobile Number</label><br />
                                <input type="tel" class="form-control input-lg" id="mobile" name="mobile" placeholder="Enter Mobile Number"  required value=""/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Address 1</label><br />
                                <input type="text" class="form-control input-lg" id="address_1" name="address_1" placeholder="Enter Unit Number"   required value=""/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Address 2</label><br />
                                <input type="text" class="form-control input-lg" id="address_2" name="address_2" placeholder="Enter Street Name" required value=""/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">City</label><br />
                                <input type="text" class="form-control input-lg" id="city" name="city" placeholder="Enter City"/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">State</label><br />
                                <input type="text" class="form-control input-lg" id="state" name="state" placeholder="Enter state" required value=""/><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Country</label><br />
                                <input type="text" class="form-control input-lg" id="country" name="country" placeholder="Enter Country" required value=""/><br />
                            </div>                          
                            <div class="form-group">
                                <label class="required-field">Pin Code</label><br />
                                <input type="text" class="form-control input-lg" id="pincode" name="pincode" placeholder="Enter Pin Code" required value=""/><br />
                            </div> 
                            <br />
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-danger" name="addAddress" value="Save Address" />
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