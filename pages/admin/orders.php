<html>

<head>
	<meta charset="UTF-8">
	<title>Admin Panel-Orders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".toggleArrow").click(function() {
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
							<a href="orders.php" class="active">
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
				<p style="font-size: 24px; margin-bottom:20px;">Orders</p>

				<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Order Id</th>
							<th>Product(s)</th>
							<th>Order placed date</th>
							<th>Order Placed By</th>
							<th>Ship To</th>
							<th>Shipping Address</th>
							<th>Delivery status</th>
							<th>Place Order</th>
							<th>Order Out for Delivery</th>
							<th>Order Delivered</th>
							<th>Delete Order</th>
						</tr>
					</thead>
					<tbody>
						<!-- Table Body -->

					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html>