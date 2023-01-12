<?php
namespace App\Product\Operations;

class ValidateSku extends \App\Product\Products 
{

	public function __construct(
		private string $sku
	){}
	
	public function validateNewSku(): bool
	{
		$skuAll = $this->getAllSku();
		$search = array_search($this->sku, $skuAll);
		if(!$search) return true;
		else return false;
	}
}
