<html>

<head>
    <title>OneStop - Account</title>
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
                        <form class="form-box" action="index.php">
                            <div class="form-group">
                                <label class="required-field">Username</label><br />
                                <input type="text" class="form-control input-lg" id="username" required /><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Email</label><br />
                                <input type="email" class="form-control input-lg" id="email" required /><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">password</label><br />
                                <input type="password" class="form-control input-lg" id="password" required /><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Mobile Number</label><br />
                                <input type="number" class="form-control input-lg" id="mobile" required /><br />
                            </div>
                            <div class="form-group">
                                <label class="required-field">Date of birth</label><br />
                                <input type="date" class="form-control input-lg" id="dob" required />
                            </div>
                            <br />
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-danger" value="Save Details" />
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