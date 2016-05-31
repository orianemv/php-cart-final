<?php namespace App\Controllers;

use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller {

	public function getIndex(Request $request, Application $app){
				return view('cart/index', ['products' => Product::all()]);
	}	

	public function postAdd(Request $request, Application $app){
	}	

}