<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class ContactOps extends Config{
        //Add userId, productId and product quantity into cart
        public function submitContactRequest($name,$email,$mob,$message){
            $insertQy = "insert into contact(name,email,mob_num,message) values ('$name','$email','$mob','$message')";
            $data= $this->connect()->exec($insertQy); 
            return $data;
        }
    }
?>