@extends('master')

@section('title', 'Cart')
@section('meta-description', 'Here we hold summary of your purchase.')

@section('content')
	<h1 class="pageTitle">Shopping Cart</h1>

	<div>
			<hr>
			<!-- <h3>Your Shopping Cart is Empty</h3>

			<button class="go-btn">Continue Shopping</button> -->

			@if($countUserCart > 0)
			<p>You currently have X item(s) in your cart</p>

			<table class="table">
				<thead>
					<tr class="cart_menu">
						<th colspan="2">Item</th>
						<th>Price</th>
						<th>Quantity</th>
						<th colspan="2">Total</th>
					</tr>
				</thead>

				<tbody>
							// $_SESSION['cart'] as $product : ?>
					@foreach($userCart as $cartItem)
					<tr>
						<td><img src="http://placehold.it/100x100" alt="#"></td>
						<td>{{ $print->title }}</td>
						<td>{{ $print->price }}</td>
						<td>-changable 1</td>
						<td>$18.00</td>
						<td><a href="#">X</a></td>
					</tr>
					@endforeach
					
				</tbody>

				<tfoot>
					<tr>
						<td colspan="4">Total</td>
						<td colspan="1">$18.00</td>
						<td></td>
					</tr>
				</tfoot>
			</table>		

		<div class="pull-left go-btn">
			<button class="btn"><span class="glyphicon glyphicon-chevron-left"></span> CONTINE SHOPPING</button>
		</div>
		<div class="pull-right go-btn">
			<button class="btn"><span class="glyphicon glyphicon-refresh"></span> UPDATE CART</button>
			<button class="btn">PROCEED TO CHECKOUT <span class="glyphicon glyphicon-chevron-right"></span></button>
		</div>

		@else
			<h3>Your Shopping Cart is Empty</h3>
			<button class="go-btn">Continue Shopping</button>
		@endif

	</div>
@endsection