@extends('master')

@section('title', 'Review Order')
@section('meta-description', 'Here we hold summary of your purchase before payment. Please ensure you have everything you want')

@section('content')
	<h1 class="pageTitle">Order Review</h1>
	<hr>
	<div class="row">




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