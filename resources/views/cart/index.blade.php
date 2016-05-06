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
			 					<th class="tnail-cart ">Item</th>
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

			 					<form action="/updatecart/{{$cartItem->id}}" method="POST" id="refresh{{$cartItem->id}}">
									{!! csrf_field() !!}
										<td data-th="Quantity" class="text-right r-btn">
											<input type="number" id="quantity" name="quantity" min="1" max="{{ $cartItem->prints->quantity }}" value="{{ $cartItem->quantity }}">
											<button form="refresh{{$cartItem->id}}"><i class="glyphicon glyphicon-refresh"></i></button>
										</td>
										<td data-th="Subtotal" class="text-right">{{ $cartItem->subtotal }}</td>
										<td class="actions" data-th="">			
										<input type="hidden" name="print_id" value="{{ $cartItem->print_id }}">
								</form>

			 					<td>
			 						<form action="/removefromcart/{{$cartItem->id}}" method="POST" class="x-btn text-right">
										{!! csrf_field() !!}
										<input type="hidden" name="cartItem" value="{{$cartItem->event_id}}">
										<button title="Remove From Cart" id="remove-btn" class=" go-btn"><i class="glyphicon glyphicon-remove"></i></button>
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

				<div class="row">
					<div class="btn-boarder col-xs-12 col-sm-6">
						<a href="/prints" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Continue Shopping</a>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="btn-boarder">
							<a href="#" class="pull-right btn">Proceed to checkout  <i class="glyphicon glyphicon-chevron-right"></i></a>
						</div>
						<div class="go-btn">
							
						</div>
					</div>
				</div>
			@else
				<p>Your Shopping Cart is Empty!!</p>
				<div class="btn-boarder">
					<p><a href="/prints" class=""><i class="glyphicon glyphicon-menu-left"></i>Continue Shopping</a></p>
				</div>
			@endif
		</div>

	</div>
@endsection