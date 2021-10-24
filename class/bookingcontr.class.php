<?php
//session_start();
require_once "booking.class.php";

class BookingContr extends Booking {

  public function bookProduct($startdate, $enddate, $productID, $customerId) {
    //print_r([$startdate, $enddate, $productID, $customerId, $_SESSION['user_id']]);
    // die();
    if(isset($_SESSION['user_id']) && empty($_SESSION['isAdmin'])){
      $this->setBooking($startdate, $enddate, $productID, $_SESSION['user_id']);
    } else {
      $this->setBooking($startdate, $enddate, $productID, $customerId);
    }
  }

  public function allBookings(){
    $results = $this->getBooking();
    // print_r($results);
    // die();
    return $results;
  }

  public function cusBookings($id){
    $results = $this->getCusBooking($id);
    // print_r($results);
    // die();
    return $results;
  }
  
  public function checkIn($id){
    $this->setCheckIn($id);
  }
  
  public function checkOut($id){
    $this->setCheckOut($id);
  }

  public function deleteBooking($id){
    $this->delBooking($id);
  }
  
}
