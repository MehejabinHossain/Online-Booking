<?php
require_once "customer.class.php";

class CustomerView extends Customer {

  public function showSingleCustomer($id) {
    $customer = $this->getCustomer($id);

    return $customer;
  }
  
}

?>
