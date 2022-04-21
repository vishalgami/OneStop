<?php 
    if(!isset($_SESSION)){
        session_start();
    }

    require_once('../../includes/templates/OrderOps.php');

	require_once('../../includes/templates/ProductOps.php');

	require_once('../../includes/templates/ProfileOps.php');

	$orderOp = new OrderOps();

	$prodOp = new ProductOps();

	$profileOp = new ProfileOps();

	if(isset($_POST['confirm_order'])){
		$orderId = $_POST["order_id"];
		$mailTo = $_POST["mail_to"];
		$customerName = $_POST["customer_name"];
		$productName = $_POST["product_name"];
		$orderOp->order_confirmed_mail($orderId,$mailTo,$customerName,$productName);
	}

	if(isset($_POST['out_for_delivery'])){
		$orderId = $_POST["order_id"];
		$mailTo = $_POST["mail_to"];
		$customerName = $_POST["customer_name"];
		$productName = $_POST["product_name"];
		$orderOp->order_out_for_delivery_mail($orderId,$mailTo,$customerName,$productName);
	}

	if(isset($_POST['order_delivered'])){
		$orderId = $_POST["order_id"];
		$mailTo = $_POST["mail_to"];
		$customerName = $_POST["customer_name"];
		$productName = $_POST["product_name"];
		$orderOp->order_delivered_mail($orderId,$mailTo,$customerName,$productName);
	}
?>
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
							<th>Order Total</th>
							<th>Order Placed By</th>
							<th>Order placed date</th>
							<th>Ship To</th>
							<th>Shipping Address</th>
							<th>Delivery status</th>
							<th>Place Order</th>
							<th>Order Out for Delivery</th>
							<th>Order Delivered</th>
						</tr>
					</thead>
					<tbody>
						<!-- Table Body -->
						<?php 
							$id = 0;
							$data = $orderOp->displayOrders();
							foreach($data as $row){
								$orderId = $row["order_id"];
								$addressId = $row["address_id"];
								$userId = $row["user_id"];
								$deliveryStatus = $row["delivery_status"];
								$orderTotal = $row["order_total_price"];
								$orderPlacedDate = $row["order_placed_date"];
								$orderConfirmedDate = $row["order_confirmed_date"];
								$orderOutForDeliveryDate = $row["order_out_for_delivery_date"];
								$orderDeliveredDate = $row["order_delivered_date"];

								//Get billing name 
								$userDetails = $profileOp->displayProfile($userId);
								foreach($userDetails as $userData){
									$userName = $userData["username"];
									$userMobile = $userData["mobile"];
									$userEmail = $userData["email"];
								}

								//Get the address details
								$addressDetails = $orderOp->getAddressDetails($addressId);
								foreach($addressDetails as $addressData){
									$custName = $addressData["name"];
									$custMob = $addressData["mob_num"];
									$address_1 = $addressData["address_1"];
									$address_2 = $addressData["address_2"];
									$city = $addressData["city"];
									$state = $addressData["state"];
									$country = $addressData["country"];
									$pincode = $addressData["pincode"];
								}
								$id += 1;
						?>
							<tr>
								<td><?php echo $id;?></td>
								<td><?php echo $orderId;?></td>
								<td style="text-align:left;">
									<?php 
									//Get the order details 
									$orderDetails = $orderOp->getOrderDetails($orderId);
									$allProdName = "";	
									foreach($orderDetails as $orderDet){
										$prodId = $orderDet["product_id"];
										$unit_price = $orderDet["unit_price"];
										$product_quantity = $orderDet["product_quantity"];
									
									
									//Get the product details 
									$prodDetails = $prodOp->getProduct($prodId);
									foreach($prodDetails as $prodData){
										$prodId = $prodData["product_id"];
										$prodName = $prodData["product_name"]; 
										$prodBrand = $prodData["brand_name"]; 
										$prodPhoto = $prodData["product_img"]; 
										$prodImg = explode(",",$prodPhoto);

										$allProdName = $prodName." (Qty:".$product_quantity."), ".$allProdName;
									?>
									<img class="myImg" id="myImg<?php echo $prodId;?>"  src="../../images/product/<?php echo $prodBrand."/".$prodImg[0];?>" alt="<?php echo $prodBrand." - ".$prodName;?>"  height=100 width=80>
									<?php 
										echo $prodName." (Quantity:".$product_quantity.")<br>";

											}
										} 
									?>
								</td>
								<td><?php echo "$".$orderTotal;?></td>
								<td>
									<?php echo $userName;?><br>
									<?php echo $userMobile;?><br>
									<?php echo $userEmail;?>
								</td>		
								<td><?php echo $orderPlacedDate;?></td>
								
								<td>
									<?php echo $custName;?><br>
									<?php echo $custMob;?>
								</td>
								<td style="text-align:left;"><?php echo $address_1.",<br>".$address_2.",<br>".$city.", ".$state."-".$pincode."<br>".$country;?></td>
								<td><?php echo $deliveryStatus;?></td>

								<td>
									<form method="post" action="">

										<input type="hidden" name="order_id" value="<?php echo $orderId; ?>">

										<input type="hidden" name="customer_name" value="<?php echo $userName; ?>">

										<input type="hidden" name="mail_to" value="<?php echo $userEmail; ?>">

										<input type="hidden" name="product_name" value="<?php echo $allProdName; ?>">

										<button class="btn btn-primary" id="confirm_order" name="confirm_order">Confirm Order

										</button>
									</form>
									<br>

					        	<span>

                            		<?php 

                            			if(!empty($row['order_confirmed_date'])){

                            			

                            			$o_date=$row['order_confirmed_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date;

                            			}

                            		?>

                            		

                            	</span>
							   </td>
							   <td>
							   <form method="post" action="">

									<input type="hidden" name="order_id" value="<?php echo $orderId; ?>">

									<input type="hidden" name="customer_name" value="<?php echo $userName; ?>">

									<input type="hidden" name="mail_to" value="<?php echo $userEmail; ?>">

									<input type="hidden" name="product_name" value="<?php echo $allProdName; ?>">

									<button class="btn btn-danger" id="out_for_delivery" name="out_for_delivery" >Out for Delivery

									</button>
								</form>
									<br>


					        	<span>

                            		<?php 

                            			if(!empty($row['order_out_for_delivery_date'])){

                            			

                            			$o_date=$row['order_out_for_delivery_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date;

                            			}

                            		?>

                            		

                            	</span>
								</td>
								<td>
								<form method="post" action="">

									<input type="hidden" name="order_id" value="<?php echo $orderId; ?>">

									<input type="hidden" name="customer_name" value="<?php echo $userName; ?>">

									<input type="hidden" name="mail_to" value="<?php echo $userEmail; ?>">

									<input type="hidden" name="product_name" value="<?php echo $allProdName; ?>">

									<button class="btn btn-success" id="order_delivered" name="order_delivered" >Order Delivered

									</button>
								</form>
									<br>

					        	<span>

                            		<?php 

                            			if(!empty($row['order_delivered_date'])){

                            			

                            			$o_date=$row['order_delivered_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date;

                            			}

                            		?>

                            		

                            	</span>
								</td>
							</tr>
							<?php } ?>	
					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html>