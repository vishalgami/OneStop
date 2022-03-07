<html>
    <head>
        <title>OneStop - Shopping Bag</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/cart.css">
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
            
            <!--Shopping bag page when there is no items in bag-->
            <div class="row bag">
                <div class="bag-title">Your shopping bag is empty !</div>
                <div class="bag-subtitles">
                    Give it a purpose - get it full with your favourite apparels
                </div>
                <br/><br/>
                <div class="bag-image">
                    <img src="../images/bag3.png" alt="Image not found" class="bag-img"/>
                </div>
                <br/><br/>
                <div class="bag-button">
                    <a href="wishlist_items.php"><button type="button" class="btn btn-danger bag-btn">Add items from wishlist</button></a>
                </div>
            </div>
            <!--End of shopping bag page-->
            <!--footer-->
            <?php include("footer.php");?>
            <!--End of footer-->
        </div>
    </body>
</html>
