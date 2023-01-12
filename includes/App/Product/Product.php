<?php

namespace App\Product;

class Product
{
	
	public function __construct(
		protected string $id,
		protected string $sku,
		protected string $name,
		protected string $price,
		protected string $attributeName,
		protected string $attributeValue,
		protected string $attributeUnit
	) {}
	
	// * id
	public function getId(): string 
	{
		return $this->id;
	}

	public function setId(string $id): self 
	{
		$this->id = $id;
		return $this;
	}

	// * sku
	public function getSku(): string 
	{
		return $this->sku;
	}

	public function setSku(string $sku): self 
	{
		$this->sku = $sku;
		return $this;
	}

	// * name
	public function getName(): string 
	{
		return $this->name;
	}

	public function setName(string $name): self 
	{
		$this->name = $name;
		return $this;
	}

	// * price
	public function getPrice(): string 
	{
		return $this->price;
	}

	public function setPrice(string $price): self 
	{
		$this->price = $price;
		return $this;
	}

	// * attribute name
	public function getAttributeName(): string 
	{
		return $this->attributeName;
	}

	public function setAttributeName(string $attributeName): self 
	{
		$this->attributesName = $attributesName;
		return $this;
	}

	// * attribute value
	public function getAttributeValue(): string 
	{
		return $this->attributeValue;
	}

	public function setAttributeValue(string $attributeValue): self 
	{
		$this->attributesValue = $attributesValue;
		return $this;
	}

	// * attribute unit
	public function getAttributeUnit(): string 
	{
		return $this->attributeUnit;
	}

	public function setAttributeUnit(string $attributeUnit): self 
	{
		$this->attributesUnit = $attributesUnit;
		return $this;
	}

}