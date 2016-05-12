@extends('master')

@section('title', 'Edit')
@section('meta-description', 'Edit existing prints in the database')

@section('content')

<h1 class="pageTitle">Edit print</h1>
<hr>
		<div class="row">
			<div class="col-xs-12">
											<!-- is the method supposed to be POST? -->
				<form role="form" id="edit" action="/prints/update" method="POST" class="form horizontal" enctype="multipart/form-data">
		  		{!! csrf_field() !!}
		  		 <input type="hidden" name="id" value="{{$prints->id}}">

		      <div class="form-group col-sm-4 {{ $errors->has('title') ? 'has-error' :'' }}">
		        <label for="title" class="control-label">Print Title</label>
		        <div>
		          <input class="form-control" id="title" name="title" value="{{$prints->title}}">
		          {!! $errors->first('title','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-4 {{ $errors->has('price') ? 'has-error' :'' }}">
		        <label for="price" class="control-label">Print price</label>
		        <div>
		          <input type="number" class="form-control" id="price" name="price" value="{{$prints->price}}" min="0">
		          {!! $errors->first('price','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-4 {{ $errors->has('quantity') ? 'has-error' :'' }}">
		        <label for="quantity" class="control-label">Number of prints avaliable</label>
		        <div>
		          <input type="number" class="form-control" id="quantity" name="quantity" value="{{$prints->quantity}}" min="1">
		          {!! $errors->first('quantity','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		        <div class="form-group col-xs-12 col-md-4 {{ $errors->has('poster') ? 'has-error' :'' }}">
					<label for="poster">Print Poster</label>
					<input type="file" for="poster" name="poster">
					{!! $errors->first('poster','<span class="help-block">:message</span>') !!}
				</div>

		      <div class="form-group col-xs-12 col-sm-8 {{ $errors->has('description') ? 'has-error' :'' }}">
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


			<div class="delete-product-modal">
	            <div class="form-group col-sm-12">
		            <div>
			            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">
			               	<i class="glyphicon glyphicon-remove"></i> Remove Print
			            </button>
			        </div>

	                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mysmModalLabel">
	                        <div class="modal-dialog modal-sm">
	                            <div class="modal-content">

	                            	<div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								        	<span aria-hidden="true">&times;</span>
								        </button>
								        <h4 class="modal-title text-center">Remove Print</h4>
								    </div>

								    <div class="modal-body text-center">
								        <p>Are you sure you want to delete this print?</p>
								    </div>

								    <div class="modal-footer">
								        <a href="/prints/removeprint/{{$prints->id}}" class="btn btn-danger col-xs-12" role="button">
	                                    	Yes
	                                    </a>
								     </div>

	                            </div>
	                        </div>
	                    </div>

	        	</div>
        	</div>




			</div>
		</div>
	

@endsection