<?php require_once "./inc/header.inc.php" ?>
<body>
  <?php require_once "./inc/navbar.inc.php" ?>
  <div>
    <h1 class="text-2xl text-center bg-yellow-200 py-10">PAYMENT INFORMATION</h1>
  </div>
  <div class="container mx-auto flex flex-col border pt-10 mt-10 w-96">
    <div class="flex flex-col">
      <div class="text-xl pl-5">Card Type</div>
      <select id="card" name="card" class="p-3 border mx-5 my-2">
	<option value="">Select Card</option>
	<option value="">Visa</option>
	<option value="">Master Card</option>
	<option value="">Credit Card</option>
	<option value="">Americal Express</option>
      </select>
    </div>
    <div class="flex flex-col">
      <div class="text-xl pl-5">
        Card Holder Name
      </div>
      <input name="" type="text" value="" class="py-2  border mx-5 my-2"/>
    </div>
    <div class="flex flex-col">
      <div class="text-xl pl-5">Card Number</div>
      <input name="" type="text" value="" class="py-2 border mx-5 my-2"/>
    </div>
    <div class="flex flex-col">
      <div class="text-xl pl-5">Card Identification Number</div>
      <input name="" type="text" value="" class="py-2 border mx-5 my-2"/>
    </div>
    <div class="flex flex-col">
      <div class="text-xl pl-5">Expiration Month</div>
      <select id="month" name="month" class="p-3 border mx-5 my-2">
	<option value="">Select Month</option>
	<option value="">Jan</option>
	<option value="">Feb</option>
	<option value="">Mar</option>
	<option value="">Apr</option>
	<option value="">May</option>
	<option value="">June</option>
	<option value="">July</option>
	<option value="">Aug</option>
	<option value="">Sep</option>
	<option value="">Oct</option>
	<option value="">Nov</option>
	<option value="">Dec</option>
      </select>
    </div>
    <div class="flex flex-col">
      <div class="text-xl pl-5">Expiration Year</div>
      <select id="month" name="month" class="p-3 border mx-5 my-2">
	<option value="">Select Year</option>
	<option value="">2021</option>
	<option value="">2022</option>
	<option value="">2023</option>
	<option value="">2024</option>
	<option value="">2025</option>
	<option value="">2026</option>
	<option value="">2027</option>
	<option value="">2028</option>
	<option value="">2029</option>
	<option value="">2030</option>
	<option value="">2031</option>
	<option value="">2032</option>
      </select>
    </div>
    <div class="flex flex-col bg-green-300 border border-green-300 py-3 mt-5 text-white">
      <button class="text-center">SUBMIT</button>
    </div>
  </div>
<?php require_once "./inc/footer.inc.php" ?>
