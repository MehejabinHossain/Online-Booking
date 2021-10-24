<?php session_start(); ?>
<nav class="container mx-auto py-3">
  <ul class="flex justify-around items-center">
    <li class="p-3 bg-blue-500 text-white rounded">
      <i class="fas fa-home pr-2"></i>
      <a href="index.php">HOME</a>
    </li>
    <?php
    if(!isset($_SESSION['user_id'])){
    ?>
      <div class="flex items-center">
    <li class="mr-2">
      <a href="login.php?type=cus"
	 class="bg-blue-500 text-white py-3 px-3 rounded">
 LOG IN
      </a>
    </li>
        <li class="py-2">
	  <a href="./signin.php"
	     class="bg-blue-500 text-white py-3 px-3 rounded">
	    SIGN UP
	  </a>
	</li>
      </div>
    <?php
    } else {
    ?>
      <?php if(isset($_SESSION['isAdmin'])){ ?>
    <li class="py-2">
      <i class="fas fa-cash-register pr-2"></i>
      <a href="checkinout.php">CHECK IN/OUT</a>
    </li>
      <?php } else { ?>
	<li class="py-2">
	  <i class="fas fa-cash-register pr-2"></i>
	  <a href="customer.php">ALL BOOKINGS</a>
	</li>
      <?php } ?>
      <li class="flex items-center">
	<p class="mr-5">Welcome, <?= $_SESSION['user_name'] ?></p>
      <a href="./inc/logout.inc.php"
	 class="bg-red-500 text-white py-1 px-2 rounded">
	LOG OUT
      </a>
    </li>
    <?php
    }
    ?>
  </ul>
</nav>
