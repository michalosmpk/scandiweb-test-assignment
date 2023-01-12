<?php
namespace App\Product\View;

class ViewProducts extends \App\Product\Products 
{

	public function showAllProducts(): void
	{
		$products = $this->getAllProducts();
		if(!empty($products)) {
			foreach ($products as $product) { ?>
				<div class="item">
					<input type="checkbox" name="SELECT_DELETE[]" value="<?=$product->getId()?>" id="" class="delete-checkbox">
					<p><?=$product->getSku()?></p>
					<p><?=$product->getName()?></p>
					<p>$<?=$product->getPrice()?></p>
					<p><?=$product->getAttributeName() . ": " . $product->getAttributeValue() . $product->getAttributeUnit()?></p>
				</div> 
				<?php
			}
		}

	}

}