<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactController extends Controller
{
	public function index(){
		return view('contact.index');
	}

	public function send(Request $request) {

		$this->validate($request, [
				'name'=>'required|min:2',
				'email'=>'required|email',
				'subject'=>'required|min:2',
				'message'=>'required',
			]);

		$data = $request->only('name', 'email', 'subject');
		$data['messageLines'] = explode("\n", $request->get('message'));


		//Send email to user
		    Mail::send('emails.contact', $data, function ($message) use ($data) {
		      		// $message->subject('Contact Captured Write: '.$data['subject']);
		      		$message->from('kristy.ramage@gmail.com', 'Contact Captured Write');
		            $message->To($data['email']);
		    });

		     var_dump('here');
			 die();
			// Session::flash('Success', 'Your message has been sent!');
			// return back();
		
	}

	public function custom(){
		return view('contact.custom');
	}

	public function query(Request $request) {

		$this->validate($request, [
				'name'=>'required|min:2',
				'email'=>'required|email',
				'subject'=>'required|min:2',
				'description'=>'required|min:20',
			]);
	}
} 