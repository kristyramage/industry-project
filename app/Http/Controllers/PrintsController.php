<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Prints as Prints;
// use App\User as User;
use Intervention\Image\ImageManager;

class PrintsController extends Controller
{

	public function show() {
        $print = Prints::findOrFail($id);
        return view('print.show', compact('Print'));
    }

}