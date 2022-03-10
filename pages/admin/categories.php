<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Panel-Categories</title>
	<link rel="icon" type="img/ico" href="../../images/One1.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
	<link rel="stylesheet" href="category.css">
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
				<span>Admin Panel</span>
				<div class="right_info">
					<div class="icon_wrap">
						<div class="icon">
							<div class="dropdown">
								<button class="dropbtn"><i class="fas fa-user"></i></button>
								<span id="adminID">Admin</span>
								<div class="dropdown-content">
									<a href="profile.php">My profile</a>
									<a href="../signin.php">Logout</a>
								</div>
							</div>
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
							<a href="#" title="Categories" class="active">
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
				<p style="font-size: 24px; margin-bottom:20px;">Categories</p>
				<form class="" id="" method="post" action="">
					<input type="text" placeholder="Add category" name="cname" class="input-search input-search-sm" required>
					<button type="submit" name="submit" class="btn btn-primary" id="submit">Add</button>
				</form><br>
				<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Category Name</th>
							<th>Action</th>
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