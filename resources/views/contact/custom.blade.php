@extends('master')

@section('title', 'Custom Print')
@section('meta-description', 'Order your own custom Captured Write print!')

@section('content')
	<h1 class="pageTitle">Custom Prints</h1>
	<hr>
	<div class="row">
		<div class="col-sm-6" >
		  	<h4>ORDER YOUR OWN CUSTOM PRINT!</h4>
		  	<p>
		  		Terms and conditions... <br>
		  		Please specify a size and if you would like the print framed? <br>
		  		If you would like a print on a novelty item please specify and I'll will be in contact
		  		if I can create the product. <br>
		  	</p>	
			
		</div>

		<div class="col-sm-6" >
		  	<form role="form" id="customPrintForm" action="/contact/custom" method="POST" class="form horizontal">
		  		{!! csrf_field() !!}
		      <div class="form-group col-sm-12">
		        <label for="customName" class="control-label">Your Name</label>
		        <div>
		          <input class="form-control" id="customName" name="customName" value=" ">
		          {!! $errors->first('customName','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-12">
		        <label for="email" class="control-label">Email</label>
		        <div>
		          <input class="form-control" id="email" name="email" placeholder="jon@example.com"
		            value=" ">
		          {!! $errors->first('email','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group col-sm-12">
		        <label for="description" class="control-label">Description</label>
		        <div>
		          <textarea class="form-control" rows="3" name="description" placeholder="Type your description here"></textarea>
		          {!! $errors->first('description','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>


		      <div class="form-group col-sm-12">
		        <div class="go-btn">
		          <button class="btn">Get a quote</button>
		        </div>
		      </div>
	    	</form>
	    </div> 
  	</div>
@endsection