<html>

<head>
    <title>OneStop - Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/orders.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
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
            <br /><br />
            <div class="orders-image">
                <img src="../images/orders3.webp" alt="Image not found" class="orders-img" />
            </div>
            <br /><br />
            <div class="orders-button">
                <a href="../index.php"><button type="button" class="btn btn-danger orders-btn">Start shopping</button></a>
            </div>
        </div>
        <!--End of orders page-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>