<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class AddAddressOps extends Config{        

          //Add Address details
          public function AddAddress($userId,$name,$phone,$address1,$address2,$city,$state,$country,$pincode){
            $insert = "insert into address(user_id,name,mob_num,address_1,address_2,city,state,country,pincode) values
             ('$userId','$name','$phone','$address1','$address2','$city','$state','$country','$pincode')";
            $insertQy = $this->connect()->exec($insert); 
            return $insertQy;
        }
    }
?>