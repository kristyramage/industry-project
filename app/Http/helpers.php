<?php
function mustBeAdmin(){
	if(\Auth::user()->role !== 'admin'){
		return abort(401);
	}
}