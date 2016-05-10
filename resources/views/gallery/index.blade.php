@extends('master')

@section('title', 'Gallery')
@section('meta-description', 'From me to you, and you to me. You have made it to Captured Writes gallery where you can feature photos from your instagram.')

@section('content')
	<h1 class="pageTitle">Gallery</h1>
	<hr>

	<div class="row">
		<div id="selector"></div>
	</div>

	<script type="text/javascript">

		var id = '{{ env('INSTAGRAM_ID') }}';
 		var token = '{{ env('INSTAGRAM_TOKEN') }}';
 		

	</script>
@endsection

@section('scripts')

	

@endsection