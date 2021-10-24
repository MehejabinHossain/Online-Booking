<?php require_once "./inc/header.inc.php"; ?>
<body class="bg-gray-200">
  <?php require_once "./inc/navbar.inc.php"; ?>
  <div class="flex justify-center pt-10">
    <table class="table-fixed border-collapse border border-green-800">
      <thead>
	<tr>
	  <th class="border border-green-600 p-2 w-60">Customer Name</th>
	  <th class="border border-green-600 p-2">Product Name</th>
	  <th class="border border-green-600 p-2">Product Type</th>
	  <th class="border border-green-600 p-2">Start Date</th>
	  <th class="border border-green-600 p-2">End Date</th>
	  <th class="border border-green-600 p-2">Price</th>
	  <th class="p-2">Status</th>
	</tr>
      </thead>
      <tbody>
	<?php
	include "./class/bookingcontr.class.php";
	include "./class/productview.class.php";
	include "./class/customerview.class.php";
	
	$allBookingsObj = new BookingContr();
	$allBookings = $allBookingsObj->cusBookings($_SESSION['user_id']);
	foreach($allBookings as $key=>$booking){
	  $productsObj = new ProductView();
	  $product = $productsObj->showSingleProduct($booking['product_id']);
	  // print_r($product);
	  $customerObj = new CustomerView();
	  $customer = $customerObj->showSingleCustomer($booking['customer_id']);
	  
	?>
	  <tr>
	    <td class="border border-green-600 p-2"><?= $customer[0]['name'] ?></td>
	    <td class="border border-green-600 p-2"><?= $product[0]['name'] ?></td>
	    <td class="border border-green-600 p-2">
	      <?= $product[0]['type'] ?>
	    </td>
	    <td class="border border-green-600 p-2">
	      <?= $booking['start_date'] ?>
	    </td>

	    <td class="border border-green-600 p-2">
	      <?= $booking['end_date'] ?>
	    </td>
	    <td class="border border-green-600 p-2"><?= $product[0]['price'] ?></td>

	  <?php if($booking['checked_in_out'] == NULL){ ?>
	      <td class="border border-green-600 p-2">Booked</td>
	    <?php } elseif($booking['checked_in_out'] == 1) { ?>
			<td class="border border-green-600 p-2">Checked In</td>
		<?php } else {?>
			<td class="border border-red-600 p-2">Checked Out </td>
		<?php } ?>
		</tr>
	<?php }; ?>
      </tbody>
    </table>
  </div>
  

  <?php require_once "./inc/footer.inc.php" ?>
