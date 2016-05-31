<?php

class Cart {
	public static function get() {
		return [];
	}
	public static function add($product) {

		$cart = Cart::add();

		if(!$cart){
			$cart = new Cart();
			$cart->save();
		}

		$cartProd = new CartProd();
		$cartProd->product_id= $productId;
		$cartProd->cart_id= $cart->Id;
		$cartProd->save();

		return redirect('/cart');
	}

	public function count(){
		// $cou = Auth::user()->cart()->products()->cou('price');
	}
	public function total(){
	}
}