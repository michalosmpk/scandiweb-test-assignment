<?php
namespace App\Product\Operations;

class AddProducts extends \App\Product\Products
{
	public function __construct(
		private string $sku,
		private string $name,
		private string $price,
		private int $typeId,
		private string $attributeValue
	){}

	private function validateProduct(): bool
	{
		$validSku = new \App\Product\Operations\ValidateSku($this->sku);
		$validSku = $validSku->validateNewSku();
		if(empty($this->sku) || empty($this->name) || empty($this->price) || empty($this->typeId) || empty($this->attributeValue)) {
			return false;
		}
		if(strlen($this->sku) > 255 || strlen($this->name) > 255 || strlen($this->price) > 255 || strlen($this->attributeValue) > 255 ) {
			return false;
		}
		if($this->typeId > 3 || $this->typeId < 0 || !is_int($this->typeId) || !is_numeric($this->typeId) || !is_numeric($this->price) || floatval($this->price) <= 0 || floatval($this->price) > 2000000000) {
			return false;
		}
		return true;
	}

	public function addNewProduct(): bool
	{	
		if($this->validateProduct()) {
			$this->addProduct($this->sku, $this->name, $this->price, $this->typeId, $this->attributeValue);
			return true;
		} else {
			return false;
		}
	}

}