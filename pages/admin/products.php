<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    require_once('../../includes/templates/ProductOps.php');

	$prod = new ProductOps();

	//Handle get request and delete the product details
	if(isset($_GET["prodId"])){
		$prodId = $_GET["prodId"];
		$isDeleted = $prod->deleteProd($prodId);
		if($isDeleted){
			echo "<script>alert('Product Deleted Successfully!');window.location.href='./products.php';</script>";
		}
		else{
			echo "<script>alert('Some error occured while deleting category name!');</script>"; 
		}
	}
	
?>
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
		$(document).ready(function() {
			$(".toggleArrow").click(function() {
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
									<a href="../../includes/templates/logout.php">Logout</a>
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
							<button type="submit" name="search" class="button-search" style="background:#337ab7;"><i class="fas fa-search"></i></button>

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
							<th>Sub Category</th>
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
						<?php 
							$id = 0;
							$data = $prod->displayProd();
							foreach($data as $row){
								$prodId = $row["product_id"];
								$prodName = $row["product_name"]; 
								$catId = $row["cat_id"]; 
								$catName = $prod->getCategory($catId);
								foreach($catName as $cat){
									$prodCat = $cat["cat_name"];
								}
								$subCatId = $row["sub_cat_id"]; 
								$subCatName = $prod->getSubCategory($subCatId);
								foreach($subCatName as $subCat){
									$prodSubCat = $subCat["sub_cat_name"];
								}
								$prodBrand = $row["brand_name"]; 
								$prodPhoto = $row["product_img"]; 
								$prodImg = explode(",",$prodPhoto);
								$prodDesc = $row["product_details"]; 
								$prodStock = $row["product_stock"]; 
								$prodPrice = $row["product_price"]; 
								$prodMrp = $row["product_mrp"]; 
								$prodFabric = $row["fabric"]; 
								$prodFit= $row["fit"]; 
								$prodSize = $row["size"]; 
								$prodOccasion = $row["occasion"]; 
								$prodPattern = $row["pattern"]; 
								$prodWash = $row["washcare"]; 
								$id += 1;
						?>
							<tr>
								<td><?php echo $id;?></td>
								<td><?php echo $prodName;?></td>
								<td><?php echo $prodCat;?></td>
								<td><?php echo $prodSubCat;?></td>
								<td><?php echo $prodBrand;?></td>
								<td><img class="myImg" id="myImg<?php echo $prodId;?>"  src="../../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="<?php echo $prodBrand." - ".$prodName;?>"  height=100 width=80></td>
								<td><?php echo $prodDesc;?></td>
								<td><?php echo $prodStock;?></td>
								<td><?php echo $prodPrice;?></td>
								<td><?php echo $prodMrp;?></td>
								<td><?php echo $prodFabric;?></td>
								<td><?php echo $prodFit;?></td>
								<td><?php echo $prodSize;?></td>
								<td><?php echo $prodOccasion;?></td>
								<td><?php echo $prodPattern;?></td>
								<td><?php echo $prodWash;?></td>

								<td>
	
										<a href="./update-product.php?prodId=<?php echo $prodId;?>" class="btn btn-success btn-rounded">Update</a> 
							   </td>
							   <td>
										<a href="./products.php?prodId=<?php echo $prodId;?>" class="btn btn-danger">Delete</a>
									

								</td>
							</tr>
							<!-- The Modal -->
<div id="myModal<?php echo $prodId;?>" class="modal">
  <span id="close" class="close<?php echo $prodId;?>">&times;</span>
  <img class="modal-content" id="img<?php echo $prodId;?>" alt="Image not available">
  <div class="caption" id="caption<?php echo $prodId;?>"></div>
</div>	

<script>
// Get the modal
var modal = document.getElementById("myModal<?php echo json_encode($prodId);?>");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg<?php echo json_encode($prodId);?>");
var modalImg = document.getElementById("img<?php echo json_encode($prodId);?>");
var captionText = document.getElementById("caption<?php echo json_encode($prodId);?>");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close<?php echo json_encode($prodId);?>")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
						<?php } ?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>

</html>