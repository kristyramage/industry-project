<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
	public function index(){

		// $accessId = env('INSTAGRM_ID');
		// $accessToken = env('INSTAGRM_TOKEN');
		return view('gallery.index', compact('accessToken', 'accessId'));
	}
}