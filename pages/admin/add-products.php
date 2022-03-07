<?php
// session_start();
// include("db_conx.php");



// if(!isset($_SESSION["admin_id"]))

// {

//   header("location: ../signin.php");

//   exit();

// }



// 	if(isset($_POST['submit'])){

// 	$cate=$_POST['cat'];

// 	$brand=$_REQUEST['brand'];

// 	$prod=$_REQUEST['product'];

// 	$prod_detail=$_REQUEST['prod_detail'];

// 	$price=$_REQUEST['price'];

// 	$mrp=$_REQUEST['mrp'];

// 	$stock=$_REQUEST['instock'];



// 	$prod_code=$_REQUEST['prod_code'];

// 	$color=$_REQUEST['color'];

// 	$shape=$_REQUEST['shape'];

// 	$size=$_REQUEST['size'];

// 	$material=$_REQUEST['material'];

// 	$mfgpartno=$_REQUEST['mpartno'];

// 	$country_org=$_REQUEST['country_org'];





//     /*$file_name = $_FILES['image']['name'];

//     $temp_directory = $_FILES['image']['tmp_name'];

//     move_uploaded_file($temp_directory,"../Products Images/".$file_name);*/

//     $data='';

//     foreach($_FILES['image']['tmp_name'] as $key => $image){

// 	 $imageName = $_FILES['image']['name'][$key];

// 	 $imageTmpName = $_FILES['image']['tmp_name'][$key];

	 

//     move_uploaded_file($imageTmpName,"../Products Images/".$imageName);

//     $data .=$imageName.",";



// 	}

   

   

    



//     // print_r($_FILES);

// // die;

// 	if(!empty($_REQUEST['prod_code']) && !empty($_REQUEST['color']) && !empty($_REQUEST['shape']) && !empty($_REQUEST['size']) && !empty($_REQUEST['material']) && !empty($_REQUEST['mpartno'])  && !empty($_REQUEST['country_org']) ) {  

//     $sql = "INSERT INTO `products` (`cat_id`,`brand_name`,`product_name`,`product_details`,`product_price`,`product_mrp`,`product_stock`,`product_img`,`product_code`,`colour`,`shape`,`size`,`material`,`mfg_part_no`,`country_origin`)

// 		VALUES ('$cate','$brand','$prod','$prod_detail','$price','$mrp','$stock','$data','$prod_code','$color','$shape','$size','$material','$mfgpartno','$country_org')";



	

// //    die;



	

// 	//$result = mysqli_query($conx,$sql);



// 	if(!mysqli_query($conx,$sql))

//     {

//         echo "<script>alert('Some values are missing in fields');

//         window.location.href='add-products.php';</script>";

//         // print_r($sql);

//         // die('ERROR:'.mysqli_error($conx));

//     }

//     else {

//     	echo "<script>alert('Product details are uploaded successfully');

//         window.location.href='add-products.php';</script>";

//     }

    	

//   }

// 	else{

// 		$sql = "INSERT INTO `products` (`cat_id`,`brand_name`,`product_name`,`product_details`,`product_price`,`product_mrp`,`product_stock`,`product_img`)

// 		VALUES ('$cate','$brand','$prod','$prod_detail','$price','$mrp','$stock','$data')";



// 	// print_r($sql);

// //    die;



	

// 		//$result = mysqli_query($conx,$sql);



// 		if(!mysqli_query($conx,$sql))

//     {

//         echo "<script>alert('Some values are missing');

//          window.location.href='add-products.php';</script>";

        

//     }

//     else {

    

//     	echo "<script>alert('Product details are uploaded successfully');

//         window.location.href='add-products.php';</script>";

// 	}



// 	}

		    

   

