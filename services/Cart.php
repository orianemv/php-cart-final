<?php

class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])){
			return json_decode($_SESSION['cart']);
		}
		return [];
	}
	public static function add($product) {
		if(isset($_SESSION['cart'])) {
			$cart = json_decode($_SESSION['cart']);
		} else {
			$cart = [];
		}

		$cart[] = $product;
		$_SESSION['cart'] = json_encode($cart);
	}

	public function count(){
		return count(self::get());
	}
	public function total(){
		$products = self::get();
		$amount = 0;
		foreach($products as $p) {
			$amount += $p->price * 100;
		}
		$amount = $amount / 100;
		return  $amount;
	}
}