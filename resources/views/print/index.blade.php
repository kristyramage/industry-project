@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Buy everything... twice.')

@section('content')
	<h1 class="pageTitle">Prints</h1>

	<hr>
	@if(\Auth::check())
		@if(\Auth::user()->role === 'admin')

			<div class="btn-boarder">
		        <a class="btn btn-default" href="prints/create">New Print</a>	
		    </div>
		@endif()
	@endif()

	<div class="text-center">
		{!! $allPrints->links() !!}
	</div>

	<div id="featproducts" class="row">
		@foreach($allPrints as $print)
		<div class="col-xs-12 col-sm-4">
			<a href="/prints/{{$print->title}}">
				<img src="images/products/{{ $print->poster }}.jpg" alt=" {{ $print->description }} " class="col-xs-12">
			</a>
			<p class="text-center">{{ $print->title }} <br>
			From &#36;{{ ($Size->size_price + $print->price) }}</p>
		</div>
		@endforeach
	</div>

	<div class="text-center">
		{!! $allPrints->links() !!}
	</div>

@endsection