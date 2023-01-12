<?php
namespace App\Product\Operations;

class DeleteProducts extends \App\Product\Products 
{

	public function deleteSelectedProducts($array): void
	{
		$result = $this->deleteProducts($array);
	}

}
