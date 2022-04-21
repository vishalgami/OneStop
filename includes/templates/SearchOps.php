<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class SearchOps extends Config{

        //Display all products details
        public function displayProd($searchQuery){

            $selectQy = "select * from products where product_name LIKE '%$searchQuery%' OR product_details LIKE '%$searchQuery%' OR brand_name LIKE '%$searchQuery%' ORDER BY RAND()";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display all products with category id if search includes category name
        public function displayProdWithCatId($searchQuery,$catId){
            $selectQy = "select * from products where product_name LIKE '%$searchQuery%' OR cat_id=$catId OR product_details LIKE '%$searchQuery%' OR brand_name LIKE '%$searchQuery%' ORDER BY RAND()";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Get Category Id
        public function getCatId($searchQuery){
            $selectQy = "select * FROM `category` where cat_name LIKE '%$searchQuery%'";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }
    }
?>