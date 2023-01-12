
let currentType;
$(document).ready(function(){
	$('.switch-section').hide();
	$('.switch-section').first().show();
	// * switch product types in form
	$('#productType').on('load change', function() {
		$('.switch-section').hide();
		$('.switch-section').attr('aria-current', 'false');
		$('.switch-section').children().children('input').attr('aria-disabled', 'true');
		currentType = $('.switch-section').eq(this.value-1);
		currentType.show();
		currentType.attr('aria-current', 'true');
		currentType.children().children('input').attr('aria-disabled', 'false');
	});

	// * make price not go beyond two decimals
	$('#price').on('change', function() {
		let value = parseFloat($(this).val().toString()).toFixed(2).toString().replaceAll(',', '.');
		$(this).val(value);
	});

	// * validate all data in form
	$('#BUTTON_SAVE').on('click', function() {
		let required = true;
		let valid = true;
		let sku = $('#sku').val();
		let name = $('#name').val();
		let price = $('#price').val();

		// ? check if required fields are provided with values
		$('[aria-disabled="false"]').each(function() {
			if (!$(this).val()) required = false;
		});

		// ? check if numeric values are correct
		$('[data-numeric="true"][aria-disabled="false"]').each(function() {
			let inputNumber = $(this).val();
			if (!$.isNumeric(inputNumber) || inputNumber < 0 || inputNumber > 2000000000) valid = false;
		});	
		
		// ? check if text values are not too long 
		$('[data-numeric="false"][aria-disabled="false"]').each(function() {
			if ($(this).val().length > 255) valid = false;
		});	

		if(!required) {
			alert('Please, submit required data');
		} else if(!valid) {
			alert('Please, provide the data of indicated type');
		} else {
			$('#product_form').submit();
		}

	});
});
