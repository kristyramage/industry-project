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

	public function add(Request $request) {
		
		// include all Models from the database
		$Print = Prints::where('id', '=', $_POST['id'])->firstOrFail();
		$Size = PrintSizes::where('id', '=', $_POST['id'])->firstOrFail();
		$Frame = Frames::where('id', '=', $_POST['id'])->firstOrFail();

		// Validation
		$this->validate($request,[
				'size'=>'required',
				'print_quantity'=>'required|min:1|numeric',
			]);

		// Create a session_id
		if(! Session::has('Cart')){
			// Create a session_id
			Session::put('Cart', $array = []);
			Session::push('Cart', $array = [
				'session_id' => substr(str_shuffle(MD5(microtime())), 0, 10),		
			]);

		}

		if(isset($_POST['framed'])){
			$size = $_POST['size'];
			$frame = Frames::where('size', '=', $size);

			$Cart->frame_id = $frame['id'];
		 } // else {
		// 	$Cart->frame_id = 0;
		// }


		// Calculate totals
		$subtotalPrice = ($Size['size_price'] + $Print['price'] + $Frame['size-price']) * $_POST['print_quantity'];

		// the cart is already set! need to add more
		if(isset($_POST['addtocart'])){
			$PrintFound = false;
			$addPrintID = $Print['id'];
			$Cart_Session = Session::get('Cart', array['session_id']);
			var_dump($Cart_Session);
			die();
			// $Cart_SeshID = $Cart_Session[$array['session_id']];
			$Cart = Cart::all();

			foreach($Cart as &$item) {
				if (($item['print_id'] == $addPrintID) & ($item['session_id'] == $Cart_SeshID)) {
					$PrintFound = true;
				}
			}

			if($PrintFound == true){
					//	Goes over each of the items in the cart and if there is a match with the cartID and printID 
					//	it will update the cart item instead of creating a new one
					foreach($Cart as &$item) {
						 if (($item['print_id'] == $addPrintID) & ($item['cart_id'] == $cartID)) {
							$Print->quantity = $Print['quantity'] - $_POST['print_quantity'];
							$Print->save();

							$updateCart = Cart::where('print_id', '=', $addPrintID)->firstOrFail();
							$updateCart->print_id = $item['print_id'];
							$updateCart->size_id = $item['size_id'];
							$updateCart->frame_id = $item['frame_id'];
							$updateCart->quantity = $item['quantity'] + $_POST['print_quantity'];
							$updateCart->subtotal = $item['subtotal'] + $TotalTicketPrice;
							break;
						}
					} 
					$updateCart->save();
			} else if ($PrintFound == false){
					//Update Available prints for the prin
					$Print->quantity = $Print['quantity'] - $request->quantity;
					$Print->save();
					//Adding Print to the users cart
					$newCart = new Cart();
					$newCart->session_id = $Cart_SeshID;
					$newCart->print_id = $Print->id;
					$newCart->size_id = $Size->id;
					$newCart->frame_id = $Frame->id;
					$newCart->quantity = $request->quantity;
					$newCart->subtotal = $subtotalPrice;
					$newCart->save();
			}


		}

		// return redirect('cart');
	}

	public function update() {

	}

	public function remove() {

	}




}




