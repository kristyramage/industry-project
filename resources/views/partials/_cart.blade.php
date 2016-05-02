@if (Session::has('Cart'))

<div class="alert alert-success" role="alert">
	<p>There is a Session</p>
		<?php 
	    	echo '<pre>';
	    	print_r(Session::get('Cart'));
	    	echo '</pre>';
	 	?>
</div>

@else

<div class="alert alert-danger" role="alert">
	<p>There is no Session</p>
</div>

@endif