@extends('master')

@section('title', 'Print')
@section('meta-description', 'Single print for purchse, add to cart from this page.')

@section('content')

<h1 class="pageTitle">{{ $prints->title }}</h1>
<hr>
@if(\Auth::check())
	@if(\Auth::user()->role === 'admin')

		<div class="go-btn">
	        <a class="btn" href="/prints/edit/{{$prints->id}}">Edit Print</a>	
	    </div>
	@endif()
@endif()
	<div class="row">
		<div class="col-xs-12 col-md-5">

			@if($prints->poster !="")
		      <img src="../images/products/{{ $prints->poster }}.jpg" alt=" {{ $prints->description }} ">
		    @else
		      <p><small>No image found</small></p>
		    @endif

		</div>
		
		<div class="col-xs-12 col-md-7">
			<div class="col-xs-12">
				<h4>{{ $prints->title }}</h4>
				<h4>&#36;{{ $prints->price }}</h4>
			</div>

			<div class="col-xs-12">
				<p>DESCRIPTION</p>
			    <p>{{ $prints->description }}</p>
			</div>


			<form role="form" id="addtocart" action="/addtocart" method="POST" class="form horizontal" enctype="multipart/form-data">
		  		{!! csrf_field() !!}
		  		 <input type="hidden" name="id" value="{{$prints->id}}">

		      	<div class="form-group col-sm-4">
			      	<label for="size" class="control-label">Size</label>
			        <div>
			          <select class="form-control" id="size" name="size"
			            value=" ">
			            @foreach($sizes as $size) 
			            	<option>{{ $size->size}}</option>
			            @endforeach
			          </select>
			          {!! $errors->first('size','<span class="help-block">:message</span>') !!}
			        </div>
		        </div>

		        <div class="form-group col-sm-4">
			        <label for="print_quantity" class="control-label">Quantity</label>
			        <div>
			          <input type="number" class="form-control" id="print_quantity" name="print_quantity" value="1">
			          {!! $errors->first('print_quantity','<span class="help-block">:message</span>') !!}
			        </div>
		        </div>

		        <div class="form-group col-sm-4">
			        <label type="checkbox" name="framed" value="framed">Framed</label>
			        <div>
			          <input type="checkbox" class="form-control" id="framed" name="framed">
			        </div>
		    	</div>

		    	<div class="col-xs-12">
			    	<button type="submit" name="addtocart" class="btn btn-default col-xs-12">
			    		<span class="glyphicon glyphicon-shopping-cart"></span>  ADD TO CART
			    	</button>
			    </div>

		  	</form>


		</div>
		
	</div>

@endsection