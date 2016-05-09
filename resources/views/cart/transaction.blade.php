@extends('master')

@section('title', 'Payment')
@section('meta-description', 'Pay for your order here.')

@section('content')
	<h1 class="pageTitle">Payment</h1>
	<hr>
	{{-- <div class="row"> --}}


		<form id="checkout" method="post" action="/checkout">
			{!! csrf_field() !!}
		    <div id="payment-form"></div>

		    <button type="submit" class="btn btn-success pull-right btn-lg">
				Pay Now <i class="glyphicon glyphicon glyphicon-menu-right"></i>
			</button>
		</form>

		<div class="row">
			<div class="btn-boarder col-xs-12 col-sm-6">
				<a href="/cart/orderreview" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Order Review</a>
			</div>

			{{-- <div class="col-xs-12 col-sm-6 go-btn">
				<button form="checkout" id="checkout" class="pull-right btn">Submit order <i class="glyphicon glyphicon-chevron-right"></i></button>
			</div> --}}
		</div>

	{{-- </div> --}}

	
@endsection

@section('scripts')

	<script src="https://js.braintreegateway.com/js/braintree-2.23.0.min.js"></script>
	<script type="text/javascript">

		var clientToken = "<?php echo($clientToken = Braintree_ClientToken::generate()); ?>";
		braintree.setup(clientToken, "dropin", {
		  container: "payment-form"
		});

	</script>

@endsection
