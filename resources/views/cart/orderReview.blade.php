@extends('master')

@section('title', 'Review Order')
@section('meta-description', 'Here we hold summary of your purchase before payment. Please ensure you have everything you want')

@section('content')
	<h1 class="pageTitle">Order Review</h1>
	<hr>

	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<p>
				{{ $Shipping }} <br>
				Email: <br>
				Message:<br>
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
			              <td class="text-right">&#36;{{$cartItem->subtotal}}</td>
			            </tr>
			        @endforeach
					
				</tbody>

				<tfoot>
					<tr>
						<td></td>
				 		<td></td>
				 		<td></td>
				 		<td class="text-right"><strong>Shipping</strong></td>
				 		<td class="text-right"><strong>&#36;{{ number_format($shippingCost, 2)}}</strong></td>
				 		<td></td>
				 	</tr>
					<tr>
						<td></td>
				 		<td></td>
				 		<td></td>
				 		<td class="text-right"><strong>Total</strong></td>
				 		<td class="text-right"><strong>&#36;{{ number_format($grandtotal, 2) }}</strong></td>
				 		<td></td>
				 	</tr>
				</tfoot>

			</table>
		</div>
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

@endsection