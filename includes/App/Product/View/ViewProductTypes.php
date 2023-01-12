<?php
namespace App\Product\View;

class ViewProductTypes extends \App\Product\Products 
{

	public function getAllProductTypesSelect(): void
	{
		$types = $this->getAllProductTypes();
		$count = 1;
		if(!empty($types)) {
			foreach ($types as $type) {
				echo "<option ".($count ? 'selected="selected" ' : '')."value=\"{$type['type_id']}\">{$type['type_value']}</option>";
				$count = 0;
			}
		}

	}

}
