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
								// creates a random string of numbers and letters
				'session_id' => substr(str_shuffle(MD5(microtime())), 0, 10),		
			]);
		}
		// Putting session id into a variable
		$get_Session = Session::get('Cart');
		$flatten_Session = array_flatten($get_Session);
		$Cart_Session = $flatten_Session[0];
		var_dump($Cart_Session);





		// Calculate totals
		$subtotalPrice = ($Size['size_price'] + $Print['price'] + $Frame['size-price']) * $_POST['print_quantity'];

		// the cart is already set! need to add more
		if(isset($_POST['addtocart'])){
			$PrintFound = false;
			$addPrintID = $Print['id'];
			$addSizeID = $Size['id'];
			$addFrameID = $Frame['id'];
			$Cart = Cart::all();


			if(isset($_POST['framed'])){
				$size = $_POST['size'];
				$frame = Frames::where('size', '=', $size);

				// $Cart->frame_id = $frame['id'];
				echo "framed";
			} else {
				// $Cart->frame_id = $frame['id']['1'];
				echo "not framed";
			}
			

			foreach($Cart as &$item) {
				if (($item['print_id'] == $addPrintID) & ($item['session_id'] == $Cart_Session) & ($item['size_id'] == $addSizeID) & ($item['frame_id'] == $addFrameID)) {
					$PrintFound = true;
				}
			}
	echo " 1 here - after foreach loop.";
			if($PrintFound == true){
					//	Goes over each of the items in the cart and if there is a match with the Cart_Session and print_id
					//	it will update the cart item instead of creating a new one
					foreach($Cart as &$item) {
						 if (($item['print_id'] == $addPrintID) & ($item['session_id'] == $Cart_Session)) {
							$Print->quantity = $Print['quantity'] - $_POST['print_quantity'];
							$Print->save();

							$updateCart = Cart::where('print_id', '=', $addPrintID)->firstOrFail();
							
							$updateCart->print_id 	= $item['print_id'];
							$updateCart->size_id 	= $item['size_id'];
							$updateCart->frame_id 	= $item['frame_id'];
							$updateCart->quantity 	= $_POST['print_quantity'];
							$updateCart->subtotal 	= $item['subtotal'] + $subtotalPrice;
							break;
		 				}
		 			}
	echo " 2 here - after if statement.";
	var_dump($updateCart); 
					$updateCart->save();
					

			} else if ($PrintFound == false){
					// //Update Available prints 
					$Print->quantity = $Print['quantity'] - $request->quantity;
					$Print->save();
					//Adding Print to the users cart
					$newCart = new Cart();

					$newCart->session_id 	= $Cart_Session;
					$newCart->print_id 		= $Print['id'];
					$newCart->size_id 		= $Size['id'];
					$newCart->frame_id 		= $Frame['id'];
					$newCart->quantity 		= $request->quantity;
					$newCart->subtotal 		= $subtotalPrice;
					$newCart->save();

					// $newCart->session_id 	= $Cart_Session;
					// $newCart->print_id 		= $Print->id;
					// $newCart->size_id 		= $Size->id;
					// $newCart->frame_id 		= $Frame->id;
					// $newCart->quantity 		= $request->quantity;
					// $newCart->subtotal 		= $subtotalPrice;
					// $newCart->save();
			}
		echo " 3 here - after else if statement.";

		}

		// return redirect('cart');
	}

	public function update() {

	}

	public function remove() {

	}




}




