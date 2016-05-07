@extends('master')

@section('title', 'Review Order')
@section('meta-description', 'Here we hold summary of your purchase before payment. Please ensure you have everything you want')

@section('content')
	<h1 class="pageTitle">Order Review</h1>
	<hr>

	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<p>
				name <br>
				email <br>
				message <br>
				<br>
				address1 address2 <br>
				city postcode <br>
				state <br>
				country
			</p>
		</div>
		
	</div>

	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<table id="orderReview" class="table">
				<thead>
					<tr>
						<th class="tnail-cart">Item</th>
				 		<th><!-- Description --></th>
				 		<th class="text-right">Price</th>
				 		<th class="text-right">Quantity</th>
				 		<th class="text-right">Total</th>
					</tr>
				</thead>

				<tbody>

						<tr>
							<td><img src="http://placehold.it/100x100" alt="image"></td>
							<td>
						 		<ul>
						 			<li>title</li>
						 			<li>Framed?</li>
						 			<li>size</li>
						 			<li>description</li>
						 		</ul>
						 	</td>
						 	<td class="text-right">&#36;single_price</td>
						 	<td class="text-right">quantity</td>
						 	<td class="text-right">&#36;subtotal</td>
						</tr>
					
				</tbody>

				<tfoot>
					<tr>
						<td></td>
				 		<td></td>
				 		<td></td>
				 		<td class="text-right"><strong>Shipping</strong></td>
				 		<td class="text-right"><strong>&#36;shipping.00</strong></td>
				 		<td></td>
				 	</tr>
					<tr>
						<td></td>
				 		<td></td>
				 		<td></td>
				 		<td class="text-right"><strong>Total</strong></td>
				 		<td class="text-right"><strong>&#36;grandtotal.00</strong></td>
				 		<td></td>
				 	</tr>
				</tfoot>

			</table>
		</div>


		<div class="row">
			<div class="btn-boarder col-xs-12 col-sm-6">
				<a href="/cart/shipping" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Shipping</a>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="btn-boarder">
					<a href="/cart/transaction" class="pull-right btn">Proceed to payment  <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>

	</div>
@endsection