<?php
use App\Cart;

function mustbeAdmin(){
	if (\Auth::check()) {
		if(\Auth::user()->role !== 'admin'){
			return abort(401);
		}
	} else {
		return abort(401);
	}
	
}

function SessionString($modelName) {
	// Create a session_id if there is none
	if(! Session::has('$modelName')){
		// Create a session_id
		Session::put('$modelName', $array = []);
		Session::push('$modelName', $array = [
		// creates a random string of numbers and letters
		'session_id' => substr(str_shuffle(MD5(microtime())), 0, 10),		
		]);
	}
			
	$get_Session = Session::get('$modelName');
	$flatten_Session = array_flatten($get_Session);
	return $Session_String = $flatten_Session[0];
}

function musthaveCart(){
	$Cart_Session = SessionString('Cart');
	$cart = Cart::where('session_id', '=', $Cart_Session)->get();
	$CountCart = $cart->count();

	if($CountCart === 0){
	     return abort(404);
	}
}