<?php 
    public function add(Request $request){
   //  	$Event = Events::where('id', '=', $_POST['event_id'])->firstOrFail();
   //  	if(\Auth::check()){
	  //   	$this->validate($request,[
	  //   		'ticket_quantity'=>'required|min:1|numeric',
	  //   	]);
	  //   	$TotalTicketPrice = $Event['ticket_price'] * $_POST['ticket_quantity'];
			// if(! Session::has('Cart')){
			// 	Session::put('Cart', $array = []);
			// }
			// if(isset($_POST['addtocart'])){
			// 	$EventFound = false;
			// 	$addEventName = $Event['event_title'];
			// 	$cart = Session::get('Cart');
			// 	foreach($cart as &$item) {
			// 	    if ($item['Event_name'] == $addEventName) {
			// 	    	$EventFound = true;
			// 		}
			// 	}
			// 	if ($EventFound == true) {
			// 		foreach($cart as &$item) {
			// 		    if ($item['Event_name'] == $addEventName) {  
			// 		        $item['Tickets_requested'] = $item['Tickets_requested'] + $_POST['ticket_quantity'];
			// 		        $item['Subtotal'] = ($item['Subtotal'] + $TotalTicketPrice);
			// 		        break;
			// 		    }
			// 		}
			// 		Session::put('Cart', $cart);
			// 	}
			// 	// If the event was NOT found in the cart
			// 	if($EventFound == false){
			// 		Session::push('Cart', $array = [
			// 			'Event_id' => $request->event_id,
			//     		'Event_name' => $Event['event_title'],
			//     		'Tickets_requested' => $request->ticket_quantity,
			//     		'Ticket_price' => $Event['ticket_price'],
			//     		'Subtotal' => $TotalTicketPrice,
			//     	]);
			// 	}
			// }
	  //   	// Session::forget('Cart');
	  //   	return view('store.cart');  		
   //  	} else {
   //  		Session::flash('loginError', 'Error! Please log on to book tickets');
   //  		// Session::forget('Cart');
   //  		return redirect('Events/'.$Event['event_image']);
   //  	}
    }