@extends('master')
@section('content')
	<div class="container-fluid text-center">    
	  <div class="row content">
	    <div class="col-sm-10 text-left"> 
			<h3>My product</h3>
			<hr>
			@foreach ($products as $product)
				<div class="col-sm-3">
					<div class='row' style="border: solid 1px red; padding: 10px">
						<a id="load-detail" class="bnt bnt-info">
						<img src="{{ $product->url }}" onclick="showProduct('{{ $product->id }}','{{ $product->url }}','{{ $product->name }}','{{ number_format($product->price,2,'.',','). " VND" }}','{{ number_format($product->discount,0,'.',','). "%" }}','{{ $product->price-($product->price*$product->discount/100) }}','{{ $product->description }}')" style="width:100%">
						</a>
						<br>
					</div>
					<div class='row' style="border: solid 1px red">
						<div class='col-sm-12' style="border: solid 1px red">
							<p>Product name: {{ $product->name }}</p>
							<p>Price: {{ number_format($product->price,2,'.',','). " VND" }}</p>
							<p>Discount: {{ number_format($product->discount,0,'.',','). "%" }}</p>
							<p>Total: {{ $product->price-($product->price*$product->discount/100) }}</p>
						</div>
					</div>
				</div>
			@endforeach


	    </div>
	    <div>
	    {{ $products->links() }}	
	    </div>
	  </div>
	</div>
	<div id="content">
		test
	</div>


{{-- Form show --}}
<div id="show" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Detail product</h4>
			</div>
			<div class="modal-body">
				<div class="row-content">
					<div class="row">
						<div class="col-sm-4">
							<img id="url" src="" style="width:100%">
							<br>
						</div>
						<div class="col-sm-8">
							<p>Product name: <label id="name"></label></p>
							<p>Price: <label id="price"></label></p>
							<p>Discount: <lavel id="discount"></lavel></p>
							<p>Total: <label id="total"></label></p>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<p id="description" style="word-wrap: break-word;">	
							</p>	
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var showProduct = function(id,url,name,price,discount,total,description){
		document.getElementById('name').innerHTML = name;
		document.getElementById('url').src = url;
		document.getElementById('price').innerHTML = price;
		document.getElementById('discount').innerHTML = discount;
		document.getElementById('total').innerHTML = total;
		document.getElementById('description').innerHTML = description;
		$("#show").modal();

	}
</script>
{{-- get html example --}}
{{-- <script type="text/javascript">
	$(document).on('click','.show-modal', function(){
		$('#show').modal('show');
		$('.modal-title').text('Show Product');
	})
</script> --}}
{{-- <script type="text/javascript">
	$(document).ready(function() {
		$("#load-detail{{$product->id}}").click(function() {
			/* Act on the event */
			//$(this).hide();
			$.ajax({
					url: '{{ route('product.show',$product->id) }}',
					type: 'GET',
					dataType: 'html'
				}).done(function(result){
					console.log(result);

				});
		});


	});

</script>
 --}}

{{-- 	<script type="text/javascript">
		$(document).ready(function(){
			#('#load-detail').click(function(e) {
				e.preventDefault();
				$(this).hide();
				// $.ajax({
				// 	url: '{{ route('product.show',$product->id) }}',
				// 	type: 'GET',
				// 	dataType: 'html'
				// }).done(function(result){
				// 	console.log(result);
				// });

			});
		});
	</script> --}}
@endsection

{{-- Test --}}
{{-- 			<div class="col-sm-3" >
				<div class='row' style="border: solid 1px blue">
					<div class='col-sm-12' style="border: solid 1px red">
						<img src="https://www.prettycool.co.uk/user/products/large/purple-small-double-flower-hair-clip-20300-p.jpg" style="width:50%">
						<h3>My product</h3>
						<div class='row'  style="border: solid 1px green">
							<div class='col-sm-8' style="border: solid 1px red">
								Yo
							</div>
							<div class='col-sm-4' style="border: solid 1px red">
								<button type="button">Detail</button>
							</div>
						</div>
						<div class='row'  style="border: solid 1px green"> abcd 456</div>
						<div class='row'  style="border: solid 1px green"> abcd 678</div>
					</div>
					<div class='col-sm-12' style="border: solid 1px red">
						<div class='col-sm-8' style="border: solid 1px red">
							Information
						</div>
						<div class='col-sm-4' style="border: solid 1px red">
							<button>Detail</button>
						</div>
					</div>
				</div>
			</div> --}}