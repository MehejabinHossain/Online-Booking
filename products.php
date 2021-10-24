<?php
require_once "./inc/header.inc.php";
require_once "./class/productview.class.php";
?>
<body class="bg-gray-200">
  <div class="bg-white">
    <?php require "./inc/navbar.inc.php" ?>
  </div>

<div class="flex justify-center items-center">
  <div class=" w-full">
    <div class="grid grid-cols-4 gap-5 container mx-auto my-5">
      <?php
      $productsObj = new ProductView();
      // print_r($_GET);
      // die();
      $products = $productsObj->showProducts($_GET['type']);
      // print_r($products);
      // die();
      foreach($products as $key=>$product){
      ?>
	<div class="flex flex-col justify-center border border-gray-300 
		    rounded px-5 pb-5 shadow">
	  <img alt="" src="<?= $product['image_link'] ?>" class="pt-5" />
	  <h1 class="text-2xl text-center"><?= $product['name'] ?></h1>
	  <p class="text-lg">Model: <?= $product['model'] ?></p>
	  <p class="text-lg">Description: <?= $product['description'] ?></p>
	  <p class="text-lg">Price: <?= $product['price'] ?></p>
	  <a href="booking.php?id=<?= $product['id'] ?>&type=<?= $product['type'] ?>"
	     class="py-2 px-5 bg-green-500 text-white text-center rounded">
	    Book Now
	  </a>
	</div>
      <?php }; ?> 
    </div>
  </div>
</div>
<?php require "./inc/footer.inc.php" ?>
