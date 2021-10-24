<?php
session_start();

require_once "../class/bookingcontr.class.php";

if(isset($_REQUEST['id']) && isset($_REQUEST['startdate']) && isset($_REQUEST['enddate'])) {
  // print_r($_SESSION);
  // die();
  
  $bookingObj = new BookingContr();
  
  $bookingObj->bookProduct($_REQUEST['startdate'], $_REQUEST['enddate'], $_REQUEST['id'], $_SESSION['user_id']);



  
  header('Location: ../payment.php');
  exit();
}
