<?php

//Database configuration
    class Config{
        public $DB_HOST = "localhost";
        public $DB_USER="root";
        public $DB_PASSWORD="";
        public $DB_DATABASE="onestop";

        public function connect(){
            try{
            
                $conn = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_DATABASE",$this->DB_USER,$this->DB_PASSWORD);
                
                //set the PDO error mode to exception 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // return $conn;
            }catch (Exception $ex){
                echo "Database connection have failed - ".$ex->getMessage();
                die();
            }
            return $conn;
        }
    }
?>