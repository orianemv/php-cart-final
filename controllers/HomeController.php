<?php namespace App\Controllers;
session_start();
use App\Controllers\Controller;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Product;

class HomeController extends Controller {

	public function getIndex(Request $request, Application $app){
		return view('home', ['products' => Product::all()]);
	}	

	public function getLogout(Application $app){
		if(isset($_SESSION['cart'])) {
		unset($_SESSION['cart']);
		session_destroy();
	}
		// Cart::destroy();
	return $app->redirect('/');
	}

}