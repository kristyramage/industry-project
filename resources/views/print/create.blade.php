@extends('master')

@section('title', 'Add Print')
@section('meta-description', 'Add a new print to the store')

@section('content')


<p>errors</p>

	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>



<h1 class="pageTitle">Create A New Print</h1>
<hr>

	<div class="row">
		<div class="col-xs-12">

			<form role="form" id="create" action="/store" method="post" class="form horizontal" enctytpe="multipart/form-data">
		  		{!! csrf_field() !!}

		      <div class="form-group col-sm-4 {{ $errors->has('title') ? 'has-error' :'' }}">
		        <label for="title" class="control-label">Print Title</label>
		        <div>
		          <input class="form-control" id="title" name="title" value="">
		          {!! $errors->first('title','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-12">
		        <div class="go-btn">
		          <button type="submit" class="btn">Create Print!</button>
		        </div>
		      </div>
	    	</form>

		</div>
	</div>

@endsection