@extends('master')

@section('title', 'Shipping')
@section('meta-description', 'Here we need to collect important information so your order get to you and not someone else.')

@section('content')
	<h1 class="pageTitle">Shipping</h1>
	<hr>
	<div>
		<p>&#42; Required fields</p>
		<p>&#42;&#42; Please double check your details before submitting.</p>
		<p>The information you provide here will only be used for the purposes of this single purchase.</p>
	</div>

	<hr>

	<form role="form" id="shippingform" name="shippingform" action="/cart/submitshipping" method="POST" class="form horizontal" enctype="multipart/form-data">
		{!! csrf_field() !!}
		
		<div class="row">
			
			<div class="form-group col-xs-12 col-md-6">
				<div class="{{ $errors->has('name') ? 'has-error' :'' }}">
				    <label for="name" class="control-label">&#42;Full Name</label>
				    <div>
				        <input class="form-control" id="name" name="name" value="{{old('name')}}">
				        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
				    </div>
				</div>

				<div class="top-space {{ $errors->has('email') ? 'has-error' :'' }}">
				    <label for="email" class="control-label">&#42;Email</label>
				    <div>
				        <input class="form-control" id="email" name="email" placeholder="jon@example.com" value="{{old('email')}}">
				        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
				    </div>
				</div>

				<div class="top-space {{ $errors->has('phone') ? 'has-error' :'' }}">
				    <label for="phone" class="control-label">&#42;Phone</label>
				    <div>
				        <input class="form-control" id="phone" name="phone" placeholder="jon@example.com" value="{{old('phone')}}">
				        {!! $errors->first('phone','<span class="help-block">:message</span>') !!}
				    </div>
				</div>
			</div>

			<div class="form-group col-xs-12 col-md-6 {{ $errors->has('message') ? 'has-error' :'' }}">
			    <label for="message" class="control-label">&#42;Message</label>
			    <div>
			        <textarea class="form-control" rows="8" name="message" placeholder="Please enter any delivery notes or a personal message if you wish.">{{old('message')}}</textarea>
			        {!! $errors->first('message','<span class="help-block">:message</span>') !!}
			    </div>
			</div>
		</div>

		<div class="row">
    		<div class="col-xs-12 form-group {{ $errors->has('street') ? 'has-error' :'' }}">
        		<label for="street" class="control-label">&#42;Street</label>
        		<div>
          			<input class="form-control" id="street" name="street" placeholder="Street Address, P.O. box, company name, c/o" value="{{old('street')}}">
          			{!! $errors->first('street','<span class="help-block">:message</span>') !!}
        		</div>
      		</div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-md-3 form-group {{ $errors->has('country') ? 'has-error' :'' }}">
	            <label for="country" class="control-label" placeholder="New Zealand">&#42;Country</label>
	            <input name="country" id="basic1" class="countries regester form-control" placeholder="New Zealand" value="{{old('country')}}">
	            {!! $errors->first('country','<span class="help-block">:message</span>') !!}
        	</div>

	        <div class="col-xs-12 col-md-3 form-group {{ $errors->has('state') ? 'has-error' :'' }}">
	            <label class="control-label" for="state">&#42;State</label>
	            <input name="state" id="basic2" class="states regester form-control" placeholder="Taranaki" value="{{old('state')}}">
	            {!! $errors->first('state','<span class="help-block">:message</span>') !!}
	        </div>

	        <div class="col-xs-12 col-md-3 form-group {{ $errors->has('city') ? 'has-error' :'' }}">
	            <label class="control-label" for="city">&#42;City</label>
	            <input name="city" id="basic3" class="cities regester form-control" placeholder="New Plymouth" value="{{old('city')}}">
	            {!! $errors->first('city','<span class="help-block">:message</span>') !!}
	        </div>

	        <div class="col-xs-12 col-md-3 form-group {{ $errors->has('postcode') ? 'has-error' :'' }}">
	            <label class="control-label" for="postcode">&#42;Postcode</label>
	            <input class="form-control" id="postcode" name="postcode" placeholder="0000" value="{{old('postcode')}}">
	            {!! $errors->first('postcode','<span class="help-block">:message</span>') !!}
	        </div>
        </div>

	</form>


	<div class="row">
		<div class="btn-boarder col-xs-12 col-sm-6">
			<a href="/cart" class="pull-left"><i class="glyphicon glyphicon-chevron-left"></i>  Back to Cart</a>
		</div>
		<div class="col-xs-12 col-sm-6 go-btn">
			<button form="shippingform" class="pull-right btn">Proceed to order Review  <i class="glyphicon glyphicon-chevron-right"></i></button>
		</div>
	</div>

@endsection



