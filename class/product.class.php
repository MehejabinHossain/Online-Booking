<?php 
require_once "dbh.class.php";

class Product extends Dbh {
  
  protected function getProduct($type){
    $sql = "SELECT * FROM product_information WHERE type = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$type]);
    $results = $stmt->fetchAll();

    return $results;
  }

  protected function getSingleProduct($id){
    $sql = "SELECT * FROM product_information WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetchAll();

    return $result;
  }

  // private function setProduct(){}
}
