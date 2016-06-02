<?php
session_start();
class Cart {
	public static function get() {
		if(isset($_SESSION['cart'])) {
			return json_decode($_SESSION['cart']);
		}
		return [];
	}

	public static function add($product) {
		$cart = self::get();
		array_push($cart, $product);
		$_SESSION['cart'] = json_encode($cart);
	// 	$cart = Cart::add();
	// 	if(!$cart){
	// 		$cart = new Cart();
	// 		$cart->save();
	// 	}
	// 	$cartProd = new CartProd();
	// 	$cartProd->product_id= $productId;
	// 	$cartProd->cart_id= $cart->Id;
	// 	$cartProd->save();

	// 	return redirect('/cart');
	}
	public function count(){
		return count(self::get());
		// $cartCount = Cart::getContent();
		// $cartCount->count();
	}
	public function total(){
		$product = self::get();
		$total =[]; 
		foreach ($product as $prices) {
			array_push($total, $prices->price);
		}
		return array_sum($total);
		$total = Cart::getTotal();
	}
}