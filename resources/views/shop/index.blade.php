@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Buy everything... twice.')

@section('content')
	<h1 class="pageTitle">Prints</h1>

	<div id="featproducts" class="row">
		<div class="col-xs-12 col-sm-4">
			<a href="#">
				<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
			<p class="text-center">Title <br>
			$price</p>
		</div>

		<div class="col-xs-12 col-sm-4">
			<a href="#">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
			<p class="text-center">Title <br>
			$price</p>
		</div>

		<div class="col-xs-12 col-sm-4">
			<a href="#">
				<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
			<p class="text-center">Title <br>
			$price</p>
		</div>

	</div>
@endsection