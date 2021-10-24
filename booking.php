<?php
require_once "./inc/header.inc.php";
require_once "./class/productview.class.php";
?>


<body>
  <?php require_once "./inc/navbar.inc.php" ?>
  <?php
  if(!isset($_SESSION['user_id'])) {
    // print($_SESSION['user_id']);
    // die();
    header('location: ./signin.php');
    exit();
  }
  ?>

  <div class="bg-yellow-300 py-10 ">
    <h1 class="text-2xl text-center font-bold">COMPLETE RESERVATION</h1>
  </div>
  <div class="container mx-auto">
     <div class="flex justify-between items-center">
       <div class="w-1/2 pt-10">
	 <form method="POST" action="inc/booking.inc.php?id=<?= $_GET['id'] ?>"
	       class="grid grid-cols-1 gap-5">
	   <div class="flex" >
	     <span class="border bg-gray-200 py-3 px-10 w-40">Start Date </span>
	     <input class="py-3 px-10 border flex-grow" name="startdate" type="date"  />
	   </div>
	   <div class="flex" >
	     <span class="border bg-gray-200 py-3 px-10 w-40">End Date</span>
	     <input name="enddate" type="date"  class="py-3 px-10 border flex-grow" />
	   </div>
	   <?php if(isset($_SESSION['user_id']) && !isset($_SESSION['isAdmin'])) { ?>
	     
	   <?php } else { ?>
	     <div class="flex" >
	       <span class="border bg-gray-200 py-3 px-10 w-40">Full Name</span>
	       <input name="name" type="text" class="py-3 px-10 border flex-grow"  />
	     </div>
	     <div class="flex" >
	       <span class="border bg-gray-200 py-3 px-10 w-40">Phone:</span>
	       <input name="phone" type="text" class="py-3 px-10 border flex-grow" />
	     </div>
	     <div class="flex" >
	       <span class="border bg-gray-200 py-3 px-10 w-40">Email</span>
	       <input name="email" type="email"  class="py-3 px-10 border flex-grow" />
	     </div>
	   <?php } ?>
	   <button class="px-5 py-2 bg-green-500 text-white rounded">BOOK NOW</button>
	 </form>
       </div>
       <div class="w-1/2 pt-5 px-5">
	 <?php
	 $productObj = new ProductView();
	 $product = $productObj->showSingleProduct($_GET['id']);
	 // print_r($product);
	 // die();
	 ?>
	 <h1 class="text-center text-2xl"><?= $product[0]['name'] ?></h1>
	 <img class="" alt="" src="<?= $product[0]['image_link'] ?>" />
       </div>
     </div>
  </div>
<?php require_once "./inc/footer.inc.php" ?>
