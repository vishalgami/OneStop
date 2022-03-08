<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Panel-Add Products</title>
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
							<span id="adminID">Admin</span>
							<div class="dropdown">
								<button class="dropbtn"><i class="fas fa-user"></i></button>
								<div class="dropdown-content">
									<a href="profile.php">My Profile</a>
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
							<a href="categories.php" title="Categories">
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
				<p style="font-size: 24px; margin-bottom:20px;">Add Products</p>
				<div class="item_wrap">
					<div class="item">
						<form class="add_product" id="" method="POST" action="" enctype="multipart/form-data">
							<label>Select Category : </label>
							<select class="border x" name="cat" id="cat">
								<option value=" ">Categories</option>
							</select>
							<hr>
							<label>Brand Name : </label>
							<input type="text" id="brand" class="" required="true" name="brand" style="width:180px; border-radius:5px;">
							<hr>
							<label>Product Name : </label>
							<input type="text" id="product" class="" required="true" name="product" style="width:180px; border-radius:5px;">
							<hr>
							<label>Product Description : </label><br>
							<textarea id="prod_detail" class="" required="true" name="prod_detail" style="width:500px; height:100px; border-radius:10px;"></textarea>
							<hr>
							<label>Price : </label>
							<input type="number" id="price" class="" required="true" name="price" style="width:180px; border-radius:5px;">
							<hr>
							<label>MRP: </label>
							<input type="number" id="mrp" class="" required="true" name="mrp" style="width:180px; border-radius:5px;">
							<hr>
							<label>Stock : </label>
							<input type="number" id="instock" required="true" name="instock" class="" style="width:180px; border-radius:5px;">
							<hr>
							<label>Product Photo : </label>
							<input id="image" type="file" required="true" name="image[]" title="Choose a Product photo" class="  input-sm  " multiple><br>
							<button type="button" id="prodspec" name="prodspec" onclick="pdetails()" class="btn btn-primary">Add Product Specification
							</button><br><br>
							<label id="lb1" style="display:none;">Fabric: </label>
							<input type="hidden" id="id1" name="fabric" value="" style="width:180px; border-radius:5px; display:inline; margin-bottom: 25px;"><br id="br1" style="display:none;">
							<label id="lb2" style="display:none;">Fit : </label>
							<input type="hidden" id="id2" name="fit" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br2" style="display:none;">
							<label id="lb3" style="display:none;">Occasion: </label>
							<input type="hidden" id="id3" name="occasion" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br3" style="display:none;">
							<label id="lb4" style="display:none;">Size : </label>
							<input type="hidden" id="id4" name="size" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br4" style="display:none;">
							<label id="lb5" style="display:none;">Pattern: </label>
							<input type="hidden" id="id5" name="pattern" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br5" style="display:none;">
							<label id="lb6" style="display:none;">Wash Care: </label>
							<input type="hidden" id="id6" name="washcare" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br6" style="display:none;">
							<button type="submit" id="submit" name="submit" class="btn btn-success">Save</button>
						</form><br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function pdetails() {
			document.getElementById("id1").setAttribute("type", "text");
			document.getElementById("id2").setAttribute("type", "text");
			document.getElementById("id3").setAttribute("type", "text");
			document.getElementById("id4").setAttribute("type", "text");
			document.getElementById("id5").setAttribute("type", "text");
			document.getElementById("id6").setAttribute("type", "text");
			document.getElementById("lb1").style.display = "inline";
			document.getElementById("lb2").style.display = "inline";
			document.getElementById("lb3").style.display = "inline";
			document.getElementById("lb4").style.display = "inline";
			document.getElementById("lb5").style.display = "inline";
			document.getElementById("lb6").style.display = "inline";
			document.getElementById("br1").style.display = "block";
			document.getElementById("br2").style.display = "block";
			document.getElementById("br3").style.display = "block";
			document.getElementById("br4").style.display = "block";
			document.getElementById("br5").style.display = "block";
			document.getElementById("br6").style.display = "block";
		}
	</script>
</body>
</html>