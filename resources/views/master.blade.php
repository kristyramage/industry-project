<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Captured Write</title>
	<meta name="description" content="description">

	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-12 text-center">
			<img src="#" alt="Captured write logo">
		</div>
		<nav>
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">shop</a></li>
				<li><a href="#">freebees</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav>
		
		<div>
			@yield('content')
		</div>

		<footer class="col-lg-12">
	        <div class="col-sm-3">
	        	<h3>NAV</h3>
		        <ul>
		            <li><a href="#">Home</a></li>
		            <li><a href="#">About</a></li>
		            <li><a href="#">Shop</a></li>
		            <li><a href="#">Freebees</a></li>
		            <li><a href="#">Contact</a></li>
		        </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h3>INFO</h3>
		        <ul>
		            <li><a href="#">Stockists</a></li>
		            <li><a href="#">Shipping</a></li>
		            <li><a href="#">Terms</a></li>
		            <li><a href="#">Return/Refund</a></li>
		            <li><a href="#">Privacy Policy</a></li>
	          </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h3>FIND ME HERE</h3>
		          <ul>
		            <li><a href="#">facebook</a></li>
		            <li><a href="#">instagram</a></li>
		            <li><a href="#">Stockists</a></li>
		          </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h3>HOLLA AT ME</h3>
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
</body>
</html>