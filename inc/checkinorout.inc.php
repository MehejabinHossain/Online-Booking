<?php
include "../class/bookingcontr.class.php";
$bookingObj = new BookingContr();

if(isset($_GET['submit']) && $_GET['submit'] == 'in'){
  $bookingObj->checkIn($_GET['id']);
  header('location: ../checkinout.php');
} elseif(isset($_GET['submit'])){
  $bookingObj->checkOut($_GET['id']);
  header('location: ../checkinout.php');
}

?>
