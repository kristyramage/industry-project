@extends('master')

@section('title', 'Stockists')
@section('meta-description', 'Here is where you can get directions to purchase Captured Write prints instore')

@section('content')
	<h1 class="pageTitle">Stockists</h1>
	<hr>
	<div class="row">
		<div class="col-xs-12">
			<div class="col-xs-12 col-sm-4">
				<!-- map -->
				<div id="map"></div>
			</div>

			<div class="col-xs-12 col-sm-8">
				<p class="para-title" >Created Homewares,</p>
				<p>
					189 Main Street, 5018 Upper hutt <br>
					<a href="https://createdhomewares.com/">website</a> <br>
					<a href="https://www.facebook.com/createsomethingnz/">facebook</a> <br>
					Hours <br>
					Tues-Fri: 09:30 - 17:30 <br>
					Sat: 10:00 - 16:00 <br>
					Sun: 10:00 - 14:00
				</p>
			</div>
		</div>

	</div>
	
@endsection

@section('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVebhaouYOuLGqNRVaC7HwfNhoyHyEhJI&callback=initMap"async defer></script>
    <script src="/js/map.js"></script>
@endsection