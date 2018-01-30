<?php 

class LineItem {
	public $product, $quantity;

	public function __construct($product, $quantity) {
		$this->product = $product;
		$this->quantity = $quantity;
	}

	public function getTotal() {
		// quantity * product price
		return $this->quantity * $this->product->price;
	}

	public function getProduct() {
		return $this->product;
	}

	public function getProductName() {
		return $this->product->getName();
	}

	public function getProductPrice() {
		return $this->product->getPrice();
	}
}