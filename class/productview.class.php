<?php
require_once "product.class.php";

class ProductView extends Product {

  public function showProducts($type){
    $products = $this->getProduct($type);

    return $products;
  }

  public function showSingleProduct($id) {
    $product = $this->getSingleProduct($id);

    return $product;
  }
  
  
}

?>
