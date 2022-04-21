<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class ProductOps extends Config{
        
        //Add Products
        public function addProd($cat_id,$sub_cat_id,$brandName,$prodName,$prodDesc,$prodPrice,$prodMrp,$prodStock,$prodImg,$prodFabric,$prodFit,$prodSize,$prodOccasion,$prodPattern,$prodWash){
                $insertQy = "insert into products(cat_id,sub_cat_id,brand_name,product_name,product_details,product_price,product_mrp,product_stock,product_img,fabric,fit,size,occasion,pattern,washcare) values ('$cat_id','$sub_cat_id','$brandName','$prodName','$prodDesc','$prodPrice','$prodMrp','$prodStock','$prodImg','$prodFabric','$prodFit','$prodSize','$prodOccasion','$prodPattern','$prodWash')";
                $data= $this->connect()->exec($insertQy); 
                return $data;
        }

        //Display all products details
        public function displayProd(){
            $selectQy = "select * from products";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display new collection - it would display all products randomly
        public function displayProdCollection(){
            $selectQy = "select * from products ORDER BY RAND() LIMIT 12";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display products by subcategory
        public function displayProdBySub($subCatId){
            $selectQy = "select * from products where sub_cat_id = $subCatId ORDER BY RAND()";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display new arrivals
        public function displayNewProd($subCatId){
            $selectQy = "select * from products where sub_cat_id = $subCatId GROUP BY cat_id ORDER BY timestamp DESC LIMIT 4";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Display limited products on homepage
        public function displaySomeProd($subCatId){
            $selectQy = "select * from products where sub_cat_id = $subCatId ORDER BY RAND() LIMIT 8";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Get similar products 
        public function getSimilarProd($prodId,$catId,$subCatId){
            // SELECT * FROM `products` WHERE product_id!=2 AND cat_id=2 ORDER BY RAND()
            $selectQy = "SELECT * FROM `products` WHERE product_id!=$prodId AND cat_id=$catId AND sub_cat_id = $subCatId ORDER BY RAND()";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Get category name by using category id
        public function getCategory($catId){
            $joinQy="SELECT category.cat_name FROM `category` JOIN `products` ON category.cat_id=products.cat_id WHERE category.cat_id='$catId'";
            $catName = $this->connect()->query($joinQy)->fetchAll();
            return $catName;
        }

        //Get subcategory name using subcategory id
        public function getSubCategory($subCatId){
            $joinQy="SELECT sub_category.sub_cat_name FROM `sub_category` JOIN `products` ON sub_category.sub_cat_id=products.sub_cat_id  WHERE sub_category.sub_cat_id='$subCatId'";
            $subCatName = $this->connect()->query($joinQy)->fetchAll();
            return $subCatName;
        }

        //Get product details using product id
        public function getProduct($prodId){
            $joinQy="SELECT * FROM products WHERE product_id = '$prodId'";
            $data = $this->connect()->query($joinQy)->fetchAll();
            return $data;
        }

        public function getAllCategory(){
            $allCatQy="SELECT * FROM category";
            $data = $this->connect()->query($allCatQy)->fetchAll();
            return $data;
        }

        //Get all subcategory details
        public function getAllSubCategory(){
            $allSubCatQy="SELECT * FROM sub_category";
            $data = $this->connect()->query($allSubCatQy)->fetchAll();
            return $data;
        }

        //Update product details
        public function updateProd($prod_id,$cat_id,$brandName,$prodName,$prodDesc,$prodPrice,$prodMrp,$prodStock,$prodImg,$prodFabric,$prodFit,$prodSize,$prodOccasion,$prodPattern,$prodWash){
            $updateQy = "UPDATE products SET cat_id='$cat_id',brand_name='$brandName',product_name='$prodName',product_details='$prodDesc',product_price='$prodPrice',product_mrp='$prodMrp',product_stock='$prodStock',product_img='$prodImg',fabric='$prodFabric',fit='$prodFit',size='$prodSize',occasion='$prodOccasion',pattern='$prodPattern',washcare='$prodWash' WHERE product_id = '$prod_id'";
            $data= $this->connect()->exec($updateQy); 
            return $data;
        }

        //Delete product 
        public function deleteProd($prodId){
            //Delete Sql query
            $deleteQy = "DELETE FROM products WHERE product_id = '$prodId'";

            $data = $this->connect()->exec($deleteQy);
            
            return $data;    
        }

        //Filter product 
        public function filterProd($checkedCategory, $subCatId, $checkedBrand,$price)
        {
            $filterQy = "SELECT * FROM products p JOIN category c ON p.cat_id = c.cat_id WHERE ";
            if (!$checkedCategory && sizeof($checkedBrand)>0) {
                $filterQy .= "p.brand_name IN(";
                foreach ($checkedBrand as $key => $value) {
                    if ($key == (sizeof($checkedBrand) - 1)) {
                        $filterQy .= "'$value'";
                    } else {
                        $filterQy .= "'$value',";
                    }
                }
                $filterQy .= ") AND (p.product_price BETWEEN $price[0] AND $price[1])";
            } else if (!$checkedBrand && sizeof($checkedCategory)>0) {
                $filterQy .= "c.cat_name IN(";
                foreach ($checkedCategory as $key => $value) {
                    if ($key == (sizeof($checkedCategory) - 1)) {
                        $filterQy .= "'$value'";
                    } else {
                        $filterQy .= "'$value',";
                    }
                }
                $filterQy .= ") AND (p.product_price BETWEEN $price[0] AND $price[1])";
            }else if(sizeof($checkedCategory) == 0 && sizeof($checkedBrand) == 0){
                $filterQy .= "(p.product_price BETWEEN $price[0] AND $price[1])";
            } 
            else {
                $filterQy .= "c.cat_name IN(";
                foreach ($checkedCategory as $key => $value) {
                    if ($key == (sizeof($checkedCategory) - 1)) {
                        $filterQy .= "'$value'";
                    } else {
                        $filterQy .= "'$value',";
                    }
                }
                $filterQy .= ") AND p.brand_name IN(";
                foreach ($checkedBrand as $key => $value) {
                    if ($key == (sizeof($checkedBrand) - 1)) {
                        $filterQy .= "'$value'";
                    } else {
                        $filterQy .= "'$value',";
                    }
                }
                $filterQy .= ") AND (p.product_price BETWEEN $price[0] AND $price[1])";
            }
            $filterQy .= "AND p.sub_cat_id = '$subCatId'";
            $data = $this->connect()->query($filterQy)->fetchAll();
            return $data;
        }

        public function getAllBrand()
        {
            $allBrandQy = "SELECT DISTINCT brand_name FROM products";
            $data = $this->connect()->query($allBrandQy)->fetchAll();
            return $data;
        }
    }
?>