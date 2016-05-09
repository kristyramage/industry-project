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