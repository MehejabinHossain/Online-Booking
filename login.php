<?php require_once "./inc/header.inc.php" ?>

<body class="">
  <?php require_once "./inc/navbar.inc.php" ?>
  <div class="flex flex-col justify-center items-center h-screen bg-gray-200">
    <h4 class="text-2xl font-bold">LOG IN</h4>
    <form class="flex flex-col" action="./inc/login.inc.php" method="POST">
      <input class="px-2 py-3 my-5 border border-gray-300" name="email"
	     type="email" placeholder="Email" required/>
      <input class="px-2 py-3 mb-5 border border-gray-300" name="pwd"
	     type="password" placeholder="Password" required/>
      <?php if($_GET['type'] == 'emp') { ?>
      <button type="submit" name="submit" value="emplogin"
	      class="bg-green-500 text-white py-3">
	LOGIN
      </button>
      <?php } else { ?>
      <button type="submit" name="submit" value="cuslogin"
	      class="bg-green-500 text-white py-3">
	LOGIN
      </button>
      <?php } ?>
    </form>
  </div>

<?php require_once "./inc/footer.inc.php"?>  
