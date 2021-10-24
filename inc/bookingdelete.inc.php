<?php
include "../class/bookingcontr.class.php";
$bookingObj = new BookingContr();

if(isset($_GET['submit'])){
  $bookingObj->deleteBooking($_GET['id']);
  header('location: ../checkinout.php');
}

?>
