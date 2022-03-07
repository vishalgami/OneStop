<?php
include("db_conx.php");
session_start();
if(!isset($_SESSION["admin_id"]))
{
  header("location: ../signin.php");
  exit();
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Panel-Stationary shop</title>
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
</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			
			<a href="#" class="icon">
			<span class="icon"><i class="fas fa-store"></i></span>  Stationary Shop</a>
		</div>

		<div class="top_menu ">

			<span style="font-size: 24px;">Admin Panel</span>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						
						<div class="dropdown">
						  <button class="dropbtn"><i class="fas fa-user"></i></button>
						  <div class="dropdown-content">
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
		          
		          <li>
		            <a href="dboydetail.php">
		              <span class="icon"><i class="fas fa-shipping-fast"></i></span>
		              <span class="list">Delivery Boy Details</span>
		            </a>
		          </li>
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
		            <a href="orders.php">
		              <span class="icon"><i class="fas fa-dolly"></i></span>
		              <span class="list">Orders</span>
		            </a>
		          </li>
		          <li>
		            <a href="#" class="icon">
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
	    	<p style="font-size: 24px; margin-bottom:20px;">Seller Details</p>
	    	<div class="item_wrap">

	    		<div class="item">
	    			 <div class="table-responsive">          
 						 <table class="table">
					    <thead>
					      <tr>
					      	<th>Id</th>
					      	<th>Seller photo</th>
					        <th>Username</th>
					        <th>First name</th>
					        <th>Middle name</th>
					        <th>Last name</th>
					        <th>Email</th>
					        <th>Shop Name</th>
					        <th>Shop Mobile No</th>
					        <th>Shop Address</th>
					        <th>City</th>
					        <th>State</th>
					        <th>Country</th>
					        <th>Aadhaar card</th>
					        <th>PAN card</th>
					        <th>Action</th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					      	<td>1</td>
					      	<td><img style="width:50px; height:50px;" src="1.jpg"></td>
					      	<td>Harsh796</td>
					        <td>Harsh</td>
					        <td>Hirenbhai</td>
					        <td>Patel</td>
					        <td>harsh123@gmail.com</td>
					        <td>Mahalaxmi</td>
					        <td>+919428026764</td>
					        <td>B/23,Imperial complex,Bodakdev,Ahmedabad-394894</td>
					        <td>Ahmedabad</td>
					       	<td>Gujarat</td>
					       	<td>India</td>
					        <td><img style="width:50px; height:50px;" src="1.jpg"></td>
					        <td><img style="width:50px; height:50px;" src="1.jpg"></td>
					        <td><button class="btn btn-success">Update</button></td>
					       	<td><button class="btn btn-danger">Delete</button></td>
					       	
					      </tr> 
					      <tr>
					      	<td>2</td>
					      	<td><img style="width:50px; height:50px;" src="1.jpg"></td>
					      	<td>Vrushank796</td>
					        <td>Vrushank</td>
					        <td>Anishbhai</td>
					        <td>Amin</td>
					        <td>vrushank123@gmail.com</td>
					        <td>Stationary shop</td>
					        <td>+919428026768</td>
					        <td>B/23,Abhishek apartment,Varachha,Surat-394894</td>
					        <td>Surat</td>
					       	<td>Gujarat</td>
					       	<td>India</td>
					        <td><img style="width:50px; height:50px;" src="1.jpg"></td>
					        <td><img style="width:50px; height:50px;" src="1.jpg"></td>
					        <td><button class="btn btn-success">Update</button></td>
					       	<td><button class="btn btn-danger">Delete</button></td>
					       	
					      </tr>
					      
					    </tbody>
					 </table>
					 </div>
	    		</div>
	    	
	    	</div>
	    	
	    </div>
	</div>
</div>
	

</body>
</html>