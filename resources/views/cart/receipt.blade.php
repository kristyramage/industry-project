@extends('master')

@section('title', 'Order Summary')
@section('meta-description', 'Here we hold summary of your purchase. This information will also be emailed to you. Have a great day!')

@section('content')
	<h1 class="pageTitle">Order Summary</h1>
	<hr>
	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<p>
				{{ $Shipping['name'] }} <br>
				{{ $Shipping['email'] }}<br>
				Message: {{ $Shipping['message'] }}<br>
				<br>
				{{ $Shipping['street'] }}<br>
				{{ $Shipping['city'] }} {{ $Shipping['postcode'] }} <br>
				{{ $Shipping['state'] }} <br>
				{{ $Shipping['country'] }}
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
@endsection