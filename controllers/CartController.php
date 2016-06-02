<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
				return view('cart/index', ['products' => Cart::get()]);
	}	

	public function postAdd(Request $request, Application $app){
				$product = Product::find($request->get('product_id'));
				Cart::add($product->toArray());
				Cart::get();
				return $app->redirect('/');
			
			// 	if (Request::isMethod('post')){
			// 	$order_product = Request::get('id');
			// 	$products = Product::find($id);
			// 	Cart::add(array('id'=> $product_id, 'name' => $products->name));
			// }
			// $cart = Cart::content();
	 	// 		return view('/cart/add', ['order_product' => Order_Product::all()]);

	 }	

}
