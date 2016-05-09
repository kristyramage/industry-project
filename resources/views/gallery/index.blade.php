@extends('master')

@section('title', 'Gallery')
@section('meta-description', 'From me to you, and you to me. You have made it to Captured Writes gallery where you can feature photos from your instagram.')

@section('content')
	<h1 class="pageTitle">Gallery</h1>
	<hr>
	<div id="featproducts" class="row">
		<div class="col-xs-12 col-sm-4">

			<div id="selector"></div>

			<a href="#">
				<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
		</div>

		<div class="col-xs-12 col-sm-4">
			<a href="#">
			<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
		</div>

		<div class="col-xs-12 col-sm-4">
			<a href="#">
				<img src="http://placehold.it/300x300" alt="..." class="col-xs-12">
			</a>
		</div>

	</div>
@endsection

{{-- @section('scripts')

	<script type="text/javascript">

		$(document).ready(function () {

		  $('#selector').pongstgrm({
		  	accessId: '232888369',
		    accessToken:     '3d94efba41ba405abfd577e8178dd71d',
		  });

		  $('#selector').pongstgrm({ show: 'recent' });
		   $('#selector').pongstgrm({ show: 'feed' });

		});

	</script>

@endsection --}}