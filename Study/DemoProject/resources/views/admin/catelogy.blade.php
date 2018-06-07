@extends('admin.admin')

@section('content')
	<div class="col-sm-10 text-left">
		<div class="row">
			<h3>Catelogy list</h3>
			<a class="btn btn-success pull-right" href="{{ route('catelogy.create') }}"> Add</a>
		</div>
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

	<div class="col-sm-10 text-left">
		<br>
		<table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Name</th>
	        <th>Description</th>
	        <th>Edit</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <tbody>
	    @foreach($catelogies as $catelogy)
	      <tr>
	        <td>{{ $catelogy->id }}</td>
	        <td>{{ $catelogy->name }}</td>
	        <td>{{ $catelogy->description }}</td>
	        <td><a href="{{ route('catelogy.edit',$catelogy->id) }}"><center><span class="glyphicon glyphicon-edit"></span></center></a></td>
	        <td><center>
	        	<form action="{{ route('catelogy.destroy',$catelogy->id) }}" method="post">
				@csrf
	        	{{ method_field('DELETE') }}
	        	<button type="submit">
	        		<span class="glyphicon glyphicon-trash"></span>
	        	</button>
	        	</form>
	        </center></td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
	  	    <div>
	  	    	<center>{{ $catelogies->links() }}	</center>
	  	    </div>
	</div>
@endsection
