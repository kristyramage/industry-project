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

			<div class="form-group col-sm-6">
		        <label for="size" class="control-label">Size</label>
		        <div>
		          <select class="form-control" id="size" name="size"
		            value=" ">
		            <option>A5</option>
		            <option>A4</option>
		            <option>A3</option>
		            <option>A2</option>
		          </select>
		          <div class="help-block"></div>
		        </div>
		    </div>

		    <div class="form-group col-sm-6">
		        <label type="checkbox" name="framed" value="framed">Framed</label>
		        <div>
		          <input type="checkbox" class="form-control" id="framed" name="framed">
		          <div class="help-block"></div>
		        </div>
		    </div>

		    <form id="addToCart" action="/addtocart" method="POST" class="col-xs-12" enctype="multipart/form-data">
		    	{!! csrf_field() !!}

		    	<button type="submit" name="addtocart" class="btn btn-default col-xs-12 space">
		    		<span class="glyphicon glyphicon-shopping-cart"></span>  ADD TO CART
		    	</button>
		    	
		    </form>

		</div>
		
	</div>

@endsection