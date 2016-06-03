<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Customer;
use App\Models\Product;
use Cart;
class CustomerController extends Controller {

		public function finalCheckout(Request $request, Application $app){
			$order = Cart::get();

			return view('/cart/sold', ['order' => $order]);

		}


}