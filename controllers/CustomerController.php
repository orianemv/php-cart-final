<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Customer;
use App\Models\Product;
use Cart;
class CustomerController extends Controller {

	public function getCheckout(Request $request, Application $app){ 
	 					return view ('cart/checkout', ['products' => Cart::get()]);
	}
	public function finalCheckout(Request $request, Application $app){
					 Customer::create([
					 	'first_name' => $request->get('first_name'),
					 	'last_name' => $request->get('last_name'),
					 	'address' => $request->get('address'),
					 	'postcode' => $request->get('postcode'),
					 	'phone' => $request->get('phone')]);
							
						return view('/cart/sold', ['customer' => $customer, 'order' => $order]);
	}

// 	public function destroy(){
// 		if(isset($_SESSION['cart'])) {
// 		unset($_SESSION['cart']);
// 		session_destroy();	
// 	}
// 	return view('/cart/checkout', []);
// }
}