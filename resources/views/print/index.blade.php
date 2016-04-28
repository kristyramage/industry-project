@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Buy everything... twice.')

@section('content')
	<h1 class="pageTitle">Prints</h1>

	<hr>
	@if(\Auth::check())
		@if(\Auth::user()->role === 'admin')

			<div class="go-btn">
		        <a class="btn" href="prints/create">New Print</a>	
		    </div>
		@endif()
	@endif()


	<div id="featproducts" class="row">
		@foreach($allPrints as $print)
		<div class="col-xs-12 col-sm-4">
			<a href="prints/{{$print->title}}">
				<img src="http://placehold.it/300x300" alt=" {{ $print->description }} " class="col-xs-12">
			</a>
			<p class="text-center">{{ $print->title }} <br>
			&#36;{{ $print->price }}</p>
		</div>
		@endforeach
	</div>

@endsection