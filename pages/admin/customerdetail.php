<?php
// session_start();
// include("db_conx.php");



// if(!isset($_SESSION["admin_id"]))

// {

//   header("location: ../signin.php");

//   exit();

// }

?>

<html>

<head>

	<meta charset="UTF-8">

	<title>Admin Panel-Customer Details</title>

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

		            <a href="customerdetail.php" class="active">

		              <span class="icon"><i class="fas fa-users"></i></span>

		              <span class="list">Customer Details</span>

		            </a>

		          </li>

		           

		          <!-- <li>

		            <a href="dboydetail.php"  class="icon">

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

		            <a href="orders.php">

		              <span class="icon"><i class="fas fa-dolly"></i></span>

		              <span class="list">Orders</span>

		            </a>

		          </li>

		          <li>

		            <a href="report.php" class="icon">

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

	    	<p style="font-size: 24px; margin-bottom:20px;">Customer Details</p>

	    	

	    			       

 						 <table class="table">

					    <thead>

					      <tr>

					      	<th>Id</th>

					      	

					        <th>Username</th>

							<th>Mobile Number</th>

					        <th>Email</th>

					        

					        <th>Action</th>

					        

					      </tr>

					    </thead>

					    <tbody>



						<?php

        // $select = mysqli_query($conx, "select * from registration where role_id = 2");

        // $i = 1;

        // while ($row = mysqli_fetch_assoc($select)) {



            //print_r($row);

            ?>

            <!-- <tr>

                <td data-label="Id:" ><?php echo $i; ?></td>

                <td data-label="Username:"><?php echo $row["register_username"]; ?></td>

                <td data-label="Mobile No:"><?php echo $row["register_mobile"]; ?></td>

                <td data-label="Email:"><?php echo $row["register_email"]; ?></td>

				<td data-label="Action:"><a href="customerdelete.php?id=<?php echo $row['register_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>

				

            </tr> -->

            <?php

        //     $i++;

        // }

        ?>

					       	

					       	



					       	

					      

					      

					    </tbody>

					 </table>

					 

	    </div>

	</div>

</div>

	



</body>

</html>

<?php 
// include("db_conx_close.php");
?>