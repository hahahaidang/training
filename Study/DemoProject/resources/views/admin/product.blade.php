@extends('admin.admin')

@section('content')
	<div class="col-sm-10 text-left">
		<div class="row">
			<h3>Product list</h3>
		<a class="btn btn-success pull-right" href="{{ route('product.create') }}"> Add</a>
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
	    @foreach($products as $product)
	      <tr>
	        <td>{{ $product->id }}</td>
	        <td>{{ $product->name }}</td>
	        <td>{{ $product->description }}</td>
	        <td><a href="{{ route('product.edit',$product->id) }}"><center><span class="glyphicon glyphicon-edit"></span></center></a></td>
	        <td><center>
	        	<form action="{{ route('product.destroy',$product->id) }}" method="post">
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
	  	    	<center>{{ $products->links() }}	</center>
	  	    </div>
	</div>
@endsection
