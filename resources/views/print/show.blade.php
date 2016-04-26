@extends('master')

@section('title', 'Prints')
@section('meta-description', 'Single print view')

@section('content')

<h1 class="pageTitle">print title (print page)</h1>

	<div class="row">
		@if(\Auth::check())
			@if(\Auth::user()->role === 'admin')

				<div class="go-btn">
			        <a class="btn" href="print/edit">Edit Print</a>	
			    </div>
			@endif()
		@endif()

		@foreach($prints as $print)
		<div class="col-xs-12 col-md-5 ">
		    <?php if($print->poster !=""): ?>
		      <a href="#"><img src="#" alt="<?= $print->title ?> poster"></a>
		    <?php else: ?>
		      <p><small>No image found</small></p>
		    <?php endif; ?>
		  </div>
		  <div class="col-xs-12 col-md-6">
		  	<h4><?= $print->title; ?></h4>
		  	<h4>&#36;<?= $print->price; ?></h4>

		  	<div class="form-group col-sm-6">
		        <label for="size" class="control-label">Size</label>
		        <div>
		          <select class="form-control" id="size" name="size"
		            value=" ">
		            <option>A5</option>
		            <option>A4</option>
		            <option>A3</option>
		            <option>A2</option>
		          </select>
		          <div class="help-block"></div>
		        </div>
		      </div>
		        
		      <div class="form-group col-sm-6">
		        <label type="checkbox" name="framed" value="framed">Framed</label>
		        <div>
		          <input type="checkbox" class="form-control" id="framed" name="framed">
		          <div class="help-block"></div>
		        </div>
		      </div>

		    <p>DESCRIPTION</p>
		    <p> <?= $print->description; ?> </p>

		    <a href="#" class="btn btn-default col-xs-12 space" role="button">
		        <span class="glyphicon glyphicon-shopping-cart"></span> 
		        ADD TO CART
		    </a>

		</div>
		@endforeach
	</div>

@endsection