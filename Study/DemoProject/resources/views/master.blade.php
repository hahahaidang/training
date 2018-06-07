<!DOCTYPE html>
<html>
<head>
	<title>Demo project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<base href="{{ asset('') }}">
</head>
<body>
@include('header')
<div class="row-content">
	<div class="col-sm-2 sidenav">
		<p><a href="#">Link</a></p>
		<p><a href="#">Link</a></p>
		<p><a href="#">Link</a></p>
	</div>
	@yield('content')
</div>
@include('footer')
</body>
</html>