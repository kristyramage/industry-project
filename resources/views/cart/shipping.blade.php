@extends('master')

@section('title', 'Shipping')
@section('meta-description', 'Here we need to collect important information so your order get to you and not someone else.')

@section('content')
	<h1 class="pageTitle">Shipping</h1>
	<hr>

	<form role="form" id="shipping" action="/cart/orderreview" method="POST" class="form horizontal" enctype="multipart/form-data">
		{!! csrf_field() !!}
		
		<div class="row">
			
			<div class="form-group col-xs-12 col-md-6">
				<div>
				    <label for="name" class="control-label">Full Name</label>
				    <div>
				        <input class="form-control" id="name" name="name" value="{{old('name')}}">
				        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
				    </div>
				</div>

				<div class="top-space">
				    <label for="email" class="control-label">Email</label>
				    <div>
				        <input class="form-control" id="email" name="email" placeholder="jon@example.com" value="{{old('email')}}">
				        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
				    </div>
				</div>
			</div>

			<div class="form-group col-xs-12 col-md-6">
			    <label for="message" class="control-label">Message</label>
			    <div>
			        <textarea class="form-control" rows="5" name="message" placeholder="Please enter any delivery notes or a personal message if you wish.">{{old('message')}}</textarea>
			        {!! $errors->first('message','<span class="help-block">:message</span>') !!}
			    </div>
			</div>
		</div>

		<div class="row">
    		<div class="col-xs-12 col-md-6 form-group">
        		<label for="address1" class="control-label">Address Line 1</label>
        		<div>
          			<input class="form-control" id="address1" name="address1" placeholder="Street Address, P.O. box, company name, c/o">
          			{!! $errors->first('address1','<span class="help-block">:address1</span>') !!}
        		</div>
      		</div>

        	<div class="col-xs-12 col-md-6 form-group">
        		<label for="address2" class="control-label">Address Line 2</label>
        		<div>
          			<input class="form-control" id="address2" name="address2" placeholder="Apartment, suite, unit, building, floor, etc.">
          			{!! $errors->first('address2','<span class="help-block">:address2</span>') !!}
        		</div>
      		</div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-3 form-group">
	            <label for="country" class="control-label" placeholder="New Zealand">Country</label>
	            <input name="country" id="basic1" class="countries regester form-control" placeholder="New Zealand">
	            {!! $errors->first('country','<span class="help-block">:country</span>') !!}
        	</div>

	        <div class="col-xs-12 col-md-3 form-group">
	            <label class="control-label" for="state">State</label>
	            <input name="state" id="basic2" class="states regester form-control" placeholder="Taranaki">
	            {!! $errors->first('state','<span class="help-block">:state</span>') !!}
	        </div>

	        <div class="col-xs-12 col-md-3 form-group">
	            <label class="control-label" for="city">City</label>
	            <input name="city" id="basic3" class="cities regester form-control" placeholder="New Plymouth">
	            {!! $errors->first('city','<span class="help-block">:city</span>') !!}
	        </div>

	        <div class="col-xs-12 col-md-3 form-group">
	            <label class="control-label" for="postcode">Postcode</label>
	            <input class="form-control" id="postcode" name="postcode" placeholder="0000">
	            {!! $errors->first('postcode','<span class="help-block">:postcode</span>') !!}
	        </div>
        </div>

	</form>


		<div class="row">
			<div class="btn-boarder col-xs-12 col-sm-6">
				<a href="/cart" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Cart</a>
			</div>
			<div class="col-xs-12 col-sm-6 go-btn">
				<button form="shipping" id="shipping" class="pull-right btn">Proceed to order Review  <i class="glyphicon glyphicon-chevron-right"></i></button>
			</div>
		</div>

@endsection



