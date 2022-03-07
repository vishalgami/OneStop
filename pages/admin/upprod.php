<?php

session_start();
include("db_conx.php");

if(!isset($_SESSION["admin_id"]))
{
  header("location: ../signin.php");
  exit();
}


if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "select * from  `products` where `product_id`='".$id."';";
  $result1 = mysqli_query($conx,$query);
  $row = mysqli_fetch_array($result1);
  $cat=$row['cat_id'];
}

if(isset($_POST['submit'])){
	$cate=$_POST['cat'];
	$brand=strtolower($_REQUEST['brand']);
	$prod=mysqli_real_escape_string($conx,$_REQUEST['product']);
	$prod_detail=mysqli_real_escape_string($conx,$_REQUEST['prod_detail']);
	$price=$_REQUEST['price'];
	$mrp=$_REQUEST['mrp'];
	$stock=$_REQUEST['instock'];
	$prod_code=$_REQUEST['prod_code'];
	$color=$_REQUEST['color'];
	$shape=$_REQUEST['shape'];
	$size=$_REQUEST['size'];
	$material=$_REQUEST['material'];
	$mfgpartno=$_REQUEST['mpartno'];
	$country_org=$_REQUEST['country_org'];


    /*$file_name = $_FILES['image']['name'];
    $temp_directory = $_FILES['image']['tmp_name'];
    move_uploaded_file($temp_directory,"../Products Images/".$file_name);*/
  
  if ( isset( $_FILES["image"] ) && !empty( $_FILES["image"]["name"] ) ) {
    
      // everything okay, do process
    $data='';
    foreach($_FILES['image']['tmp_name'] as $key => $image){
	 $imageName = $_FILES['image']['name'][$key];
	 $imageTmpName = $_FILES['image']['tmp_name'][$key];
	 
    move_uploaded_file($imageTmpName,"../Products Images/".$brand."/".$imageName);
    $data .=$imageName.",";
	$sql2 = "UPDATE `products` SET  `product_img`='$data' WHERE `product_id`='$id'";
	$result2 = mysqli_query($conx,$sql2);
   }
 }

    

    // print_r($_FILES);
// die;

    $sql = "UPDATE `products` SET  `cat_id`='$cate',`brand_name`='$brand',`product_name`='$prod',`product_details`='$prod_detail',`product_price`='$price',`product_mrp`='$mrp',`product_stock`='$stock',`product_code`='$prod_code',`colour`='$color',`shape`='$shape',`size`='$size',`material`='$material',`mfg_part_no`='$mfgpartno',`country_origin`='$country_org'  WHERE `product_id`='$id'";
		

     $result1 = mysqli_query($conx,$sql);
     if (mysqli_query($conx, $sql)) {
     echo "Record updated successfully";
     header("location:products.php");
  }
   else {
    echo "Error updating record: " . mysqli_error($conx);
  }

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
	<title>Admin Panel-Update Product Details </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
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
						<span id="adminID">Admin</span>
						<div class="dropdown">
						  <button class="dropbtn"><i class="fas fa-user"></i></button>
						  <div class="dropdown-content">

						  	<a href="profile.php">My Profile</a>
						    <a href="logout_admin.php">Logout</a>

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
		            <a href="dboydetail.php">
		              <span class="icon"><i class="fas fa-shipping-fast"></i></span>
		              <span class="list">Delivery Boy Details</span>
		            </a>
		          </li>
		          <li>
		            <a href="categories.php" title="Categories" >
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
		            <a href="#" class="icon">
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
	    	<p style="font-size: 24px; margin-bottom:20px;">Update Product Details</p>
	    	<div class="item_wrap">

	    		<div class="item">

	    			 <form class="" id="" method="POST" action=""  enctype="multipart/form-data">
	    			 	<?php 
		                 $select2 = mysqli_query($conx, "select * from category where cat_id='$cat'");
		                	while ($row2 = mysqli_fetch_assoc($select2)) {
                		?>
	    			 	<label>Select Category : </label>
						 <select class="border x" name="cat"  id="cat" required>
                        <option value="<?php echo $row2["cat_id"]; ?>" selected > <?php echo 
							$row2["cat_name"]; ?> </option>
							<?php
		                 		}
		                 	?>
                        <?php

                        $query3 = "SELECT * FROM category";
                        $result3 = mysqli_query($conx,$query3);
                        while($row1 = mysqli_fetch_array($result3)){
                            ?>
                            <option value=<?php echo $row1['cat_id']; ?>> <?php echo $row1['cat_name']; ?>	
																					</option>
                        <?php }?>
                    </select><hr>
					<label>Brand Name :  </label>
	    			 	<input type="text" id="brand" class="" value="<?php echo $row["brand_name"];?>" name="brand" style="width:180px; border-radius:5px;"><hr>
						 <label>Product Name :  </label>
	    			 	<input type="text" id="product" class="" value="<?php echo $row["product_name"];?>" name="product" style="width:180px; border-radius:5px;"><hr>
	    			 	<label>Product Description : </label><br>
	    			 	<textarea id="prod_detail" class=""  name="prod_detail" style="width:500px; height:100px; border-radius:10px;"><?php echo $row["product_details"];?></textarea><hr>
	    			 	
						<label>Price :  </label>
	    			 	<input type="number" id="price" class="" value="<?php echo $row["product_price"];?>" name="price" style="width:180px; border-radius:5px;"><hr>
						 <label>MRP:  </label>
	    			 	<input type="number" id="mrp" class="" value="<?php echo $row["product_mrp"];?>" name="mrp" style="width:180px; border-radius:5px;"><hr>
	    			 	<label>Stock :  </label>
	    			 	<input type="number" id="instock" value="<?php echo $row["product_stock"];?>" name="instock" class="" style="width:180px; border-radius:5px;"><hr>
	    			 	<button type=""></button>
	    			 	<label>Product Photo :  </label>
	    			 	<input id="image" type="file"  name="image[]" title = "Choose a Product photo"  class="  input-sm  " required="true" multiple><br>
			             
			          <button  type="button" id="prodspec"  name="prodspec" onclick="pdetails()"class="btn btn-primary">Update Product Specification
			          </button><br><br>

			          

			          <label id="lb1" style="display:none;">Product Code :  </label>
			          <input type="hidden" id="id1" name="prod_code" value="<?php echo $row["product_code"];?>" style="width:180px; border-radius:5px; display:inline; margin-bottom: 25px;"><br id="br1"  style="display:none;">

			          <label id="lb2" style="display:none;">Colour :  </label>
			          <input type="hidden" id="id2" name="color"  value="<?php echo $row["colour"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br2"  style="display:none;">


			          

			          <label id="lb3" style="display:none;">Shape :  </label>
			          <input type="hidden" id="id3" name="shape"  value="<?php echo $row["shape"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br3"  style="display:none;">

			          <label id="lb4" style="display:none;">Size :  </label>
			          <input type="hidden" id="id4" name="size"  value="<?php echo $row["size"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br4"  style="display:none;">

			          <label id="lb5" style="display:none;">Material :  </label>
			          <input type="hidden" id="id5" name="material"  value="<?php echo $row["material"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br5"  style="display:none;">

			          <label id="lb6" style="display:none;">Manufacturer Part Number :  </label>
			          <input type="hidden" id="id6" name="mpartno"  value="<?php echo $row["mfg_part_no"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br6"  style="display:none;">

			          <label id="lb7" style="display:none;">Country of origin:  </label>
			          <input type="hidden" id="id7" name="country_org"  value="<?php echo $row["country_origin"];?>" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br7"  style="display:none;">
			         

			          <button  type="submit" id="submit" name="submit" class="btn btn-success">Save</button>
             		 
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
  document.getElementById("id7").setAttribute("type", "text");

  document.getElementById("lb1").style.display="inline";
  document.getElementById("lb2").style.display="inline";
  document.getElementById("lb3").style.display="inline";
  document.getElementById("lb4").style.display="inline";
  document.getElementById("lb5").style.display="inline";
  document.getElementById("lb6").style.display="inline";
  document.getElementById("lb7").style.display="inline";
  //document.getElementById("color").setAttribute("type", "text");
  
  document.getElementById("br1").style.display="block";
  document.getElementById("br2").style.display="block";
  document.getElementById("br3").style.display="block";
  document.getElementById("br4").style.display="block";
  document.getElementById("br5").style.display="block";
  document.getElementById("br6").style.display="block";
  document.getElementById("br7").style.display="block";
}
</script>	

</body>
</html>
<script>

  function readURL(input) { 
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#uploadPreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#uploadImage").change(function(){
    readURL(this);
});

</script>
<?php include("db_conx_close.php");?>
