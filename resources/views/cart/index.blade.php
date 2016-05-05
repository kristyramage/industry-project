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
						<tr>
							<th style="width:50%">Print</th>
							<th style="width:10%">Price (NZD)</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%">Subtotal (NZD)</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $cartItem)
							<tr>
								<td>{{ $cartItem->prints->title }}</td>
								<td>{{ $cartItem->print_sizes->size }}</td>
								<td> {{ $cartItem->frame_sizes->size }}</td>
							</tr>
						@endforeach
						
					</tbody>
					<tfoot>
						
					</tfoot>				
				</table>
			@else
				<p>Your Basket is Empty!!</p>
				<p><a href="/prints" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Go to prints Page</a></p>
			@endif
		</div>

	</div>
@endsection