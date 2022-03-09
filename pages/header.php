<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand mt-2 mt-lg-0" href="../index.php">
                    <img src="../images/One1.png" height="15" alt="logo not found" title="logo" class="logo-img" loading="lazy" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="men.php">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="women.php">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kids.php">Kids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="collections.php">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new_arrivals.php">New Arrivals</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <ul class="right-menu" style="margin:11px 40px 10px 0 !important;" type="none">
                            <li>
                                <div class="profile-dropdown">
                                    <div class="header-icon">
                                        <i class="fa fa-user-o " style="color:darkblue;"></i>
                                        <div class="header-icon-label">
                                            Profile
                                            <div class="profile-dropdown-content">
                                                <b>Welcome</b><br />
                                                <div class="text-muted">Access your account and manage orders</div><br />
                                                <a href="signin.php">
                                                    <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                                </a><br />
                                                <a href="signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                                <hr />
                                                <a href="profile.php" class="profile-links">Account</a>
                                                <a href="orders.php" class="profile-links">Orders</a>
                                                <a href="wishlist.php" class="profile-links">Wishlist</a>
                                                <a href="contact.php" class="profile-links">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="pages/wishlist.php" class="header-link">
                                    <div class="header-icon ">
                                        <div>
                                            <i class="fa fa-heart-o" style="color:deeppink;"></i>
                                            <div class="header-icon-label">
                                                Wishlist
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="pages/cart.php" class="header-link">
                                    <div class="header-icon ">
                                        <div>
                                            <i class="fa fa-shopping-bag" style="color:red;"></i>
                                            <div class="header-icon-label">
                                                Bag
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="justify-content-center search" style="padding:20px 0px 10px 20px !important;" id="navbarCenteredExample">
                    <form class="d-flex input-group w-auto">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fa fa-search"></i>
                        </span>
                    </form>
                </div>
            </div>
        </nav>
    <br />
</body>

</html>