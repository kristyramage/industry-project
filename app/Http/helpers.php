<?php
function mustbeAdmin(){
	if (\Auth::check()) {
		if(\Auth::user()->role !== 'admin'){
			return abort(401);
		}
	} else {
		return abort(401);
	}
	
}

function SessionString($sessionVar) {
	// Create a session_id if there is none
	if(! Session::has('$sessionVar')){
		// Create a session_id
		Session::put('$sessionVar', $array = []);
		Session::push('$sessionVar', $array = [
		// creates a random string of numbers and letters
		'session_id' => substr(str_shuffle(MD5(microtime())), 0, 10),		
		]);
	}
			
	$get_Session = Session::get('$sessionVar');
	$flatten_Session = array_flatten($get_Session);
	return $Session = $flatten_Session[0];
}