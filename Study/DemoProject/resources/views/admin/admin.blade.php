<!DOCTYPE html>
<html>
<head>
	<title>Demo project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="href="bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

@include('admin.header')

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="{{ route('product.index') }}">Product</a></p>
      <p><a href="{{ route('catelogy.index') }}">Catelogy</a></p>

    </div>
    <div class="col-sm-10 text-left"> 
    	@if (\Session::has('message'))
      		<div class="alert alert-success">
        		<p>{{ \Session::get('message') }}</p>
      		</div><br />
     	@endif
		@yield('content')
    </div>
  </div>
</div>
@include('footer')


</body>
</html>