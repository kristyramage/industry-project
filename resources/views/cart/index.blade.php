@extends('master')

@section('title', 'Cart')
@section('meta-description', 'Here we hold summary of your purchase.')

@section('content')
	<h1 class="pageTitle">Shopping Cart</h1>
	<hr>
	<div class="row">

		<div class="col-xs-12">
			@if($CountCart > 0) 
				<table id="cart" class="table table-hover table-condensed">
					<thead>
			 				<tr class="cart_menu">
			 					<th>Item</th>
			 					<th><!-- Description --></th>
			 					<th class="text-right">Price</th>
			 					<th class="text-right">Quantity</th>
			 					<th class="text-right">Total</th>
			 					<th></th>
			 				</tr>
					</thead>
					<tbody>
						@foreach($cart as $cartItem)
							<tr>
			 					<td><img src="../images/thumbnails/<?=  preg_replace("/[^0-9a-zA-Z]/", "", $cartItem->prints->title ); ?>.jpg" alt="{{ $cartItem->prints->title }} image"></td>
			 					<td>
			 						<ul>
			 						   	<li>{{ $cartItem->prints->title }}</li>
			 						   	<li> @if($cartItem->frame_sizes->id !== 1) Framed @endif</li>
			 						   	<li>{{ $cartItem->print_sizes->size }}</li>
			 						   	<li>{{ $cartItem->prints->description }}</li>
			 						</ul>
			 					</td>
			 					<td class="text-right">&#36;{{ $cartItem->single_price }}</td>
			 					<td class="text-right">{{ $cartItem->quantity }}</td>
			 					<td class="text-right">&#36;{{ $cartItem->subtotal }}</td>
			 					{{-- <td class="text-right"><a href="\removefromcart\{{$cartItem->id}}">X</a> --}}

			 					<td>
			 						<form action="removefromcart\{{$cartItem->id}}" method="POST" class="x-btn">
										{!! csrf_field() !!}
										<input type="hidden" name="cartItem" value="{{$cartItem->event_id}}">
										<button title="Remove From Cart" id="remove-btn" class="go-btn"><i class="glyphicon glyphicon-remove"></i></button>
									</form>

			 					</td>
			 				</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
		 					<td></td>
		 					<td></td>
		 					<td></td>
		 					<td class="text-right"><strong>Total</strong></td>
		 					<td class="text-right"><strong>&#36;{{$grandtotal}}.00</strong></td>
		 					<td></td>
		 				</tr>
					</tfoot>				
				</table>
			@else
				<p>Your Shopping Cart is Empty!!</p>
				<div class="go-btn">
					<p><a href="/prints" class=""><i class="glyphicon glyphicon-menu-left"></i>Continue Shopping</a></p>
				</div>
			@endif
		</div>

	</div>
@endsection