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
			 						   	<li>Printed area -size</li>
			 						</ul>
			 					</td>
			 					<td class="text-right">$number</td>
			 					<td class="text-right">{{ $cartItem->quantity }}</td>
			 					<td class="text-right">$number</td>
			 					<td class="text-right">X</td>
			 				</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
		 					<td></td>
		 					<td></td>
		 					<td></td>
		 					<td class="text-right"><strong>Total</strong>> </td>
		 					<td class="text-right"><strong>$number</strong></td>
		 					<td></td>
		 				</tr>
					</tfoot>				
				</table>
			@else
				<p>Your Shopping Cart is Empty!!</p>
				<p><a href="/prints" class="go-btn"><i class="glyphicon glyphicon-menu-left"></i>Continue Shopping</a></p>
			@endif
		</div>

	</div>
@endsection