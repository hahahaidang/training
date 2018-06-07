@extends('admin.admin')
@section('content')
	<div class="row">
		<h3>Add product</h3>
		<a class="btn btn-success pull-right" href="{{ route('product.index') }}"> Back</a>
	</div>
	<br>
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form class="form-horizontal" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label class="control-label col-sm-2" for="name">Name Product:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name product">
		    </div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="price">Price Product:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="price" id="price" placeholder="Enter price product">
		    </div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="discount">Discount Product:</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="discount" id="discount" placeholder="Enter discount product">
		    </div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="description">Description Product:</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" name="description" id="description" rows="5" placeholder="Enter description product"></textarea>
		    </div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="select">Catelogy</label>
		    <div class="col-sm-10">
				<select class="form-control" name="catelogy" id="catelogy">
				@foreach($catelogies as $catelogy)
					<option value="{{ $catelogy->id }}">{{ $catelogy->name }}</option>
				@endforeach
				</select>
		    </div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="photo">Photo upload:</label>
		    <div class="col-sm-10">
		      <input type="file" name="photo" id="photo">
		    </div>
		</div>

		<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	</form>
@endsection