<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shipping;
use Session;

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

		//Send email to Admin
		    Mail::send('emails.admincontact', $data, function ($message) use ($data) {
		      		$message->subject('Contact Captured Write: '.$data['name']);
		      		$message->from($data['email'], 'Contact Captured Write');
		            $message->To('kristy.ramage@gmail.com');
		    });

		//Send email to user
		    Mail::send('emails.contact', $data, function ($message) use ($data) {
		      		// $message->subject('Contact Captured Write: '.$data['subject']);
		      		$message->from('kristy.ramage@gmail.com', 'Contact Captured Write');
		            $message->To($data['email']);
		    });

		     
			Session::flash('success', 'Your message has been sent!');

			return redirect('/');
		
	}

	public function custom(){
		return view('contact.custom');
	}

	public function query(Request $request) {

		$this->validate($request, [
				'name'=>'required|min:2',
				'email'=>'required|email',
				'description'=>'required|min:20',
			]);

		$data = $request->only('name', 'email');
		$data['messageLines'] = explode("\n", $request->get('description'));

		//Send email to Admin
		    Mail::send('emails.admincontact', $data, function ($message) use ($data) {
		      		$message->subject('Contact Captured Write: '.$data['name']);
		      		$message->from($data['email'], 'Contact Captured Write');
		            $message->To('kristy.ramage@gmail.com');
		    });

		//Send email to user
		    Mail::send('emails.contact', $data, function ($message) use ($data) {
		      		$message->subject('Custom Order Inquiry Captured Write');
		      		$message->from('kristy.ramage@gmail.com', 'Contact Captured Write');
		            $message->To($data['email']);
		    });

		     
			Session::flash('success', 'Your inquiry has been sent!');

			return redirect('/');
		
	}

} 