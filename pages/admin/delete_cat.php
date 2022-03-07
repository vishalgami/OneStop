<?php
include("db_conx.php");
session_start();

if(!isset($_SESSION["admin_id"]))
{
  header("location: ../signin.php");
  exit();
}

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $select= mysqli_query($conx, "DELETE FROM category WHERE cat_id = '$id'");


    header("location: categories.php");
    exit();
}
?>
<?php include("db_conx_close.php");?>