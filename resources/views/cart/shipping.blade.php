@extends('master')

@section('title', 'Shipping')
@section('meta-description', 'Here we need to collect important information so your order get to you and not someone else.')

@section('content')
	<h1 class="pageTitle">Shipping</h1>
	<hr>
	<div class="row">




		<div class="row">
			<div class="btn-boarder col-xs-12 col-sm-6">
				<a href="/cart" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Cart</a>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="btn-boarder">
					<a href="/cart/orderreview" class="pull-right btn">Proceed to order Review  <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>

	</div>
@endsection