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
		  		<strong>Phone</strong>	
			<br><strong>Email</strong> 	
			
		</div>

		<div class="col-xs-6" >
			<p class="para-title" >Holla at me,</p>
		  	<form role="form" id="contactForm" action="/contact/message" method="POST" class="form horizontal">
		  		{!! csrf_field() !!}
		      <div class="form-group">
		        <label for="username" class="control-label">Name</label>
		        <div>
		          <input class="form-control" id="username" name="username" value=" ">
		          {!! $errors->first('username','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="email" class="control-label">Email</label>
		        <div>
		          <input class="form-control" id="email" name="email" placeholder="jon@example.com"
		            value=" ">
		          {!! $errors->first('email','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>
		        
		      <div class="form-group">
		        <label for="text" class="control-label">Subject</label>
		        <div>
		          <input type="text" class="form-control" id="subject" name="subject">
		          {!! $errors->first('subject','<span class="help-block">:message</span>') !!}
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="message" class="control-label">Message</label>
		        <div>
		          <textarea class="form-control" rows="3" name="message" placeholder="Type your message here"></textarea>
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