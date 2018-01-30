<?php 

class Product {
	public $name, $price;

	public function __construct($productName, $productPrice) {
		$this->name = $productName;
		$this->price = $productPrice;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}
}
