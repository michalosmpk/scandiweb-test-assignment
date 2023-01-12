<?php

	include_once('vendor/autoload.php');
	require_once('includes/functions.php');

	if(isset($_POST['sku'])) {
		$_POST['attributes'][3] = $_POST['attributes'][3]['height'].'x'.$_POST['attributes'][3]['width'].'x'.$_POST['attributes'][3]['length'];
		$validSku = new App\Product\Operations\ValidateSku($_POST['sku']);
		$validate = $validSku->validateNewSku();
		if (!$validate) {
			alert('Please, provide valid SKU (already exists)');
		} else {
			$addProduct = new App\Product\Operations\AddProducts($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['product_type'], $_POST['attributes'][$_POST['product_type']]);
			$response = $addProduct->addNewProduct($_POST);
			if($response) {
				header("Location: index.php");
			} else {
				alert("Please, provide the data of indicated type");
			}
		}
	}

	if(isset($_POST['BUTTON_CANCEL'])) {
		header("Location: index.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Product Add</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<form method="post" action="" class="form-main" id="product_form">
		<!-- // * header -->
		<header>
			Product list
			<div class="buttons">
				<button id="BUTTON_SAVE" name="BUTTON_SAVE" type="button">Save</button>
				<button name="BUTTON_CANCEL" onClick="document.location.href='index.php'" type="button">Cancel</button>
			</div>
		</header>

		<!-- // * content -->
		<section class="add-product">
			<div class="form-input-tile">
				<p>SKU</p>
				<input type="text" id="sku" name="sku" placeholder="SKU" aria-disabled="false" maxlength="255" data-numeric="false">
			</div>
			<div class="form-input-tile">
				<p>Name</p>
				<input type="text" id="name" name="name" placeholder="Product name" aria-disabled="false" maxlength="255" data-numeric="false">
			</div>
			<div class="form-input-tile">
				<p>Price ($)</p>
				<input type="text" id="price" name="price" placeholder="9.99" aria-disabled="false" data-numeric="true">
			</div>
			<div class="form-input-tile">
				<p>Type Switcher</p>
				<select name="product_type" id="productType">
					<?php
						$options = new App\Product\View\ViewProductTypes;
						$options->getAllProductTypesSelect();
					?>
				</select>
			</div>

			<!-- // * SWITCH SECTIONS -->
			<!-- DVD -->
			<div id="DVD" class="switch-section" aria-current="true">
				<p class="switch-section__instruction">Please, provide size</p>
				<div class="form-input-tile">
					<p>Size (MB)</p>
					<input type="text" id="size" name="attributes[1]" placeholder="700" data-numeric="true" aria-disabled="false">
				</div>
			</div>
			
			<!-- Book -->
			<div id="Book" class="switch-section" aria-current="false">
				<p class="switch-section__instruction">Please, provide weight</p>
				<div class="form-input-tile">
					<p>Weight (KG)</p>
					<input type="text" id="weight" name="attributes[2]" placeholder="20" data-numeric="true" aria-disabled="true">
				</div>
			</div>

			<!-- Furniture -->
			<div id="Furniture" class="switch-section" aria-current="false">
				<p class="switch-section__instruction">Please, provide dimensions</p>
				<div class="form-input-tile">
					<p>Height (CM)</p>
					<input type="text" id="height" name="attributes[3][height]" placeholder="20" data-numeric="true" aria-disabled="true">
				</div>
				<div class="form-input-tile">
					<p>Width (CM)</p>
					<input type="text" id="width" name="attributes[3][width]" placeholder="10" data-numeric="true" aria-disabled="true">
				</div>
				<div class="form-input-tile">
					<p>Length (CM)</p>
					<input type="text" id="length" name="attributes[3][length]" placeholder="20" data-numeric="true" aria-disabled="true">
				</div>
			</div>

		</section>
	
		<!-- // * footer -->
		<footer>
			Scandiweb Test assignment
		</footer>
	</form>
</body>
<script src="/assets/js/add-product.js"></script>
</html>