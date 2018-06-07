@extends('admin.admin')
@section('content')
	<div class="row">
		<h3>Edit catology</h3>
		<a class="btn btn-info pull-right" href="/catelogy">Back</a>	
	</div>

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<br>
	<form class="form-horizontal" method="POST" action="{{ route('catelogy.update',$catelogy->id) }}">
		@csrf
		{{ method_field('PUT') }}
		<div class="form-group">
			<label class="control-label col-sm-2" for="name">Name Catology:</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" id="name" value="{{ $catelogy->name }}">
		    </div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="description">Description Catology:</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" name="description" id="description" rows="5">{{ $catelogy->description }}</textarea>
		    </div>
		</div>
		<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button>
	    </div>
	</form>

@endsection