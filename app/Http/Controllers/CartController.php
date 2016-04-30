<?php 

namespace App\Http\Controllers;

use App\Prints;

use App\Http\Controllers\Controller;

class CartController extends Controller {
	
	public function index(){
		return view('cart.index');
	}

}




