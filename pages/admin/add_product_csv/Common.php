<?php


class Common
{
  public function uploadData($connection,$cat_id,$brand_name,$product_name,$product_details, $product_price,$product_mrp,$product_stock,$product_img,$product_code,$country_origin)
  {
      $mainQuery = "INSERT INTO  products SET cat_id='$cat_id',brand_name='$brand_name',product_name='$product_name',product_details='$product_details',product_price='$product_price',product_mrp='$product_mrp',product_stock='$product_stock',product_img='$product_img',product_code='$product_code',country_origin='$country_origin'";
      $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
      return $result1;
  }
}

?>
