<?php
require_once "dbh.class.php";

class Booking extends Dbh {

  protected function setBooking($startdate, $enddate, $productID, $customerId){
    $sql = "INSERT INTO booking (start_date, end_date, product_id, customer_id)  VALUES (?, ?, ?, ?);";
  
    print($sql);
    //die();
    print_r([$startdate, $enddate, $productID, $customerId]);
    //die();
    $conn = $this->connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$startdate, $enddate, $productID, $customerId]);
    //print($conn->lastInsertId());
    //die();
  }
  
  protected function getBooking(){
    $sql = "SELECT * FROM booking";
    $stmt = $this->connect()->prepare($sql);
    try{
      $stmt->execute();
    } catch (Exception $e){
      print($e);
      // die();
    }
    $result = $stmt->fetchAll();
    // print_r($result);
    // die();
    return $result;
  }

  protected function getCusBooking($id){
    $sql = "SELECT * FROM booking where customer_id = ?";
    $stmt = $this->connect()->prepare($sql);
    try{
      $stmt->execute([$id]);
    } catch (Exception $e){
      print($e);
      // die();
    }
    $result = $stmt->fetchAll();
    // print_r($result);
    // die();
    return $result;
  }

  protected function setCheckIn($id){
    $sql = "UPDATE booking SET checked_in_out = 1 WHERE id = ?";
    
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    
  }

  protected function setCheckOut($id){
    $sql = "UPDATE booking SET checked_in_out = 0 WHERE id = ?";
    
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    
  }

  protected function delBooking($id){
    $sql = "DELETE FROM booking WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  
  
}
