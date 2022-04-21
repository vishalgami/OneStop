<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class CartOps extends Config{
        //Add userId, productId and product quantity into cart
        public function addToCart($userId,$prodId,$prodQty){
            $insertQy = "insert into cart(user_id,product_id,product_quantity) values ('$userId','$prodId','$prodQty')";
            $data= $this->connect()->exec($insertQy); 
            return $data;
        }

        //Check products in cart
        public function checkProductInCart($userId,$prodId){
            $selectQy = "select * from cart where user_id = $userId AND product_id=$prodId";
            $data = $this->connect()->query($selectQy)->fetchAll();
            return $data;
        } 

          //Update product details
        public function updateQuantity($userId,$cartId,$prodQty){
            $updateQy = "UPDATE cart SET product_quantity='$prodQty' WHERE user_id = '$userId' AND cart_id='$cartId'";
            $data= $this->connect()->exec($updateQy); 
            return $data;
        }

        //Display all cart items for user
        public function showAllCartItems($userId){
            $selectQy = "select * from cart c join products p where c.product_id = p.product_id AND c.user_id = $userId";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Delete product from cart
        public function removeProdFromCart($userId,$cartId){
            //Delete Sql query
            $deleteQy = "DELETE FROM cart WHERE cart_id = '$cartId' AND user_id = '$userId'";

            $data = $this->connect()->exec($deleteQy);
            
            return $data;    
        }
    }
?>