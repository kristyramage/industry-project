@extends('master')

@section('content')
	<h1>Cart Page</h1>

	<div class="row">
		<h3>YOUR CART</h3>
			<hr>
			<h3>Your Shopping Cart is Empty</h3>

			<button class="go-btn">Continue Shopping</button>

			<table class="table">
				<tr class="cart_menu">
					<th>Item</th>
					<th><!-- Description --></th>
					<th class="text-right">Price</th>
					<th class="text-right">Quantity</th>
					<th class="text-right">Total</th>
					<th></th>
				</tr>

				<tr>
					<td><img src="http://placehold.it/100x100" alt="#"></td>
					<td>
						<ul>
						   	<li>Item Name</li>
						   	<li> </li>
						   	<li>Art Print/-art print size</li>
						   	<li>Printed area -size</li>
						</ul>
					</td>
					<td class="text-right">$18.00</td>
					<td class="text-right">-changable 1</td>
					<td class="text-right">$18.00</td>
					<td class="text-right">X</td>
				</tr>

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-right">Item total</td>
					<td class="text-right">$18.00</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-right">Subtotal</td>
					<td class="text-right">$18.00</td>
					<td></td>
				</tr>
			</table>
	</div>
@endsection