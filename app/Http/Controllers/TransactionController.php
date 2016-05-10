<?php 

namespace App\Http\Controllers;

use App\Prints;
use App\PrintSizes;
use App\Frames;
use App\Cart;
use App\Order;
use App\Shipping;
use Session;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Braintree_Configuration;
use Braintree_ClientToken;
use Braintree_Transaction;


class TransactionController extends Controller {

	public function shipping(Request $request){

			return view('cart.shipping');
	}


	public function submitShipping(Request $request){
		// Create a session_id
		$Shipping_Session = SessionString('shipping');

		// validate shipping form
		$this->validate($request, [
			'name'=>'required|min:2',
			'email'=>'required|email',
			'phone'=>'required|min:8|numeric',
			'message'=>'required|max:500',
			'street'=>'required|min:2|max:200',
			'country'=>'required|min:2|max:45',
			'state'=>'required|min:2|max:20',
			'city'=>'required|min:1|max:153',
			'postcode'=>'required|min:4|numeric',

		]);

		if(Session::has('Shipping')){
// ----------- // Update Address
				if(isset($_POST)){
	        
					var_dump("here 1");

	        $Shipping = Shipping::where('session_id', '=', $Shipping_Session)->firstOrFail();
			$addShippingID = $Shipping['id'];
			}
					
				$matchThese = [	'session_id'	=> $Shipping_Session, 
									'id' 		=> $addShippingID,
							  ];

				$updateAddress = Shipping::where($matchThese)->firstOrFail();
					
				// Values that need to be updated
				$updateAddress->name        = $request->name;
				$updateAddress->email       = $request->email;
				$updateAddress->phone  		= $request->phone;
				$updateAddress->message     = $request->message;
				$updateAddress->country     = $request->country;
				$updateAddress->state       = $request->state;
				$updateAddress->city  		= $request->city;
				$updateAddress->street      = $request->street;
				$updateAddress->postcode    = $request->postcode;

			$updateAddress->save();

	} else {
			var_dump("here 2");
// ----------- // New Address
		$data['messageLines'] = explode("\n", $request->get('message'));

				// save shipping details to database
				$newAddress = new Shipping();

				$newAddress->session_id 	= $Shipping_Session;
				$newAddress->name        	= $request->name;
				$newAddress->email        	= $request->email;
				$newAddress->phone  		= $request->phone;
				$newAddress->message     	= $request->message;
				$newAddress->country        = $request->country;
				$newAddress->state        	= $request->state;
				$newAddress->city  			= $request->city;
				$newAddress->street        	= $request->street;
				$newAddress->postcode       = $request->postcode;

				$newAddress->save();

		}

		return redirect('/cart/orderreview');
	}


	public function orderreview(){
		// Create a session_id if there is none
		$Shipping_Session = SessionString('Shipping');
		$Shipping = Shipping::where('session_id', '=', $Shipping_Session)->firstOrFail();

		// Create a session_id if there is none
		$Cart_Session = SessionString('Cart');
		$cart = Cart::where('session_id', '=', $Cart_Session)->get();

		$CountCart = $cart->count();
		$grandtotal = 0;		
		foreach ($cart as $cartitem) {
			$grandtotal += $cartitem->subtotal;
		}
		// flat rate shipping cost
		$shippingCost = 10;
		$grandtotal += $shippingCost;		

		return view('cart.orderReview', compact('Shipping', 'cart', 'CountCart', 'shippingCost', 'grandtotal'));
	}


	public function transaction(){

		// musthaveCart();
		// Create a session_id if there is none	
		$Cart_Session = SessionString('Cart');

		$cart = Cart::where('session_id', '=', $Cart_Session)->get();

		$CountCart = $cart->count();
		$grandtotal = 0;		
		foreach ($cart as $cartitem) {
			$grandtotal += $cartitem->subtotal;
		}
		// flat rate shipping cost
		$shippingCost = 10;
		$grandtotal += $shippingCost;	
		
		Braintree_Configuration::environment('sandbox');
		Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
		Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
		Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));
  		$clientToken = Braintree_ClientToken::generate();

		return view('cart.transaction', compact('cart', 'CountCart', 'grandtotal'));
	}

	public function checkout() {
		// musthaveCart();
		// Create a session_id if there is none	
		$Cart_Session = SessionString('Cart');
		$Shipping_Session = SessionString('Shipping');

		$cart = Cart::where('session_id', '=', $Cart_Session)->get();
		$shipping = Shipping::where('session_id', '=', $Shipping_Session)->firstOrFail();
		$db_cartadd = Cart::where('session_id', '=', $Cart_Session)->firstOrFail();

		$CountCart = $cart->count();
		$grandtotal = 0;		
		foreach ($cart as $cartitem) {
			$grandtotal += $cartitem->subtotal;
		}
		
		Braintree_Configuration::environment('sandbox');
		Braintree_Configuration::merchantId(env('BRAINTREE_MERCHANT_ID'));
		Braintree_Configuration::publicKey(env('BRAINTREE_PUBLIC_KEY'));
		Braintree_Configuration::privateKey(env('BRAINTREE_PRIVATE_KEY'));

  		$result = Braintree_Transaction::sale([
				'amount' => "1000",
				'paymentMethodNonce' => 'fake-valid-nonce',
				'options' => [
				'submitForSettlement' => False
			]
		]);

		if($result->success === true){

			//Adds to Order Table
			$order = new Order();

			$order->cart_id = $db_cartadd->id;
			$order->cart_session_id = $Cart_Session;
			$order->shipping_id = $shipping->id;
			$order->grand_total = $grandtotal;
			$order->status = 'approved';

			$order->save();

			// Session::flash('success', 'Your order is now complete.');

			// delete sessions
			if(! Session::has('Shipping'))
			{
				Session::flush('Shipping');
			}
			if(! Session::has('Cart'))
			{
				Session::flush('Cart');
			}

		
		} else {

			Session::flash('Warning', 'Error! Something has gone wrong with your payment, please try again');
			return Redirect::back();
			
		} 

		return redirect('cart/success');
	}


	public function success(){	

		return view('cart.success');
	}

}
