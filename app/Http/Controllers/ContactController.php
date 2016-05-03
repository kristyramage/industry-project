<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
	public function index(){
		return view('contact.index');
	}

	public function send(Request $request) {

		$this->validate($request, [
				'username'=>'required|min:2',
				'email'=>'required|email',
				'subject'=>'required|min:2',
				'message'=>'required',
			]);
	}

	public function custom(){
		return view('contact.custom');
	}

	public function query(Request $request) {

		$this->validate($request, [
				'customName'=>'required|min:2',
				'email'=>'required|email',
				'subject'=>'required|min:2',
				'description'=>'required|min:20',
			]);
	}
} 