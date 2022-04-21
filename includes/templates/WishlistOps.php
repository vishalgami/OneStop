<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class WishlistOps extends Config{
        //Add userId, productId and product quantity into cart
        public function addToWishlist($userId,$prodId){
            $insertQy = "insert into wishlist(user_id,product_id) values ('$userId','$prodId')";
            $data= $this->connect()->exec($insertQy); 
            return $data;
        }

        //check product in wishlist
        public function checkProductInWishlist($userId,$prodId){
            $selectQy = "select * from wishlist where user_id = $userId AND product_id=$prodId";
            $data = $this->connect()->query($selectQy)->fetchAll();
            return $data; 
        } 

        //check product stock before moving it to cart
        public function checkProductStock($prodId){
            $selectQy = "select * from products where product_id = $prodId";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        } 

        //display all products in wishlist
        public function displayWishlistItems($userId){
            $selectQy = "select * from wishlist w join products p where w.product_id = p.product_id AND w.user_id = $userId";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Delete product from wishlist
        public function removeProdFromWishlist($userId,$wishlistId){
            //Delete Sql query
            $deleteQy = "DELETE FROM wishlist WHERE user_id = '$userId' AND wishlist_id = '$wishlistId'";

            $data = $this->connect()->exec($deleteQy);
            
            return $data;    
        }

    }
?>