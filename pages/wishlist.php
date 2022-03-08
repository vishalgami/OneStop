<html>

<head>
    <title>OneStop - Wishlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/wishlist.css">
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
        <!--Wishlist page when there is no items in wishlist-->
        <div class="row wishlist">
            <div class="wishlist-title">Your Wishlist is empty !</div>
            <div class="wishlist-subtitles">
                Explore more and shortlist some items
            </div>
            <br /><br />
            <div class="wishlist-image">
                <img src="../images/wishlist2.png" alt="Image not found" class="wishlist-img" />
            </div>
            <br /><br />
            <div class="wishlist-button">
                <a href="../index.php"><button type="button" class="btn btn-primary wishlist-btn">Continue Shopping</button></a>
            </div>
        </div>
        <!--End of wishlist page-->
    </div>
    <!--footer-->
    <?php include("footer.php"); ?>
    <!--End of footer-->
    </div>
</body>

</html>