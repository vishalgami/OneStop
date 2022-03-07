<?php

include("db_conx.php");

session_start();

if(!isset($_SESSION["admin_id"]))

{

  header("location: ../signin.php");

  exit();

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

		$(document).ready(function(){

			$(".toggleArrow").click(function(){

			  $(".wrapper").toggleClass("active")

			})

		});

	</script>

	<link rel="stylesheet" href="products.css">

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

	    				<button type="submit" class="btn btn-primary" id="">Add Product Manually</button>

	    			</a><br><br>



	    			<a href="add_product_csv/add_product_csv.php">

	    				<button type="submit" class="btn btn-primary" id="">Add Products via csv file</button>

	    			</a><br>

	    			<br>







	    			 

 						 <table class="table">

					    <thead>

					      <tr>

					      	<th>Id</th>

					      	<th>Product Name</th>

					      	<th>Category</th>

					      	<th>Brand</th>

					      	

					      	<th>Product Photo</th>



					      	<!-- <th>Product Description</th> -->

					      	<th >Stock</th>

					      	<th >Price</th>

					      	<th >MRP</th>

					      	<th >Product Code</th>

					      <!-- 	<th>Colour</th>

					      	<th>Shape</th>

					      	<th>Size</th>

					      	<th>Material</th>

					      	<th>Manufacturer Part Number</th> -->

					      	<th >Country of Origin</th>

					      	<th colspan="2">Action</th>

					      	

					      </tr>



					    </thead>

                <tbody>

					    

	<?php

		//Pagination code below

        $per_page_record = 32;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;  

        /*Search query*/

        if(isset($_POST['query'])){
        	$_SESSION['s_query']=$conx -> real_escape_string ($_POST['query']);
        }
   			 $s_query = $_SESSION['s_query'];





    $sql2 = mysqli_query($conx,"SELECT * FROM `category` where cat_name LIKE '%$s_query%'");





	while($rows = mysqli_fetch_array($sql2)){

		$categ_id=$rows['cat_id'];

	}

	if(!empty($categ_id)){

    $select = mysqli_query($conx,"select * from products where `product_name` LIKE '%$s_query%' OR `product_details` LIKE '%$s_query%' OR `cat_id`='$categ_id' LIMIT $start_from, $per_page_record");

	 }else{

	 	$select = mysqli_query($conx,"select * from products where `product_name` LIKE '%$s_query%' OR `product_details` LIKE '%$s_query%' LIMIT $start_from, $per_page_record");

	 }
	

        // $select = mysqli_query($conx, "select * from products LIMIT $start_from, $per_page_record");

        $i = $start_from+1;

        while ($row = mysqli_fetch_assoc($select)) {

        		$cat=$row['cat_id'];

            //print_r($row);

            ?>

            <tr>

                <td data-label="Id:"><?php echo $i; ?></td>
                
                 <td data-label="Product name:" style=" width:190px" ><a href="product_details.php?id=<?php echo $row['product_id'];?>"><?php echo $row["product_name"]; ?></a></td>

                <?php 

                 $select2 = mysqli_query($conx, "select * from category where cat_id='$cat'");

                	while ($row2 = mysqli_fetch_assoc($select2)) {

                		?>

                 <td data-label="Category:" style="white-space: pre;"><?php echo $row2["cat_name"]; ?></td>

                 	<?php

                 		}

                 	?>

                <td data-label="Brand name:" style=" width:50px"><?php echo $row["brand_name"]; ?></td>

               

				<td data-label="Product photo:"  style=" width:30px">

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

				<!-- <td data-label="Description:" style="white-space: pre;"><?php echo $row["product_details"]; ?></td> -->

                <td data-label="Stock:" style=" width:20px"><?php echo $row["product_stock"]; ?></td>

                <td data-label="Price:" style=" width:20px"><?php echo $row["product_price"]; ?></td>

                <td data-label="MRP:" style=" width:20px"><?php echo $row["product_mrp"]; ?></td>

				<td data-label="Product Code:" style=" width:20px"><?php echo $row["product_code"]; ?></td>

				<!-- <td data-label="Colour:"><?php echo $row["colour"]; ?></td>

				<td data-label="Shape:"><?php echo $row["shape"]; ?></td>

				<td data-label="Size:"><?php echo $row["size"]; ?></td>

				<td data-label="Material:"><?php echo $row["material"]; ?></td>

				<td data-label="Mfg Part No:"><?php echo $row["mfg_part_no"]; ?></td> -->

				<td data-label="Country of Origin:" style=" width:5px"><?php echo $row["country_origin"]; ?></td>

				<td data-label="Action:" style=" width:50px"><a href="upprod.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-success">Update</button></a></td>

				<td data-label="Action:" style=" width:50px"><a href="delete_product.php?id=<?php echo $row['product_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>

                



            </tr>

            <?php

            $i++;

        }

        ?>

					   



					      

					    </tbody>

					 </table>

					
			<!--pagination-->
				<center>
				     <div class="pagination">    
				      <?php  

				      /*Search query*/

						  

						    $s_query = $_SESSION['s_query'];





						    $sql2 = mysqli_query($conx,"SELECT * FROM `category` where cat_name LIKE '%$s_query%'");





							while($rows = mysqli_fetch_array($sql2)){

								$categ_id=$rows['cat_id'];

							}

							if(!empty($categ_id)){

						    $query = "select COUNT(*) from products where `product_name` LIKE '%$s_query%' OR `product_details` LIKE '%$s_query%' OR `cat_id`='$categ_id'";

							 }else{

							 	$query = "select COUNT(*) from products where `product_name` LIKE '%$s_query%' OR `product_details` LIKE '%$s_query%'";

							 }
							

				        // $query = "SELECT COUNT(*) FROM products";     
				        $rs_result = mysqli_query($conx, $query);     
				        $row = mysqli_fetch_row($rs_result);     
				        $total_records = $row[0];     
				          
				    echo "</br>";     
				        // Number of pages required.   
				        $total_pages = ceil($total_records / $per_page_record);     
				        $pagLink = "";       
				      
				        if($page>=2){   
				            echo "<a href='products_search.php?page=".($page-1)."' class='btn'>  Prev </a>"."&nbsp&nbsp";   
				        }       
				        
				        if($total_pages>=5){
				         $count1=$page+4;
				         if($count1<$total_pages){
				            $record1=$count1;
				         }
				         else{

				            $record1 = $total_pages;

				         }

				     	}
				     	else{
				     		$record1=$page;

				     	}
				     	if($total_pages>=5){
				     		$init=$record1-4;
				     	}
				     	else{
				     		$init=$record1;
				     	}
				        for ($i=$init; $i<=$record1; $i++) {  
				          if ($i == $page) {   
				              $pagLink .= "<a class = 'btn active' href='products_search.php?page="  
				                                                .$i."'>".$i." </a>";   
				          }               
				          else  { 
				            
				              $pagLink .= "<a href='products_search.php?page=".$i."' class='btn'>   
				                                                ".$i." </a>"; 
				                
				          }   
				        };     
				        echo $pagLink;   
				  
				        if($page<$total_pages){   
				            echo "<a href='products_search.php?page=".($page+1)."' class='btn'>  Next </a>";   
				        }   
				  		
				      ?>    
				      </div>  <br>
				  
				      

				      <div class="search_pagein">   
					      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
					      placeholder="<?php echo $page."/".$total_pages; ?>" style="width:60px; height:35px;" required>   &nbsp&nbsp
					      <button onClick="go2Page();" class="btn" style="background-color: #337ab7; color:white;">Go</button>   
				      </div>
				     
				</center> 

	    </div>
<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'products_search.php?page='+page;   
    }   
 </script> 
	</div>

</div>

	




</body>

</html>

<?php include("db_conx_close.php");?>