// }







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

		$(document).ready(function(){

			$(".toggleArrow").click(function(){

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

		          

		          <!-- <li>

		            <a href="dboydetail.php">

		              <span class="icon"><i class="fas fa-shipping-fast"></i></span>

		              <span class="list">Delivery Boy Details</span>

		            </a>

		          </li> -->

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

	    	<p style="font-size: 24px; margin-bottom:20px;">Add Products</p>

	    	<div class="item_wrap">



	    		<div class="item">

	    			

	    			 <form class="add_product" id="" method="POST" action=""  enctype="multipart/form-data">

	    			 	<label>Select Category : </label>

						 <select class="border x" name="cat"  id="cat" >

                        <option value=" ">Categories</option>

                        <?php

                        // $query3 = "SELECT * FROM category";

                        // $result3 = mysqli_query($conx,$query3);

                        // while($row1 = mysqli_fetch_array($result3)){

                            ?>

                            <option value=<?php 
							// echo $row1['cat_id']; 
							?> 
							<?php
							//  echo $row1['cat_name']; 
							 ?>	

						</option>

                        <?php 
						// }
						?>

                    </select><hr>



					<label>Brand Name :  </label>

	    			 	<input type="text" id="brand" class="" required="true" name="brand" style="width:180px; border-radius:5px;"><hr>

						 <label>Product Name :  </label>

	    			 	<input type="text" id="product" class=""  required="true" name="product" style="width:180px; border-radius:5px;"><hr>

	    			 	<label>Product Description : </label><br>

	    			 	<textarea id="prod_detail" class="" required="true" name="prod_detail" style="width:500px; height:100px; border-radius:10px;"></textarea><hr>

	    			 	

						<label>Price :  </label>

	    			 	<input type="number" id="price" class="" required="true" name="price" style="width:180px; border-radius:5px;"><hr>

						 <label>MRP:  </label>

	    			 	<input type="number" id="mrp" class="" required="true" name="mrp" style="width:180px; border-radius:5px;"><hr>

	    			 	<label>Stock :  </label>

	    			 	<input type="number" id="instock" required="true"  name="instock" class="" style="width:180px; border-radius:5px;"><hr>

	    			 	<button type=""></button>

	    			 	<label>Product Photo :  </label>

	    			 	<input id="image" type="file" required="true" name="image[]" title = "Choose a Product photo"  class="  input-sm  " multiple><br>

			             

			          <button  type="button" id="prodspec" name="prodspec" onclick="pdetails()"class="btn btn-primary">Add Product Specification

			          </button><br><br>



			          



			          <label id="lb1" style="display:none;">Product Code :  </label>

			          <input type="hidden" id="id1" name="prod_code" value="" style="width:180px; border-radius:5px; display:inline; margin-bottom: 25px;"><br id="br1"  style="display:none;">



			          <label id="lb2" style="display:none;">Colour :  </label>

			          <input type="hidden" id="id2" name="color"  value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br2"  style="display:none;">





			          



			          <label id="lb3" style="display:none;">Shape :  </label>

			          <input type="hidden" id="id3" name="shape"  value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br3"  style="display:none;">



			          <label id="lb4" style="display:none;">Size :  </label>

			          <input type="hidden" id="id4" name="size"  value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br4"  style="display:none;">



			          <label id="lb5" style="display:none;">Material :  </label>

			          <input type="hidden" id="id5" name="material" value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br5"  style="display:none;">



			          <label id="lb6" style="display:none;">Manufacturer Part Number :  </label>

			          <input type="hidden" id="id6" name="mpartno"  value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br6"  style="display:none;">

			         

			         <label id="lb7" style="display:none;">Country of origin :  </label>

			          <input type="hidden" id="id7" name="country_org"  value="" style="width:180px; margin-bottom: 25px; border-radius:5px; display:inline;"><br id="br7"  style="display:none;">



			          <button  type="submit" id="submit" name="submit" class="btn btn-success">Save</button>

             		 

					</form><br>





	    			

	    		</div>

	    	

	    	</div>

	    	

	    </div>

	</div>

</div>

<script>

// 	$(document).ready(function() {

//   $('.add_product').submit(function() {

//     $(this).find(':input').filter(function() { return !this.value; }).attr('disabled', 'disabled');

//     return true; // make sure that the form is still submitted

//   });

// });

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

<?php 
// include("db_conx_close.php");
?>