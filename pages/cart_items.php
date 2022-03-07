<!DOCTYPE html>
<html>
    <head>
        <title>OneStop - Shopping Bag</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/cart_items.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/header.js"></script>
    </head>
    <body>
        <div class="container-fluid main-container">
             <!--Header-->
            <div class="header">
                <ul class="left-menu" type="none">
                    <li class="logo">
                        <a href="../index.php">
                            <img src="../images/One1.png" alt="logo not found" title="logo" class="logo-img">
                        </a>
                    </li>
                    <li><a href="men.php" class="header-link">Men</a></li>
                    <li><a href="women.php" class="header-link">Women</a></li>
                    <li><a href="kids.php" class="header-link">Kids</a></li>
                    <li><a href="collections.php" class="header-link">Collections</a></li>
                    <li><a href="new_arrivals.php" class="header-link">New Arrivals</a></li>
                </ul>
                <ul class="search-bar-menu" type="none">
                    <li>
                        <form>
                            <input type="text" class="search-bar" placeholder="Search for products,brands..." title="">
                            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="right-menu" type="none">
                    <li>
                        <div class="profile-dropdown">
                            <div class="header-icon ">
                                <i class="fa fa-user-o" style="color:darkblue;"></i>
                                <div class="header-icon-label">
                                    Profile
                                    <div class="profile-dropdown-content">
                                        <b>Welcome</b><br/>
                                        <div class="text-muted">Access your account and manage orders</div><br/>
                                        <a href="signin.php">
                                            <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                        </a><br/>
                                        <a href="signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                        <hr/>
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
                        <a href="wishlist.php" class="header-link">
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
                        <a href="cart.php" class="header-link">
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
            
            <!-- End of header -->
            
            <!-- cart section -->
            <div class="row cart-section">
                <div class="cart-item-title">
                    Your Shopping Bag
                </div>
               
                <div class="col-lg-8 cart-items">
                   
                    <div class="cart-item">
                        <table class="cart-item-table">
                            <tr>
                                <td class="product-image">
                                    <img src="../images/product/puma.webp" alt="Image not found" class="product-img"/>
                                </td>
                                <td class="product-details">
                                    <div class="product-title">Puma</div>
                                    <div class="product-subtitle">Men Black Solid Round Neck T-shirt</div>
                                </td>
                                <td class="product-retail-price">
                                    $17    <del class="text-muted">$25</del>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="cartitem-remove-btn"><a href="cart.php" class="cartitem-remove-link" onclick="removeCart()">REMOVE</a></div>
                                </td>
                                 <td>
                                    <div class="cartitem-wishlist-btn"><a href="wishlist_items.php" class="cartitem-wishlist" onclick="addList()">MOVE TO WISHLIST</a></div>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 cart-item-price">
                    <div class="product-sidebar-title">PRICE DETAILS (1 Item)</div>
                    <div class="sidebar-product-price">
                        <span>Total MRP</span>
                        <span class="product-price">
                            <span>$25</span>
                        </span>
                    </div>
                    <div class="sidebar-product-price">
                        <span>Discount on MRP</span>
                        <span class="product-price-discount">
                            <span>-$8</span>
                        </span>
                    </div><hr>
                    <div class="sidebar-product-totalprice">
                        <span>Total Amount</span>
                        <span class="product-price">
                            <span>$17</span>
                        </span>
                    </div>
                    <div class="place-order-button">
                        <a href="../index.php">
                            <button type="button" class="place-order-btn" onclick="placeOrder()">
                                PLACE ORDER
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!--End of cart section-->
            
            <!--footer-->
            <?php include("footer.php");?>
            <!--End of footer-->
            
        </div>
        <script>
            //Show alert message 
            function removeCart(){
                alert("Product successfully removed from the cart.");
            }

            function addList(){
                alert("Product successfully added to the wishlist.");
            }
            
            function placeOrder(){
                var response = confirm("Are you sure that you want to place the order?");
                
                if(response==true)
                    alert("You've successfully place the order!\nYour order is on it's way...");
                else{
                    alert("Sorry to hear that you're no longer interested to place order!\nSee you next time...");
                }
            }
        </script>
    </body>  
</html>