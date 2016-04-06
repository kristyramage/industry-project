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
		<nav class="navbar">
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="about">about</a></li>
				<li><a href="shop">shop</a></li>
				<li><a href="gifts">gifts</a></li>
				<li><a href="contact">contact</a></li>
			</ul>
		</nav>
		
		<div>
			@yield('content')
		</div>

		<footer class="row">
	        <div class="col-sm-3">
	        	<h4>NAV</h4>
		        <ul>
		            <li><a href="/">Home</a></li>
		            <li><a href="about">About</a></li>
		            <li><a href="shop">Shop</a></li>
		            <li><a href="gifts">Gifts</a></li>
		            <li><a href="contact">Contact</a></li>
		        </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h4>INFO</h4>
		        <ul>
		            <li><a href="#">Stockists</a></li>
		            <li><a href="#">Shipping</a></li>
		            <li><a href="#">Terms</a></li>
		            <li><a href="#">Return/Refund</a></li>
		            <li><a href="#">Privacy Policy</a></li>
	          </ul>
	        </div>

	        <div class="col-sm-3">
	        	<h4>FIND ME HERE</h4>
		          <ul>
		            <li><a href="https://www.facebook.com/captured.write/" target="_blank">facebook</a></li>
		            <li><a href="https://www.instagram.com/capturedwrite/" target="_blank">instagram</a></li>
		            <li><a href="#">Stockists</a></li>
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
</body>
</html>