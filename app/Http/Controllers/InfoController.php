<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
	public function stockists(){
		return view('info.stockists');
	}

	public function shipping(){
		return view('info.shipping');
	}

	public function tandc(){
		return view('info.tandc');
	}
} 