<?php 

// namespace Apple\iTunes\Checkout;

class ShoppingCart {
	public $items = [];

	public function add($lineItem) {
		$this->items[] = $lineItem; // array push
	}

	public function getTotal() {
		$total = 0;

		foreach($this->items as $lineItem) {
			$total += $lineItem->getTotal();
		}

		return $total;
	}

	public function remove($album) {
		//I don't get why this isn't working??????

		// foreach($this->items as $lineItem) {
		// 	if($lineItem == $album) {
		// 		unset($items[$album]);
		// 	}
		// }

		//trying a different way
		$newList = [];
		foreach($this->items as $lineItem) {
			if(!($lineItem == $album)) {
				array_push($newList, $lineItem);
			}
			$this->items = $newList;
		}
	}

	public function empty() {
		unset($this->items);
		$this->items = [];
	}
}