<?php 
require_once "dbh.class.php";

class Customer extends Dbh {
  protected function getCustomer($id){
    $sql = "SELECT * FROM customer WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetchAll();

    return $result;
  }

  protected function setCustomer($name, $phone, $email){
    $sql = "INSERT INTO customer (name, phone, email) VALUES (?, ?, ?);";
    $conn = $this->connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $phone, $email]);
    // print($conn->lastInsertId());
    // die();
    return $conn->lastInsertId();
  }

  protected function setSignUp($name, $phone, $email, $pwd){
    $sql = "INSERT INTO customer (name, phone, email, password) ";
    $sql .= "VALUES (?, ?, ?, ?);";
    //print_r([$name, $phone, $email, $pwd, "hi"]);
    //die();
    $conn = $this->connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $phone, $email, $pwd]);
    //print($conn->lastInsertId());
    //die();
  }
  
}
