<html>

<head>

	<meta charset="UTF-8">

	<title>Admin Panel-Products</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	
	<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

	<link rel="stylesheet" href="products.css">

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



						  	 <a href="profile.php">My Profile</a>

						    <a href="../signin.php">Logout</a>



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

		            <a href="categories.php" title="Categories" class="icon">

		              <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></span>

		              <span class="list">Categories</span>

		            </a>

		          </li>

		          <li>

		            <a href="products.php" class="active">

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

	    	<p style="font-size: 24px; margin-bottom:20px;">Products</p>

	    	<!--search -->

    <label class="open-search" for="open-search">

      <i class="fas fa-search"></i>

            <input class="input-open-search" id="open-search" type="checkbox" name="menu" />

   <div class="search">

      <form action="products_search.php" method="post">

      

      <input type="text" name="query" id="search" placeholder="Search" class="input-search" autocomplete="off">

      <button type="submit" name="search" class="button-search"  style="background:#337ab7;"><i class="fas fa-search"></i></button>

      

      </form>

      <div id="search_list" class="search_list"></div>

    </div>

    </label>

    <!-- // search -->
    <br>
    <br>
	    			<a href="add-products.php">

	    				<button type="submit" class="btn btn-primary" id="">Add Product</button>

	    			</a><br><br>


	    			<br>

 						 <table class="table">

					    <thead>

					      <tr>

					      	<th>Id</th>

					      	<th>Product Name</th>

					      	<th>Category</th>

					      	<th>Brand</th>

					      	

					      	<th>Product Photo</th>



					      	<th>Product Description</th>

					      	<th>Stock</th>

					      	<th>Price</th>

					      	<th>MRP</th>

					      	<th>Fabric</th>

					      	<th>Fit</th>

					      	<th>Size</th>

					      	<th>Occasion</th>

					      	<th>Pattern</th>

					      	<th>Wash Care</th>

					      	<th colspan="2">Action</th>

					      	

					      </tr>



					    </thead>

                <tbody>

					    
					      

					    </tbody>

					 </table>

	    </div>
	</div>

</div>

	




</body>

</html>
