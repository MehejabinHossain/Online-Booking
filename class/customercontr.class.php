<?php 
require_once "customer.class.php";

class CustomerContr extends Customer {

  public function addCustomerFromBooking($name, $phone, $email){
    if(isset($_SESSION['user_id']) && isset($_SESSION['isAdmin'])) {
      $customerId = $this->setCustomer($name, $phone, $email);
      return $customerId;
    } elseif (isset($_SESSION['user_id']) && !isset($_SESSION['isAdmin'])) {
      $customerId = $_SESSION['user_id'];
      return $customerId;
    } else {
      $customerId = $this->setCustomer($name, $phone, $email);
      return $customerId;
    }
  }

  public function signUp($name, $phone, $email, $pwd){
    $this->setSignUp($name, $phone, $email, $pwd);

  }
}
