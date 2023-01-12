<?php

namespace App\Product;

class Products extends \App\Db
{
	protected function getAllProducts(): array|null
	{
		$sql = "SELECT product_id, sku, product_name, price, attribute_name, attribute_value 
				FROM product_list
				INNER JOIN product_type ON product_list.type_id = product_type.type_id
				ORDER BY product_list.product_id;";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$productList[] = new Product($row['product_id'], $row['sku'], $row['product_name'], $row['price'], $row['attribute_name'], $row['attribute_value']);
			}
			return $productList;
		}
		return null;
	}

	protected function deleteProducts($array): void
	{
		if(!empty($array)) {
			$sql = "DELETE FROM product_list WHERE ";
			$counter = 0;
			foreach($array as $key => $value) {
				if($counter == 0) {
					$counter = 1;
					$sql .= "product_id=" . $value;
				} else {
					$sql .= " OR product_id=" . $value;
				}
			}
			$this->connect()->query($sql);
		}
	}

	protected function getAllProductTypes(): array
	{
		$sql = "SELECT type_id, type_value FROM product_type";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$types[] = $row;
			}
			return $types;
		}
	}

	protected function addProduct(string $sku, string $name, string $price, string $typeId, string $attributeValue): void
	{
		$sql = "INSERT INTO `product_list` (`sku`, `product_name`, `price`, `type_id`, `attribute_value`) VALUES ('{$sku}', '{$name}', '{$price}', '{$typeId}', '{$attributeValue}')";
		
		$this->connect()->query($sql);
	}

	protected function getAllSku(): array
	{
		$sql = "SELECT sku FROM product_list;";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		$data = array();
		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row['sku'];
			}
			return $data;
		}
	}
	
}