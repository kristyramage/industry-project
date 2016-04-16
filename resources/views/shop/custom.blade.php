@extends('master')

@section('content')
	<h1 class="pageTitle">Custom Prints</h1>

	<div class="row">
		<div class="col-sm-6" >
		  	<h4>ORDER YOUR OWN CUSTOM PRINT!</h4>
		  	<p>
		  		Terms and conditions...
		  	</p>	
			
		</div>

		<div class="col-sm-6" >
		  	<form role="form" id="customPrintForm" action=" ... " method="POST" class="form horizontal">

		      <div class="form-group col-sm-12">
		        <label for="customName" class="control-label">Your Name</label>
		        <div>
		          <input class="form-control" id="customName" name="customName" value=" ">
		          <div class="help-block"></div>
		        </div>
		      </div>

		      <div class="form-group col-sm-12">
		        <label for="email" class="control-label">Email</label>
		        <div>
		          <input class="form-control" id="email" name="email" placeholder="jon@example.com"
		            value=" ">
		          <div class="help-block"></div>
		        </div>
		      </div>

		      <div class="form-group col-sm-6">
		        <label for="email" class="control-label">Size</label>
		        <div>
		          <select class="form-control" id="email" name="email"
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

		      <div class="form-group col-sm-12">
		        <label for="description" class="control-label">Description</label>
		        <div>
		          <textarea class="form-control" rows="3" name="description" placeholder="Type your description here"></textarea>
		          <div class="help-block"></div>
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