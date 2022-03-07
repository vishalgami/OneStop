<?php
session_start();
include("db_conx.php");



if(!isset($_SESSION["admin_id"]))

{

  header("location: ../signin.php");

  exit();

}

?>

<html>

<head>
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173656756-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-173656756-1');
</script>

	<meta charset="UTF-8">

	<title>Admin Panel-Product Details</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	

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

	<link rel="stylesheet" href="product_details.css">

	<link rel="icon" type="img/ico" href="../SAMARTH LOGO.ico">

</head>

<body>



<div class="wrapper">



	<div class="top_navbar">

		<div class="logo">

			<a href="../loggedindex.php" class="icon">

			<span class="icon"><img src="../SAMARTH LOGO.png"></i></span>ABC</a>

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

	    	<a href="products.php"><i class="fa fa-reply" aria-hidden="true"> Back to Products page</i></a><br><br>

	    	<p style="font-size: 24px; margin-bottom:20px;">Product Details</p>

	    	

	    	
 						 <table class="table ">

					    <thead>

					      <tr>

					      	<th>Field name</th>

					      	<th>Product Details</th>

					  
					      </tr>



					    </thead>

                <tbody>

					    

						<?php

	    $product_id=$_REQUEST['id'];

        $select = mysqli_query($conx, "select * from products where product_id=$product_id");

        $i = 1;

        while ($row = mysqli_fetch_assoc($select)) {

        		$cat=$row['cat_id'];

            //print_r($row);

            ?>

            <tr>

              <!--   <td data-label="Id:"><?php echo $i; ?></td> -->

                <?php 

                 $select2 = mysqli_query($conx, "select * from category where cat_id='$cat'");

                	while ($row2 = mysqli_fetch_assoc($select2)) {

                		?>
                <td><b>Category</b></td>
                 <td data-label="Category:" style="white-space: pre;" ><?php echo $row2["cat_name"]; ?></td>

                 	<?php

                 		}

                 	?>
                </tr>

                <tr> 	
                 <td><b>Brand Name</b></td>
                <td data-label="Brand name:" ><?php echo $row["brand_name"]; ?></td>
               </tr>

               <tr>
               	 <td><b>Product Name</b></td>
                <td data-label="Product name:" style="white-space: pre;" ><?php echo $row["product_name"]; ?></td>
               </tr>

               <tr>
               	<td><b>Product Image</b></td>
				<td data-label="Product Image:"  >

					<?php

					   $res=$row['product_img'];

					   $res=explode(",",$res);

					   $count=count($res)-1;

					   /*for($a=0;$a<$count;++$a)

					   {

					   	?>

					   	<img src="upload/<?= $res[$a]?>" 

					   	<?php

					   }

					   ?>*/

					   

					?> 

					<img src="../Products Images/<?php echo $row['brand_name'];?>/<?php  

					$res=$row['product_img'];

					   $res=explode(",",$res);

					   $count=count($res)-1;

					   if($count>1){

					   	echo $res[$a=0];

					   	}

					   	else{

					   		echo $res[$a=0];

					   	} 

					   ?>" 

					 style=" height:70px; width:70px; object-fit: contain;"></td>
				</tr>
				
				<tr>	 
				<td><b>Product details</b></td>
				<td data-label="Description:" style="white-space: pre;"><?php echo $row["product_details"]; ?></td>
				</tr>

				<tr>
					<td><b>Product Stock</b></td>
                <td data-label="Stock:"><?php echo $row["product_stock"]; ?></td>
            	</tr>
                
                <tr>
                	<td><b>Product Price</b></td>
                <td data-label="Price:"><?php echo $row["product_price"]; ?></td>
           		</tr>

           		<tr>
           			<td><b>Product MRP</b></td>
                <td data-label="MRP:"><?php echo $row["product_mrp"]; ?></td>
            	</tr>

            	<?php if(!empty($row["colour"])){ ?>
				<tr>	
					<td><b>Product Code</b></td>
				<td data-label="Model Number:"><?php echo $row["product_code"]; ?></td>
				</tr>
				<?php } ?>



				<?php if(!empty($row["colour"])){ ?>
				<tr>
					<td><b>Colour</b></td>
				<td data-label="Colour:"><?php echo $row["colour"]; ?></td>
				</tr>
			   <?php } ?>


			   <?php if(!empty($row["shape"])){ ?>
				<tr>
					<td><b>Shape</b></td>
				<td data-label="Shape:"><?php echo $row["shape"]; ?></td>
				</tr>
				<?php } ?>

				<?php if(!empty($row["size"])){ ?>
				<tr>
					<td><b>Size</b></td>
				<td data-label="Size:"><?php echo $row["size"]; ?></td>
				</tr>
				<?php } ?>
				
				<?php if(!empty($row["material"])){ ?>	
				<tr>
				<td><b>Material</b></td>	
				<td data-label="Material:"><?php echo $row["material"]; ?></td>
				</tr>
				<?php } ?>
				
				<?php if(!empty($row["mfg_part_no"])){ ?>
				<tr>	
				<td><b>Manufacturer Part Number</b></td>	
				<td data-label="Mfg Part No:"><?php echo $row["mfg_part_no"]; ?></td>
				</tr>
				<?php } ?>
				
				<?php if(!empty($row["country_origin"])){ ?>
				<tr>
					<td><b>Country of origin</b></td>
				<td data-label="Country of Origin:"><?php echo $row["country_origin"]; ?></td>
				</tr>
				<?php } ?>

				<tr>
					<td><b>Update Product details</b></td>
				<td data-label="Action:"><a href="upprod.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-success">Update</button></a></td>
			</tr>

				<tr>
					<td><b>Remove Product</b></td>
				<td data-label="Action:"><a href="delete_product.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
				</tr>

                



            <!-- </tr> -->

            <?php

            // $i++;

        }

        ?>

					   



					      

					    </tbody>

					 </table>

					

	    	

	    </div>

	</div>

</div>

	



</body>

</html>

<?php include("db_conx_close.php");?>