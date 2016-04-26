@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Buy everything... twice.')

@section('content')
	<h1 class="pageTitle">Prints</h1>

	<hr>
	@if(\Auth::check())
		@if(\Auth::user()->role === 'admin')

			<div class="go-btn">
		        <a class="btn" href="print/create">Add Print</a>	
		    </div>
		@endif()
	@endif()


	<div id="featproducts" class="row">
		@foreach($allPrints as $print)
		<div class="col-xs-12 col-sm-4">
			<a href="print/{{$print->title}}">
				<img src="http://placehold.it/300x300" alt=" {{ $print->description }} " class="col-xs-12">
			</a>
			<p class="text-center">{{ $print->title }} <br>
			{{ $print->price }}</p>
		</div>
		@endforeach
	</div>

@endsection