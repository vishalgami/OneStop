<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    require_once('../../includes/templates/CatOps.php');

	$cat = new CatOps();

	if(isset($_POST["submit"])){
		$catName = $_POST["cname"];
		if(isset($catName)){
			$isAdded = $cat->add($catName);
			if($isAdded){
				echo "<script>alert('New Category Added Successfully!');window.location.href='./categories.php';</script>";
			}
			else{
				echo "<script>alert('Some error occured while adding category name!');</script>"; 
			}
		}
		else{
				echo "<script>alert('Please enter category name!')</script>";  
		}
	}

	if(isset($_POST["updateCat"])){
		$catId = $_POST["newCatId"];
		$newCatName = $_POST["newCatName"];
		if(isset($newCatName)){
			$isUpdated = $cat->update($catId,$newCatName);
			if($isUpdated){
				echo "<script>alert('Category Updated Successfully!');window.location.href='./categories.php';</script>";
			}
			else{
				echo "<script>alert('Some error occured while updating category name!');</script>"; 
			}
		}
		else{
				echo "<script>alert('Please enter new category name!')</script>";  
		}
	}

	if(isset($_GET["catId"])){
		$catId = $_GET["catId"];
		$isDeleted = $cat->delete($catId);
		if($isDeleted){
			echo "<script>alert('Category Deleted Successfully!');window.location.href='./categories.php';</script>";
		}
		else{
			echo "<script>alert('Some error occured while deleting category name!');</script>"; 
		}
	}


?>
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
					<?php 
							$id = 0;
							$data = $cat->display();
							foreach($data as $row){
								$catId = $row["cat_id"]; 
								$catName = $row["cat_name"]; 
								$id += 1;
						?>
							<tr>
								<td><?php echo $id;?></td>
								<td><?php echo $catName;?></td>
								<td>
									
									<div class="text-center">
										<a href="" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#updateCategory<?php echo $catName;?>">Update</a> &nbsp; &nbsp;
										<a href="./categories.php?catId=<?php echo $catId;?>" class="btn btn-danger">Delete</a>
									</div>

								</td>
							</tr>
							<!--Update Category--> 
							<div class="modal fade" id="updateCategory<?php echo $catName;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
										aria-hidden="true">
										<div class="modal-dialog modal-notify modal-warning" role="document">
											<!--Content-->
											<div class="modal-content">
												<!--Header-->
												<div class="modal-header text-center">
													<h4 class="modal-title white-text w-100 font-weight-bold py-2">Update Category Name</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true" class="white-text">&times;</span>
													</button>
												</div>

												<!--Body-->
												<div class="modal-body">
													<div class="md-form mb-5">
														<form method="post" action="">
															<label data-error="wrong" data-success="right" for="form3">Category Name</label>
															<input type="hidden" name="newCatId" value="<?php echo $catId;?>">
															<input type="text" id="form3" class="form-control validate" name="newCatName" value="<?php echo $catName;?>">
															<!--Footer-->
															<div class="modal-footer justify-content-center">
																<input type="submit" class="btn btn-success" name="updateCat"/>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>