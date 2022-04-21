<?php 

if(!isset($_SESSION)){
	session_start();
}

require_once('../../includes/templates/ProductOps.php');

$prod = new ProductOps();

//Handle submit request to add product details
if(isset($_POST["submit"])){
	$brandName = $_POST["brand"];
	$prodName = $_REQUEST["product"];
	$prodDesc = $_REQUEST["prod_detail"]; 
	$catId = $_POST["catId"]; 
	$subCatId = $_POST["subCatId"]; 
	$prodPrice = $_POST["price"]; 
	$prodMrp = $_POST["mrp"]; 
	$prodFabric = $_POST["fabric"]; 
	$prodFit= $_POST["fit"]; 
	$prodSize = $_POST["size"]; 
	$prodOccasion = $_POST["occasion"]; 
	$prodPattern = $_POST["pattern"]; 
	$prodWash = $_POST["washcare"]; 
	$prodStock = $_POST["stock"]; 

	$prodPhoto='';

	//Check if directory exist or not
	if(!is_dir("../../images/product/".$brandName)) mkdir("../../images/product/".$brandName);

    foreach($_FILES['image']['tmp_name'] as $key => $image){

		$imageName = $_FILES['image']['name'][$key];

		$imageTmpName = $_FILES['image']['tmp_name'][$key];

		move_uploaded_file($imageTmpName,"../../images/product/".$brandName."/".$imageName);

		$prodPhoto .=$imageName.",";
	}


	if(isset($catId) && isset($subCatId) && isset($brandName) && isset($prodName) && isset($prodDesc) && isset($prodPrice) && isset($prodMrp) && isset($prodFabric)
	&& isset($prodFit) && isset($prodSize) && isset($prodOccasion) && isset($prodPattern) && isset($prodWash) && isset($prodStock)){
		
		$isAdded = $prod->addProd($catId,$subCatId,$brandName,$prodName,$prodDesc,$prodPrice,$prodMrp,$prodStock,$prodPhoto,$prodFabric,$prodFit,$prodSize,$prodOccasion,$prodPattern,$prodWash);
		if($isAdded){
			echo "<script>alert('New Product is Added Successfully!');window.location.href='./products.php';</script>";
			// echo "<script>alert('New Product is Added Successfully!');";
		}
		else{
			echo "<script>alert('Some error occured while adding product name!');</script>"; 
		}
	}
	else{
			echo "<script>alert('Some fields are missing!')</script>";  
	}
}

?>

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
									<a href="../../includes/templates/logout.php">Logout</a>
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
							<select class="border x" name="catId" id="cat">
								<option value="" selected disabled>Categories</option>
								<?php  
								$allCat=$prod->getAllCategory();
								
								foreach($allCat as $cat){
									$prodCatId = $cat["cat_id"];
									$prodCatName=$cat["cat_name"];
								?>
								<option value="<?php echo $prodCatId;?>"><?php echo $prodCatName;?></option>
								<?php }?>
							</select>
							<br>
							<label>Select Sub Category : </label>
							<select class="border x" name="subCatId" id="cat">
								<option value="" selected disabled>Sub Categories</option>
								<?php  
								$allSubCat=$prod->getAllSubCategory();
								
								foreach($allSubCat as $subCat){
									$prodSubCatId = $subCat["sub_cat_id"];
									$prodSubCatName=$subCat["sub_cat_name"];
								?>
								<option value="<?php echo $prodSubCatId;?>"><?php echo $prodSubCatName;?></option>
								<?php }?>
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
							<input type="number" id="price" class="" required="true" name="price" step="0.01" style="width:180px; border-radius:5px;">
							<hr>
							<label>MRP: </label>
							<input type="number" id="mrp" class="" required="true" name="mrp" step="0.01" style="width:180px; border-radius:5px;">
							<hr>
							<label>Stock : </label>
							<input type="number" id="instock" required="true" name="stock" class="" style="width:180px; border-radius:5px;">
							<hr>
							<label>Product Photo : </label>
							<input id="image" type="file" required="true" name="image[]" title="Choose a Product photo" class="  input-sm  " multiple><br>
							
							<label id="lb1" >Fabric: </label>
							<input type="text" id="id1" name="fabric" value="" style="width:180px; border-radius:5px;  margin-bottom: 25px;"><br id="br1" >
							<label id="lb2" >Fit : </label>
							<input type="text" id="id2" name="fit" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; "><br id="br2" >
							<label id="lb3" >Occasion: </label>
							<input type="text" id="id3" name="occasion" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; "><br id="br3" >
							<label id="lb4" >Size : </label>
							<input type="text" id="id4" name="size" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; "><br id="br4" >
							<label id="lb5" >Pattern: </label>
							<input type="text" id="id5" name="pattern" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; "><br id="br5" >
							<label id="lb6" >Wash Care: </label>
							<input type="text" id="id6" name="washcare" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; "><br id="br6" >
							<input type="submit" id="submit" name="submit" class="btn btn-success"/>
						</form><br>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>