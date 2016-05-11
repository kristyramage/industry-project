@extends('master')

@section('title', 'Home')
@section('meta-description', 'Welcome to Captured Write! We are here to encourage, inspire and share the love.')

@section('content')
	<!-- <h1>Home Page</h1> -->

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="/images/carousel/bettertogether.jpg" alt="Photo of and man and a womans feet. Together.">
	      <div class="carousel-caption">
	        <h3>Life is better togther!</h3>
	      </div>
	    </div>

	    <div class="item">
	      <img src="/images/carousel/custom_print.jpg" alt="Photo of an empty notebook and cup of coffee.">
	      <div class="carousel-caption">
	      	<h3>Custom prints!</h3>
	        <p>Get your very own exclusive print designed just for you!</p>
	      </div>
	    </div>
	    
	    <div class="item">
	      <img src="/images/carousel/coffee.jpg" alt="Photo of a milky cup of coffee">
	      <div class="carousel-caption">
	      	<h3>Holla at me,</h3>
	        <p>I'd love to hear from you!</p>
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

@endsection