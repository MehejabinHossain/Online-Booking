<?php
// print($_POST['submit']);
// die();

if(isset($_POST['submit'])) {
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $pwd = $_REQUEST['password'];


  // print_r([$name, $phone, $email, $pwd]);
  // die();
  include "../class/customercontr.class.php";

  $signupObj = new CustomerContr();
  $signupObj->signUp($name, $phone, $email, $pwd);
  
  header('location: ../login.php?type=cus');
  exit();
}
header('location: ../index.php?error=unauthorized');
