<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once(dirname(__FILE__).'../../config/Config.php');

    class CatOps extends Config{

        //Add category
        public function add($cat){
            $insertQy = "insert into category(cat_name) values ('$cat')";
            $data= $this->connect()->exec($insertQy); 
            return $data;
        }

        //Update category
        public function update($catId,$catName){
            $updateQy = "update category SET cat_name = '$catName' WHERE cat_id = '$catId'";
            $data= $this->connect()->exec($updateQy); 
            return $data;
        }

        //Display category
        public function display(){
            $selectQy = "select * from category";

            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

        //Delete category
        public function delete($cid){
            //Delete Sql query
            $deleteQy = "DELETE FROM category WHERE cat_id = '$cid'";

            $data = $this->connect()->exec($deleteQy);
            
            return $data;    
        }
    }
?>