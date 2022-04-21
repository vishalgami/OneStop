<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    require_once(dirname(__FILE__).'../../config/Config.php');
   
    class Auth extends Config{

        //Register user
        public function userRegister($username,$email,$password,$mob,$dob){
            $password = md5($password);
            $insert = "insert into users(username,email,password,mobile,dob) values ('$username','$email','$password','$mob','$dob')";
            $insertQy = $this->connect()->exec($insert); 
            return $insertQy;
        }

        //Check if user exist or not
        public function checkUser($email){
            $selectQy = "select * from users where email = '$email'";

            $data = $this->connect()->query($selectQy)->fetchAll();

            if($data){
                return True;
            }
            else{
                return False;
            }
        }

        //Login using email or mobile and password
        public function login($email_or_mob,$password){
            $selectQy = "select * from users where (email = '$email_or_mob' OR mobile = '$email_or_mob') AND password = '$password'";

            $data = $this->connect()->query($selectQy)->fetchAll();
            foreach($data as $row){
               $username = $row["username"]; 
               $email = $row["email"]; 
               $role_id = $row["role_id"];
               $user_id = $row["user_id"];
            }
            if($data){
                $_SESSION['login']=true;
                $_SESSION['role_id']=$role_id;
                $_SESSION['user_id']=$user_id;
                $_SESSION['username']=$username;
                $_SESSION['email'] = $email;
                return True;
            }
            else{
                return False;
            }
        }
    }
?>