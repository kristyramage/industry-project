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
		



<!-- 		<nav class="navbar">
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="about">about</a></li>
				<li><a href="shop">shop</a></li>
				<li><a href="gifts">gifts</a></li>
				<li><a href="contact">contact</a></li>
			</ul>
		</nav> -->



		<nav class="navbar navbar-static-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav">
		                <li><a href="/">home</a></li>
						<li><a href="about">about</a></li>
						<li type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><a href="shop">shop  <span class="caret"></span></a></li>
							<ul class="dropdown-menu">
					            <li><a href='shop'>prints</a></li>
					            <li><a href='custom'>custom print</a></li>
					            <li><a href='stockists'>stockists</a></li>
					         </ul>
						<li><a href="gifts">gifts</a></li>
						<li><a href="contact">contact</a></li>
		            </ul>
		        </div>
		    </div>
		</nav>


		
		<div class="content">
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