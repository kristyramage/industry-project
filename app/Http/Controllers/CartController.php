<?php 

namespace App\Http\Controllers;

use App\Prints;
use App\PrintSizes;
use App\Frames;
use App\Cart;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CartController extends Controller {
	
	
	public function index() {
		return view('cart.index');
	}

	public function add() {

		if(! Session::has('Cart')){
			Session::put('Cart', $array = []);
			Session::push('Cart', $array = [
				'session_id' => substr(str_shuffle(MD5(microtime())), 0, 10),
			    		
			]);
		}
		

		// Session::forget('Cart');

		// var_dump($_POST);
		
		// var_dump($size);
		// if(isset($_POST['framed'])){
		// 	$size = $_POST['size'];
		// 	$frame = Frame::where('size', '=', $size);

		// 	// $cart->frame_id = $frame['id'];
		// } else {
		// 	// $cart->frame_id = 0;
		// }
		// include all Models from the database
		// $Print = Prints::where('id', '=', $_POST['id'])->firstOrFail();
		// $Size = Sizes::where('id', '=', $_POST['size_id'])->firstOrFail();	// deciding on creation
		// $Frame = Frames::where('id', '=', $_POST['frame_id'])->firstOrFail();	// deciding on creation
		
		// // Validation
		// $this->validate($request,[
		// 		'size'=>'required',
		// 		'print_quantity'=>'required|min:1|numeric',
		// 	]);

		// Calculate totals
		// $SubtotalPrice = $Print['print_price'] * $_POST['print_quantity'];
		// $TotalPrice = $Print['price'] * $_POST['print_quantity'];

		// the cart is already set! need to add more
		// if(isset($_POST['addtocart'])){
		// 	$PrintFound = false;
		// 	$addPrintID = $Print['id'];
		// 	$cart = Cart::all();

		// 	foreach($cart as &$item) {
		// 			if (($item['print_id'] == $addPrintID){
		// 				$PrintFound = true;
		// 			}
		// 	}

			// if($PrintFound == true){
			// 		//	Goes over each of the items in the cart and if there is a match with the cartID and printID 
			// 		//	it will update the cart item instead of creating a new one
			// 		foreach($cart as &$item) {
			// 			 if (($item['print_id'] == $addPrintID) & ($item['cart_id'] == $cartID)) {
			// 				$Print->quantity = $Print['quantity'] - $_POST['print_quantity'];
			// 				$Print->save();
			// 				$updateCart = Cart::where('print_id', '=', $addPrintID)->firstOrFail();
			// 				$updateCart->print_id = $item['print_id'];
			// 				$updateCart->quantity = $item['quantity'] + $_POST['print_quantity'];
			// 				$updateCart->subtotal = $item['subtotal'] + $TotalTicketPrice;
			// 				break;
			// 			}
			// 		} 
			// 		$updateCart->save();
			// } else if ($PrintFound == false){
			// 		//Update Available tickets for the print
			// 		$Print->tickets_available = $Print['tickets_available'] - $request->print_quantity;
			// 		$Print->save();
			// 		//Adding Print to the users cart
			// 		$newCart = new Cart();
			// 		$newCart->user_id = \Auth::user()->id;
			// 		$newCart->print_id = $request->print_id;
			// 		$newCart->price = $Print['ticket_price'];
			// 		$newCart->quantity = $request->print_quantity;
			// 		$newCart->subtotal = $TotalTicketPrice;
			// 		$newCart->save();
			// }


		// }

		// return redirect('cart');
	}

	public function update() {

	}

	public function remove() {

	}




}




