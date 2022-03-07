<?php
session_start();

include("db_conx.php");



if(!isset($_SESSION["admin_id"]))

{

  header("location: ../signin.php");

  exit();

}

?>

<!-- code to place order ,out for delivery and order delivered-->

<?php 









?>

<html>

<head>

	<meta charset="UTF-8">

	<title>Admin Panel-Order Details</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="order_details.css">

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

						

						<div class="dropdown">

						  <button class="dropbtn"><i class="fas fa-user"></i></button>

						  <div class="dropdown-content">

						    <a href="profile.php">My profile</a>

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
	    		<a href="orders.php"><i class="fa fa-reply" aria-hidden="true"> Back to Orders page</i></a><br><br>

	    	<p style="font-size: 24px; margin-bottom:20px;">Order Details</p>

	    	

	    			          

 					<table class="table">

					    <thead>

					      <tr>

					      	<th>Field Name</th>

					      	<th>Order Details</th>

					       <!--  <th>Order Id</th>

					        <th>Order placed</th>

					        <th>Order Placed By</th>

					        <th>Ship To</th>

					        <th>Shipping Address</th>

					        <th>Est. Distance</th>

					        <th>Est. Duration</th>

					        <th>Order Summary</th>

					        <th>Payment method</th>

					        <th>Payment status</th>

					        <th>Delivery status</th>

					        <th>Place Order</th>

					        <th>Order Out for Delivery</th>

					        <th>Order Delivered</th>

					        <th>Invoice</th>

					        

					        <th>Delete Order</th> -->

					      </tr>

					    </thead>

					    <?php 

                  

                     $order_id = $_REQUEST['ord_id'];

                      $query1 = "select * from  `orders` where `order_id`='$order_id';";

                      $result1 = mysqli_query($conx,$query1);

                      $i=1;

                       while($order = mysqli_fetch_array($result1)){

                       	 if(!empty($order['order_total_price'])){


                  ?>

					    <tbody>
					   	<tr>
					     	<td><b>Order Id</b></td>
					      	<td data-label="Order Id:"  style="white-space: nowrap;"><?php echo $order['order_id']; ?> </td>
					     </tr>
					      <tr>

					      <!-- 	<td data-label="Id:"><?php echo $i;?></td> -->
					      	<td><b>Product(s)</b></td>
					      	<td data-label="Product:" style="white-space:nowrap;">

					      	  <ol type="1" style="white-space:nowrap; text-align:left;" >

					      	  	<?php 

					      	  	$p_names=$order['product_name'];

					      	  	$p_n=explode(",",$p_names);

					      	  	$pr_quant= $order['product_quantity'];

                                              $pr_aquant = explode(",",$pr_quant);

                                              $count=count($pr_aquant)-1;

                                              $count_q=0;

					      	  	$x=1;



					      	  	foreach($p_n as $p_name){

					      	  		

					      	  	?>

					      		<li>

					      			<?php 



					      			echo $x.") ";?><a href="#"><?php echo $p_name."(Quantity:";$count=count($pr_aquant)-1;

                            

                            if($count_q <= $count){

                           

                            echo $pr_aquant[$count_q].")"; 

                           

                            $count_q=$count_q+1; 

                           }

                           else{

                            

                            echo "Error in calculation of quantity";

                            

                           }



					      						 $x++;

					      			?></a>

					      		</li>

					      	<?php 

					      

					      	} 

					      	?>

					      	  </ol>

					      </td>
					     </tr>
					    

					     <tr>
					     	<td><b>Order Placed Date</b></td>
					        <td data-label="Order placed date:"  style="white-space: nowrap;"><?php   

                            $o_date=$order['order_placed_date'];

                            $n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

                            echo $n_date;?>

                            	

                            	

                            </td>
                        </tr>

                        	<tr>
                        		<td><b>Order Placed by</b></td>

                            <td data-label="Order Placed By:"  style="white-space: nowrap;"><?php   

                           		$customer=$order['register_id'];

                           		$get_cust_name=mysqli_query($conx,"SELECT * FROM `registration` WHERE `register_id`=$customer;");

                           		 while($cust_name = mysqli_fetch_array($get_cust_name)){

                           		 	echo $cust_name['register_username']."(Customer Id:".$customer.")";

                           		 }



                           ?></td>
                       </tr>

                       <tr>
                       		<td><b>Ship To</b></td>

					        <td data-label="Ship To:" style="white-space: nowrap;"><?php echo $order['customer_name'];?></td>
					    </tr>

					    <tr>

					    	<td><b>Shipping Address</b></td>

					        <td data-label="Shipping Address:" style="white-space: nowrap; text-align:left;" >

					        	

					        	<?php 

                                           
					        		if(!empty($order['address_1'])):
                                            

                                            echo $order['address_1'] .'<br>'; 



                                            echo $order['address_2'] .'<br>'; 

                                            echo $order['city'] .","; echo $order['state'].","  .'<br>';

                                            

                                            echo $order['country'] ."-".$order['pincode'] .'<br>'; 

                                            echo 'Phone:'.$order['mob_num'];

                                           
                                        endif;


                                           ?>

                                           </td>

                             </tr>

                             <tr>

                             <td><b>Est. Distance</b></td>
                             <td data-label="Est. Distance:">

								 <?php echo $order['distance'];?></td>

							</tr>
							
							<tr>	 

								
								<td><b>Est. Duration</b></td>
								<td data-label="Est. Duration:">

									 <?php echo $order['duration'];?></td> 

	                            <?php } ?>
                        	</tr>

					        <tr>
					        	<td><b>Order Summary</b></td>

					        <td data-label="Order Summary:">



					        	 <?php 

                        $shipping=0;

                        $total = $order['product_init_price'];

                        $distance = explode(' ',$order['distance']);

                          if($distance[0] >= '3'){

                               $shipping = $total*0.03;

                               if($shipping<'49.00'){

                                  $shipping=49.00;

                               }



                          }

                          else {

                            $shipping=0;

                          }


                                      $subtotal = $order['product_init_price'];

                                      $shipping_charges=$shipping;

                                      

                                      //$shipping_charges = $order[''];



                                      $total=$subtotal+$shipping_charges;



                                     if(!empty($order['promo_discount'])){

                                      $promo= $order['promo_discount'];



                                      //$promo=$order[''];

                                      

                                      $grand_total=$total - $promo;



                                    }

                                    

                                    else{

                                        $grand_total=$total;

                                    }



                        

                        ?>


                                       Item(s) Subtotal: ₹<?php echo number_format($subtotal,2);?><br>

                                       Shipping:  <?php echo "+  ₹".number_format($shipping_charges,2);?> <br>

                                       Total:    <?php echo "₹".number_format($total,2);?><br>

                                        <?php if(!empty($order['promo_discount'])){   

                                               echo "Promotion Applied:"."-₹".number_format($promo,2) ."<br>"; 

                                            }

                                        ?>
								Grand Total:  <?php echo "₹".number_format($grand_total,2);?>
									

							</td>

						</tr>

						<tr>
							<td><b>Payment Method</b></td>
					        <td data-label="Payment Method:"><?php 

                                        $payment_method=$order['payment_method'];

                                        if($payment_method=='PPI'){

                                          echo "Paytm Wallet";

                                        }

                                          elseif ($payment_method=='CC') {

                                          echo "Credit Card";

                                          }

                                          elseif($payment_method=='DC'){

                                            echo "Debit Card";

                                          }

                                          elseif($payment_method=='NB'){

                                            echo "Net Banking";

                                          }

                                          else{

                                            echo  $payment_method;

                                          }

                                   ?></td>
                            </tr>

                            <tr>
                            	<td><b>Payment Status</b></td>

					        <td data-label="Payment Status:"><?php 

					        	$payment_status=$order['payment_status'];

					        	if($payment_status=='TXN_SUCCESS')

					        	{

					        		echo 'Done';

					        	}

					        	elseif($payment_status=='TXN_FAILED'){

					        		echo 'Failed';

					        	}

					        	else{

					        		echo 'Pending';

					        	}

					        ?></td>
					    </tr>

					    <tr>
					    	<td><b>Delivery Status</b></td>
					        <td data-label="Delivery Status:"><?php echo $order['delivery_status'];?>

					        </td>

					    </tr>

					        <?php $customer=$order['register_id'];

                           		$get_cust_name=mysqli_query($conx,"SELECT * FROM `registration` WHERE `register_id`=$customer;");

                           		 while($cust_name = mysqli_fetch_array($get_cust_name)){

                           		 	$email=$cust_name['register_email'];

                           		 	$customer_name=$cust_name['register_username'];

                           		 } ?>

                          <tr>
                          	<td><b>Place Order</b></td>
					        <td data-label="Action:">

					        	<form method="post" action="order_placed_mail.php">

					        		<input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">

					        		<input type="hidden" name="customer_name" value="<?php echo $customer_name; ?>">

					        		<input type="hidden" name="mail_to" value="<?php echo $email; ?>">

					        		<input type="hidden" name="product_name" value="<?php echo $order['product_name']; ?>">

					        		<input type="hidden" name="product_name" value="<?php echo $order['product_name']; ?>">
					        		<input type="hidden" name="mob_num" value="<?php echo $order['mob_num']; ?>">



					        		<button class="btn btn-primary" id="place_order" name="place_order" onclick="place_order()" >Order Placed

					        		</button>

					        	</form>

					        	<br>

					        	<span>

                            		<?php 

                            			if(!empty($order['order_confirmed_date'])){

                            			

                            			$o_date=$order['order_confirmed_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date;

                            			}

                            		?>

                            		

                            	</span>

					      	</td>
					      </tr>


					      <tr>
					      	<td><b>Order Out for Delivery</b></td>
					      	<td data-label="Action:">

					      		<form method="post" action="out_for_delivery_mail.php">
					      			<?php 
					      					$get_dboy_det=mysqli_query($conx,"SELECT * FROM registration WHERE role_id=3");
					      					
					      						
					      						?>
					      			<select name="dboy">
					      				
					      				<?php 
					      				while($get_dboy=mysqli_fetch_array($get_dboy_det)){
					      			     echo "<option value=".$get_dboy['register_username'].">".$get_dboy['register_username']."</option>";
					      				}
					      				?>
					      			
					      			</select>

					      			
					      		
					      			<input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">

					        		<input type="hidden" name="customer_name" value="<?php echo $customer_name; ?>">

					        		<input type="hidden" name="mail_to" value="<?php echo $email; ?>">

					        		<input type="hidden" name="product_name" value="<?php echo $order['product_name']; ?>">
					        		<input type="hidden" name="mob_num" value="<?php echo $order['mob_num']; ?>">



					      			<button class="btn btn-warning" id="out_for_delivery" name="out_for_delivery"

					      			onclick="out_for_delivery()">Out for Delivery</button>

					      		</form>

					      		<br>

					        	<span>

                            		<?php 

                            			if(!empty($order['order_out_for_delivery_date'])){

                            			

                            			$o_date=$order['order_out_for_delivery_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date."<br>";

											echo "Delivery Boy: ".$order['delivery_boy'];

                            			}

                            		?>

                            		

                            	</span>

					      	</td>
					      </tr>

					      <tr>
					      	<td><b>Order Delivered</b></td>


					      	<td data-label="Action:">

								<form method="post" action="order_delivered_mail.php">

									<input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">

					        		<input type="hidden" name="customer_name" value="<?php echo $customer_name; ?>">

					        		<input type="hidden" name="mail_to" value="<?php echo $email; ?>">

					        		<input type="hidden" name="product_name" value="<?php echo $order['product_name']; ?>">
					        		<input type="hidden" name="mob_num" value="<?php echo $order['mob_num']; ?>">



					      			<button class="btn btn-success" id="order_delivered" name="order_delivered" onclick="order_delivered()">Order Delivered</button>

					      		</form>

					      		<br>

					        	<span>

                            		<?php 

                            			if(!empty($order['order_delivered_date'])){

                            			

                            			$o_date=$order['order_delivered_date'];

											$n_date = date("D,d-M-Y,h:i a", strtotime($o_date));

											echo $n_date;

                            			}

                            		?>

                            		

                            	</span>

					      	</td>
					      </tr>

					      <tr>

					      	<td><b>Invoice</b></td>

					      	

					        <td data-label="Action:">

					        <form method='post' action='Invoice'>

					         <input type="hidden" name="order_id" value="<?php  echo $order['order_id']; ?>">

					         <input type="submit" class="btn btn-primary" name="generate_invoice"value="Generate Invoice">

					        </form>

					        </td>
					    </tr>



					        <tr>
					        	<td><b>Delete Order</b></td>

					       	<td ><a href="delete_order.php?id=<?php echo $order['order_id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
					       </tr>

					       	

					      <!-- </tr>  -->

					      

					      

					    </tbody>

						<?php

							$i++;

							 

							}

							

						?>

					 </table>

					 </div>

	    		

	</div>

</div>



<!--Didn't worked,but try to complete it -->

<!--<script>



function place_order() {

  document.getElementById("place_order").disabled = true;

}



function out_for_delivery() {

  document.getElementById("out_for_delivery").disabled = true;

}



function order_delivered() {

  document.getElementById("order_delivered").disabled = true;

}



</script>-->



</body>

</html>

<?php include("db_conx_close.php");?>