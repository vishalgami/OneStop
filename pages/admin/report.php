<?php
// include("db_conx.php");
// session_start();
// if(!isset($_SESSION["admin_id"]))
// {
//   header("location: ../signin.php");
//   exit();
// }
?>
<!-- code to place order ,out for delivery and order delivered-->
<?php 
// if(isset($_POST['place_order'])){

// $order_id=$_POST['order_id'];

// date_default_timezone_set("Asia/Kolkata");
// $timestamp  = date('Y-m-d H:i:s');	

// $ch_order_stat = mysqli_query($conx,"UPDATE `orders` SET `delivery_status`='Order confirmed and placed by seller',`order_confirmed_date`='$timestamp' WHERE `order_id`='$order_id';");
// }

// if(isset($_POST['out_for_delivery'])){

// $order_id=$_POST['order_id'];

// date_default_timezone_set("Asia/Kolkata");
// $timestamp  = date('Y-m-d H:i:s');	

// $ch_order_stat = mysqli_query($conx,"UPDATE `orders` SET `delivery_status`='Order is out for delivery',`order_out_for_delivery_date`='$timestamp' WHERE `order_id`='$order_id';");
// }

// if(isset($_POST['order_delivered'])){

// $order_id=$_POST['order_id'];

// date_default_timezone_set("Asia/Kolkata");
// $timestamp  = date('Y-m-d H:i:s');	

// $ch_order_stat = mysqli_query($conx,"UPDATE `orders` SET `delivery_status`='Order Successfully Delivered',`order_delivered_date`='$timestamp' WHERE `order_id`='$order_id';");
// }
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Panel-Reports</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".toggleArrow").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
		<link rel="icon" type="img/ico" href="../../images/One1.ico">
</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			<a href="../../index.php" class="icon">
			<span class="icon"><img src="../../images/One1.png"></i></span></a>
		</div>

		<div class="top_menu ">

			<span style="font-size: 24px;">Admin Panel</span>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						
						<div class="dropdown">
						  <button class="dropbtn"><i class="fas fa-user"></i></button>
						  <div class="dropdown-content">
						    <a href="profile.php">My profile</a>
						    <a href="logout_admin.php">Logout</a>
						  </div>
						</div>
						<span id="adminID">Admin</span>
					</div>
				</div>
				
			</div>

		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="index.php" class="icon">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Dashboard</span>
		            </a>
		          </li>
		          <li>
		            <a href="customerdetail.php">
		              <span class="icon"><i class="fas fa-users"></i></span>
		              <span class="list">Customer Details</span>
		            </a>
		          </li>
		           
		          <!-- <li>
		            <a href="dboydetail.php">
		              <span class="icon"><i class="fas fa-shipping-fast"></i></span>
		              <span class="list">Delivery Boy Details</span>
		            </a>
		          </li> -->
		          <li>
		            <a href="categories.php" title="Categories">
		              <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
		              <span class="list">Categories</span>
		            </a>
		          </li>
		          <li>
		            <a href="products.php">
		              <span class="icon"><i class="fas fa-box"></i></span>
		              <span class="list">Products</span>
		            </a>
		          </li>
		          <li>
		            <a href="orders.php" class="icon">
		              <span class="icon"><i class="fas fa-dolly"></i></span>
		              <span class="list">Orders</span>
		            </a>
		          </li>
		          <li>
		            <a href="report.php" class="active">
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Report</span>
		            </a>
		          </li>
		        </ul>

		        <div class="toggleArrow">
			        <div class="inner_toggleArrow">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
	    	<p style="font-size: 24px; margin-bottom:20px;">Reports</p>
	    	
	    			  
					 </div>
	    		
	</div>
</div>

<!--Didn't worked,but try to complete it -->
<!--<script>

function place_order() {
  document.getElementById("place_order").disabled = true;
}

function out_for_delivery() {
  document.getElementById("out_for_delivery").disabled = true;
}

function order_delivered() {
  document.getElementById("order_delivered").disabled = true;
}

</script>-->

</body>
</html>