<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prints as Prints;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	public function index(){
		$allPrints = Prints::all();
		return view('shop.index', compact('allPrints'));
	}

	public function custom(){
		return view('shop.custom');
	}

	public function cart(){
		return view('shop.cart');
	}
} 