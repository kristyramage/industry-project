@extends('master')

@section('title', '#')
@section('meta-description', '#')

@section('content')

<h1 class="pageTitle">Confirm Delete</h1>
<hr>
	<div class="row">
	<div>
		<h2>
			Are you sure you want to delete
		</h2>
		<p class="para-title">
			{{ $prints->title }}
		</p>
		<div class="form-group col-sm-12">
		        <div class="go-btn">
					<a href="prints/removeprint/{{$prints->id}}" class="btn btn-danger" role="button">
						<i class="glyphicon glyphicon-remove"></i> Remove Print
					</a>
				</div>
			</div>
	</div>
	</div>

@endsection
