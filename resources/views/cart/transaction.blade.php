@extends('master')

@section('title', 'Payment')
@section('meta-description', 'Pay for your order here.')

@section('content')
	<h1 class="pageTitle">Payment</h1>
	<hr>
	<div class="row">




		<div class="row">
			<div class="btn-boarder col-xs-12 col-sm-6">
				<a href="/cart/orderreview" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Order Review</a>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="btn-boarder">
					<a href="/cart/ordersummary" class="pull-right btn">Submit order  <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>

	</div>
@endsection