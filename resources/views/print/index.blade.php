@extends('master')

@section('title', '#')
@section('meta-description', '#')

@section('content')

<h1 class="pageTitle">{{ $prints->title }}</h1>
<hr>
	<div class="row">
		<div class="col-xs-12 col-md-5">

		</div>
		
		<div class="col-xs-12 col-md-7">
			<h4>{{ $prints->title }}</h4>
			<h4>&#36;{{ $prints->price }}</h4>
		</div>
		
	</div>

@endsection