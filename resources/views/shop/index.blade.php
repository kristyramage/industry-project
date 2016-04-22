@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Buy everything... twice.')

@section('content')
	<h1 class="pageTitle">Prints</h1>

	<div id="featproducts" class="row">
		@foreach($allPrints as $print)
		<div class="col-xs-12 col-sm-4">
			<a href="shop/{{$print->title}}">
				<img src="http://placehold.it/300x300" alt=" {{ $print->description }} " class="col-xs-12">
			</a>
			<p class="text-center">{{ $print->title }} <br>
			{{ $print->price }}</p>
		</div>
		@endforeach
	</div>
@endsection