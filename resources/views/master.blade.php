<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>@yield('title') - Captured Write</title>
	<meta name="description" content="@yield('meta-description')">

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="/css/menu.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12 text-center">
			<img src="images/logo/cplogo.png" alt="Captured write logo" class="logo">
		</div>

 		<nav class="navbar navbar-static-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="collapse-1">
		            <ul class="nav">
		                <li><a href="/">home</a></li>
						<li><a href="about">about</a></li>
						<li type="button" data-toggle="dropdown" class="btn dropdown-toggle"><a href="shop">shop  <span class="caret"></span></a></li>
							<ul class="dropdown-menu">
					            <li class="col-xs-12 col-sm-3"><a href='shop'>prints</a></li>
					            <li class="col-xs-12 col-sm-3"><a href='gallery'>gallery</a></li>
					            <li class="col-xs-12 col-sm-3"><a href='custom'>custom print</a></li>
					            <li class="col-xs-12 col-sm-3"><a href='stockists'>stockists</a></li>
					         </ul>
						<li><a href="contact">contact</a></li>
						<li><a href="cart">cart</a></li>
		            </ul>
		        </div>
		    </div>
		</nav> 


		
		<div class="content row">
			@yield('content')
		</div>

		<footer class="row">
			<hr>
	        <div class="col-sm-3">
	        	<h4>NAV</h4>
		        <ul>
		            <li><a href="/">Home</a></li>
		            <li><a href="about">About</a></li>
		            <li><a href="shop">Shop</a></li>
		            <li><a href="contact">Contact</a></li>
		            <li><a href="cart">Cart</a></li>
		        </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h4>INFO</h4>
		        <ul>
		            <li><a href="stockists">Stockists</a></li>
		            <li><a href="shipping">Shipping</a></li>
		            <li><a href="tandc">Terms and Conditions</a></li>
	          </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h4>FIND ME HERE</h4>
		          <ul>
		            <li><a href="https://www.facebook.com/captured.write/" target="_blank">facebook</a></li>
		            <li><a href="https://www.instagram.com/capturedwrite/" target="_blank">instagram</a></li>
		            <li><a href="stockists">Stockists</a></li>
		          </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h4>HOLLA AT ME</h4>
		        <ul>
		            <li><a href="#">Email</a></li>
		        </ul>
	        </div>

	        <div class="col-sm-12 text-center">
	          <p><small>copyright 2016</small></p>
	        </div>
        
      	</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>