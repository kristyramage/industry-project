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
	      <img src="/images/carousel/bettertogether.jpg" alt="...">
	      <div class="carousel-caption">
	        <h3>Life is better togther!</h3>
	      </div>
	    </div>

	    <div class="item">
	      <img src="/images/carousel/custom_print.jpg" alt="...">
	      <div class="carousel-caption">
	      	<h3>Custom prints!</h3>
	        <p>Get your very own exclusive print designed just for you!</p>
	      </div>
	    </div>
	    
	    <div class="item">
	      <img src="/images/carousel/coffee.jpg" alt="...">
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

<!-- featured products -->
	<div id="featproducts" class="row">
		<h2 class="text-center">Featured Products</h2>
		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			<p class="text-center">Title <br>
			$price</p>
		</div>

		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			<p class="text-center">Title <br>
			$price</p>
		</div>

		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			<p class="text-center">Title <br>
			$price</p>
		</div>

		<form class="col-xs-12 go-btn" method="get" action="/shop">
		    <button class="btn center-block" type="submit">Go to store</button>
		</form>

	</div>

<!-- instagram products -->
	<div id="instahome" class="row">
		<h2 class="text-center">Instagram</h2>
		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
		</div>

		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
		</div>

		<div class="col-xs-12 col-sm-4">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
		</div>

		<form class="col-xs-12 go-btn" method="get" action="/gallery">
		    <button class="btn center-block" type="submit">Go to Gallery</button>
		</form>

	</div>


@endsection