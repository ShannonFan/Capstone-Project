<?php include("includes/header.php") ?>


  <?php include("includes/nav.php") ?>
  	<link href="style.css" rel="stylesheet" type="text/css">



	<div class="jumbotron">
		<h1 class="text-center"><?php

		if(logged_in()){

			echo "Logged in";

		} else {


			redirect("index.php");
		}




		?></h1>
	</div>

<?php include("includes/footer.php") ?>
