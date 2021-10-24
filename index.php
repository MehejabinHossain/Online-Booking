<?php
require "./inc/header.inc.php";
?>
<body>
  <?php require_once "./inc/navbar.inc.php" ?>
<div class="bg-gradient-to-t from-blue-500 to-blue-800">
  <div class="container mx-auto flex items-center flex-col h-screen justify-center">
    <h1 class="text-6xl text-center text-white">Online Reservation and Booking System</h1>
    <div class="grid grid-cols-3 gap-10 pt-10">
      <a href="products.php?type=car">
	<div class="orbs-bg-img-car rounded-lg border-2 hover:border-green-700 h-60 w-96 transform 
		    hover:scale-110"></div>
	<h1 class="text-4xl text-white text-center mt-5">Vehicles Booking</h1>
      </a>
      <a href="products.php?type=resort">
	<div class="orbs-bg-img-resort rounded-lg border-2 hover:border-green-700 h-60 w-96 
		    transform hover:scale-110"></div>
	<h1 class="text-4xl text-white text-center mt-5">Resort Booking</h1>
	</a>
	<a href="products.php?type=room">
	  <div class="orbs-bg-img-hall rounded-lg border-2 hover:border-green-700 h-60 w-96 
		      transform hover:scale-110"></div>
	  <h1 class="text-4xl text-white text-center mt-5">Conference Hall Booking</h1>
	</a>
    </div>
  </div>
</div>
<?php require "./inc/footer.inc.php" ?>
