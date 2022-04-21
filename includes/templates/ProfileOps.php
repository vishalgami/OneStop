<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // require_once('../../includes/config/Config.php');
    require_once(dirname(__FILE__).'../../config/Config.php');

    class ProfileOps extends Config{

        //Display all profile details
        public function displayProfile($userId){
            $selectQy = "select * from users where user_id = $userId";
            
            $data = $this->connect()->query($selectQy)->fetchAll();

            return $data;
        }

          //Update profile details
          public function updateProfile($userId,$username,$mob,$newPassword,$dob){
            $updateQy = "UPDATE users SET username='$username',mobile='$mob',password='$newPassword',dob='$dob' WHERE user_id = '$userId'";
            $data= $this->connect()->exec($updateQy); 
            return $data;
        }
    }
?>