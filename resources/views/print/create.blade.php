@extends('master')

@section('title', 'Add Print')
@section('meta-description', 'Add a new print to the store')

@section('content')

<h1 class="pageTitle">Create A New Print</h1>
<hr>
@if(\Auth::check())
	@if(\Auth::user()->role === 'admin')
	<div class="row">
		<div class="col-xs-12">

			<form role="form" id="contactForm" action=" ... " method="POST" class="form horizontal">
		  		{!! csrf_field() !!}
		      <div class="form-group col-sm-4">
		        <label for="title" class="control-label">Print Title</label>
		        <div>
		          <input class="form-control" id="title" name="title" value=" ">
		          <div class="help-block"></div>
		        </div>
		      </div>

		      <div class="form-group col-sm-4">
		        <label for="price" class="control-label">Print price</label>
		        <div>
		          <input type="number" class="form-control" id="price" name="price" value=" ">
		          <div class="help-block"></div>
		        </div>
		      </div>

		      <div class="form-group col-sm-4">
		        <label for="quantity" class="control-label">Number of prints avaliable</label>
		        <div>
		          <input type="number" class="form-control" id="quantity" name="quantity" value=" ">
		          <div class="help-block"></div>
		        </div>
		      </div>

		      <div class="form-group col-sm-12">
		        <label for="description" class="control-label">Print Description</label>
		        <div>
		          <textarea class="form-control" rows="3" name="description" placeholder="Type a description of the print here"></textarea>
		          <div class="help-block"></div>
		        </div>
		      </div>


		      <div class="form-group col-sm-12">
		        <div class="go-btn">
		          <button class="btn">Create Print!</button>
		        </div>
		      </div>
	    	</form>

		</div>
	</div>
	@endif()
@endif()
@endsection