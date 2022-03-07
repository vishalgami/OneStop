<?php
include  "config.php";
include_once  "Common.php";

$cat_id=$_POST['cat'];
$brand_name=$_POST['brand'];

if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $product_name = $connection->real_escape_string($data[0]);
                $product_details = $connection->real_escape_string($data[1]);
                $product_price = $connection->real_escape_string($data[2]);
                $product_mrp = $connection->real_escape_string($data[3]);
                $product_stock = $connection->real_escape_string($data[4]);
                $product_img = $connection->real_escape_string($data[5]);
                $product_code = $connection->real_escape_string($data[6]);
                $country_origin = $connection->real_escape_string($data[7]);
                $common = new Common();
                $SheetUpload = $common->uploadData($connection,$cat_id,$brand_name,$product_name,$product_details, $product_price,$product_mrp,$product_stock,$product_img,$product_code,$country_origin);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='add_product_csv.php';</script>";
        }
    }
}
?>