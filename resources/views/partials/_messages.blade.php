@if (Session::has('success'))

	<div class="alert alert-success" role="alert">
		
	<p><strong>Success!</strong> {{ Session::get('success') }} </p>

	</div>

@endif

@if (Session::has('info'))

	<div class="alert alert-info" role="alert">
		
	<p><strong>FYI!</strong> {{ Session::get('info') }} </p>

	</div>

@endif

@if (Session::has('warning'))

	<div class="alert alert-warning" role="alert">
		
	<p><strong>Warning!</strong> {{ Session::get('warning') }} </p>
 
	</div>

@endif

@if (Session::has('danger'))

	<div class="alert alert-danger" role="alert">
		
	<p><strong>Danger!</strong> {{ Session::get('danger') }} </p>

	</div>

@endif