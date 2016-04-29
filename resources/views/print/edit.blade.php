@extends('master')

@section('title', 'Edit')
@section('meta-description', 'Edit existing prints in the database')

@section('content')

<h1 class="pageTitle">Edit print</h1>
<hr>
	@if(\Auth::check())
	@if(\Auth::user()->role === 'admin')
		<div class="row">
			<div class="col-xs-12">
											<!-- is the method supposed to be POST? -->
				<form role="form" id="edit" action="/prints/update" method="POST" class="form horizontal" enctype="multipart/form-data">
		  		{!! csrf_field() !!}
		  		 <input type="hidden" name="id" value="{{$prints->id}}">

		      <div class="form-group col-sm-4">
		        <label for="title" class="control-label">Print Title</label>
		        <div>
		          <input class="form-control" id="title" name="title" value="{{$prints->title}}">
		          {!! $errors->first('title','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-4">
		        <label for="price" class="control-label">Print price</label>
		        <div>
		          <input type="number" class="form-control" id="price" name="price" value="{{$prints->price}}">
		          {!! $errors->first('price','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-4">
		        <label for="quantity" class="control-label">Number of prints avaliable</label>
		        <div>
		          <input type="number" class="form-control" id="quantity" name="quantity" value="{{$prints->quantity}}">
		          {!! $errors->first('quantity','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		        <div class="form-group col-xs-12 col-md-4">
					<label for="poster">Print Poster</label>
					<input type="file" for="poster" name="poster">
					{!! $errors->first('poster','<span class="help-block">:message</span>') !!}
				</div>

		      <div class="form-group col-xs-12 col-sm-8">
		        <label for="description" class="control-label">Print Description</label>
		        <div>
		          <textarea class="form-control" rows="3" name="description">{{$prints->description}}</textarea>
		          {!! $errors->first('description','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

			<div class="form-group col-sm-12">
		        <div class="go-btn">
		          <button type="submit" class="btn">Edit Print!</button>
		        </div>
		      </div>
	    	</form>
			
			<div class="form-group col-sm-12">
		        <div class="go-btn">
					<a href="/prints/removeprint/{{$prints->id}}" class="btn btn-danger" role="button">
						<i class="glyphicon glyphicon-remove"></i> Remove Print
					</a>
				</div>
			</div>

			</div>
		</div>
		@endif()
	@endif()

	

@endsection