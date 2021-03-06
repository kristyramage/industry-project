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
		// Create a session_id if there is none
		$Cart_Session = SessionString('Cart');

		$cart = Cart::where('session_id', '=', $Cart_Session)->get();

		$CountCart = $cart->count();
		$grandtotal = 0;		
		foreach ($cart as $cartitem) {
			$grandtotal += $cartitem->subtotal;
		}
		

		return view('cart.index', compact('cart', 'CountCart', 'grandtotal'));
	}

	public function add(Request $request) {
		// include all Tables from the database
		$Print = Prints::where('id', '=', $_POST['id'])->firstOrFail();
		$Size = PrintSizes::where('size', '=', $_POST['size'])->firstOrFail();

		if(isset($_POST['framed'])){
			$size = $_POST['size'];
			$Frame = Frames::where('size', '=', $size)->firstOrFail();
		} else {
			$Frame = Frames::where('id', '=', '1')->firstOrFail();
		}		

		// Validation
		$this->validate($request,[
				'size'=>'required',
				'print_quantity'=>'required|min:1|numeric',
			]);

		// Create a session_id
		$Cart_Session = SessionString('Cart');

		// Calculate totals
		$singlePrice = $Size['size_price'] + $Print['price'] + $Frame['size_price'];
		$subtotalPrice = $singlePrice * $_POST['print_quantity'];

		if(isset($_POST['addtocart'])){
			$PrintFound = false;
			$addPrintID = $Print['id'];
			$addSizeID = $Size['id'];
			$addFrameID = $Frame['id'];
			$Cart = Cart::all();

			foreach($Cart as &$item) {
				// Check for a match
				if (($item['print_id'] == $addPrintID) & ($item['session_id'] == $Cart_Session) & ($item['size_id'] == $addSizeID) & ($item['frame_id'] == $addFrameID)) {
					$PrintFound = true;
				}
			}

		};

		if($PrintFound === true){
			foreach($Cart as &$item) {
				// Find match in database
				if (($item['print_id'] == $addPrintID) & ($item['session_id'] == $Cart_Session) & ($item['size_id'] == $addSizeID) & ($item['frame_id'] == $addFrameID)) {
					$matchThese = [	'session_id'	=> $Cart_Session, 
									'print_id' 		=> $addPrintID,
									'size_id' 		=> $addSizeID,
									'frame_id' 		=> $addFrameID,
									 ];

					$updateCart = Cart::where($matchThese)->firstOrFail();
					
					// Values that need to be updated
					$updateCart->quantity 	= $updateCart['quantity'] + $request->print_quantity;
					$updateCart->subtotal 	= $item['subtotal'] + $subtotalPrice;
					break;
				}
				
			}
			$updateCart->save();

		} else {
			$Print->quantity = $Print['quantity'] - $request->print_quantity;
			$Print->save();
			// Adding Print to the guest cart
			$newCart = new Cart();
			$newCart->session_id 	= $Cart_Session;
			$newCart->print_id 		= $Print['id'];
			$newCart->size_id 		= $Size['id'];
			$newCart->frame_id 		= $Frame['id'];
			$newCart->quantity 		= $request->print_quantity;
			$newCart->single_price	= $singlePrice;
			$newCart->subtotal 		= $subtotalPrice;

			$newCart->save();	
		}

		return redirect('cart');
	}

	public function update($id) {
		$refreshCartItem = $_POST;
		$cartItem = Cart::where('id', '=', $id)->firstOrFail();

		// define the right print
		$printID = $_POST['print_id'];
		$print = Prints::where('id', '=', $printID)->firstOrFail();

		// update cart and database
		if($refreshCartItem['quantity'] > $cartItem['quantity']){
			$Difference = $refreshCartItem['quantity'] - $cartItem['quantity'];
			// removing from database
			$print->quantity = $print['quantity'] - $Difference;

		} else if($refreshCartItem['quantity'] < $cartItem['quantity']){
			$Difference = $cartItem['quantity'] - $refreshCartItem['quantity'];
			// adding to database
			$print->quantity = $print['quantity'] + $Difference;
		}
		$print->save();

		// update totals
		$cartItem->quantity = $refreshCartItem['quantity'];
		$cartItem->subtotal = $refreshCartItem['quantity'] * $cartItem['single_price'];
		$cartItem->save();

		return redirect('cart');
	}

	public function remove($id){

        $Cart_Session = SessionString('Cart');
		$cart = Cart::where('session_id', '=', $Cart_Session)->firstOrFail();
		$cartItem = Cart::where('id', '=', $id)->firstOrFail();
		
		$printID = $cartItem['print_id'];

		$print = Prints::where('id', '=', $printID)->firstOrFail();
		$print->quantity = $print['quantity'] + $cartItem['quantity'];
		$print->save();

        $cartItem->delete();

        return redirect('cart');
    }
    
	
}




