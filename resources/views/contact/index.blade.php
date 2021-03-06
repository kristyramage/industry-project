@extends('master')

@section('title', 'Contact')
@section('meta-description', 'Holla at us with any you want to know.')

@section('content')

	<div class="row col-xs-12">
	    <h1 class="pageTitle">Contact</h1>
	    <hr>
    </div>

	<div class="row">
		<div class="col-xs-6" >
			<p class="para-title" >Hi,</p>
			
		  	<h4>WE'D LOVE TO HEAR FROM YOU!</h4>
		  	<p>
		  		We value every comment and suggestion, and are committed to taking your feedback to heart.
		  		<br> <br>
		  		Our team can be reached 7 days a week, 8am - 8pm.
		  		<br> <br>
		  		Fill out the contact from and we'll get back to you ASAP.
		  		<br><br>
		  		For any wholesale orders please contact us 3 days in advance.
		  		<br><br>
		  		Much Love,
		  		<br>
		  		Captured Write xx	
			
		</div>

		<div class="col-xs-6" >
			<p class="para-title" >Holla at me,</p>
		  	<form role="form" id="contactForm" action="/contact/message" method="POST" class="form horizontal">
		  		{!! csrf_field() !!}
		      <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }}">
		        <label for="name" class="control-label">Name</label>
		        <div>
		          <input class="form-control" id="name" name="name" value="{{old('name')}}">
		          {!! $errors->first('name','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group {{ $errors->has('email') ? 'has-error' :'' }}">
		        <label for="email" class="control-label">Email</label>
		        <div>
		          <input class="form-control" id="email" name="email" placeholder="jon@example.com"
		            value="{{old('email')}}">
		          {!! $errors->first('email','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>
		        
		      <div class="form-group {{ $errors->has('subject') ? 'has-error' :'' }}">
		        <label for="text" class="control-label">Subject</label>
		        <div>
		          <input type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}">
		          {!! $errors->first('subject','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group {{ $errors->has('message') ? 'has-error' :'' }}">
		        <label for="message" class="control-label">Message</label>
		        <div>
		          <textarea class="form-control" rows="3" name="message" placeholder="Type your message here">{{old('message')}}</textarea>
		          {!! $errors->first('message','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>


		      <div class="form-group">
		        <div class="go-btn">
		          <button class="btn">Send</button>
		        </div>
		      </div>
	    	</form>
	    </div> 
  	</div>


@endsection