@extends('master')

@section('title', 'Add Print')
@section('meta-description', 'Add a new print to the store')

@section('content')

<h1 class="pageTitle">Create A New Print</h1>
<hr>
@if(\Auth::check())
	@if(\Auth::user()->role === 'admin')
	<div class="row">


		<a href="/Remove-Print/{{ $print->id }}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Remove Print</a>
	</div>
	@endif()
@endif(
@endsection