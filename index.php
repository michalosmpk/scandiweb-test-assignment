<?php

	include_once('vendor/autoload.php');
	require_once('includes/functions.php');

	if(isset($_POST['BUTTON_DELETE'])) {
		$delete = new App\Product\Operations\DeleteProducts;
		$delete->deleteSelectedProducts($_POST['SELECT_DELETE']);
		header("Location: index.php");
	}
	if(isset($_POST['BUTTON_ADD'])) {
		header("Location: add-product.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Product list</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<form method="post" action="" class="form-main">
		<!-- // * header -->
		<header>
			Product list
			<div class="buttons">
				<button name="BUTTON_ADD" id="ADD" type="submit">ADD</button>
				<button name="BUTTON_DELETE" id="delete-product-btn" type="submit">MASS DELETE</button>
			</div>
		</header>

		<!-- // * content -->
		<section class="product-list">
			<?php
				$products = new App\Product\View\ViewProducts();
				$products->showAllProducts();
			?>
		</section>
	
		<!-- // * footer -->
		<footer>
			Scandiweb Test assignment
		</footer>
	</form>
</body>
</html>