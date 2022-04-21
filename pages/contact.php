<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once('../includes/templates/ContactOps.php');

	$contactOp = new ContactOps();

    if(isset($_POST["contact"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mob = $_POST["mobile"];
        $message = $_REQUEST["message"];

        if(isset($name) && isset($mob) && isset($email) && isset($message)){
            $submitted = $contactOp->submitContactRequest($name,$email,$mob,$message);
            if($submitted){
                echo "<script>alert('Contact form submitted successfully');window.location.href='../index.php'</script>";
            }else{
                echo "<script>alert('Some error occured while submitting contact form!');</script>";
            }
        }
    }
?>
<html>

<head>
    <title>OneStop - Contact</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
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
        <!--Contact form-->
        <div class="row signin">
            <div class="col-lg-4 col-md-4 col-sm-2 form-container">
                <h2 style="text-align: center;">Contact Us</h2>
                <hr />
                <br />
                <form class="form-box" method="post" action="" id="contactForm">
                    <div class="form-group">
                        <label class="required-field">Name</label><span id="notify"></span>
                        <input type="text" class="form-control input-lg" id="name" name="name" required/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Email</label><span id="notify"></span>
                        <input type="email" class="form-control input-lg" id="email" name="email" required/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Mobile Number</label><span id="notify"></span>
                        <input type="text" class="form-control input-lg" id="mobile" name="mobile" required/><br />
                    </div>
                    <div class="form-group">
                        <label class="required-field">Message</label><span id="notify"></span>
                        <textarea class="form-control input-lg" id="message" name="message" required></textarea>
                    </div>
                    <br />
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-danger" name="contact" value="Submit" id="contactBtn" />
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <img src="../images/contact.webp" alt="Image not found" class="contact-img">
            </div>
        </div>
        <!--End of Contact form-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>