@extends('master')

@section('title', '#')
@section('meta-description', '#')

@section('content')

<h1 class="pageTitle">Edit print</h1>

	<div class="row">
		@if(\Auth::check())
			@if(\Auth::user()->role === 'admin')

				<form class="inline" action="print/edit" method="GET">
					{!! csrf_field() !!}
					<input name="id" type="hidden" value="{{ $Event->id }}">
					<button class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Edit Event</button>
				</form>
					
				<a href="/Remove-Event/{{ $Event->id }}" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Remove Event</a>

			@endif()
		@endif()

	</div>

@endsection