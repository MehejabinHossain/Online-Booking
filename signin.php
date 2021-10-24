<?php
require_once "./inc/header.inc.php";
require_once "./class/productview.class.php";
?>

<body>
  <?php require_once "./inc/navbar.inc.php" ?>
  <div class="bg-yellow-300 py-10 ">
    <h1 class="text-2xl text-center font-bold">CUSTOMER SIGN UP</h1>
  </div>
  <div class="container mx-auto">
    <div class="flex justify-between items-center pt-10">
      <form method="POST" action="inc/signup.inc.php"
	      class="grid grid-cols-1 gap-5">
	  <div class="flex" >
	    <span class="border bg-gray-200 py-3 px-10 w-40">Full Name</span>
	    <input name="name" type="text" class="py-3 px-10 border flex-grow" />
	  </div>
	  <div class="flex" >
	    <span class="border bg-gray-200 py-3 px-10 w-40">Phone:</span>
	    <input name="phone" type="text" class="py-3 px-10 border flex-grow"/>
	  </div>
	  <div class="flex" >
	    <span class="border bg-gray-200 py-3 px-10 w-40">Email</span>
	    <input name="email" type="email"
		   class="py-3 px-10 border flex-grow" />
	  </div>
	  <div class="flex" >
	    <span class="border bg-gray-200 py-3 px-10 w-40">Password</span>
	    <input name="password" type="password"
		   class="py-3 px-10 border flex-grow" />
	  </div>
	  <button class="px-5 py-2 bg-green-500 text-white rounded"
		  type="submit" name="submit">
	    SIGN UP
	  </button>
      </form>
    </div>
  </div>
  <?php require_once "./inc/footer.inc.php" ?>
