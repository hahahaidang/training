{{-- @extends('master') --}}
{{-- @section('content')	 --}}
	<div class="row-content ">
		<div class="col-sm-10 text-left">
			<div class="row">
				<div class="col-sm-4">
					<img src="{{ $product->url }}" style="width:100%">
					<br>
				</div>
				<div class="col-sm-8">
					<p>Product name: {{ $product->name }}</p>
					<p>Price: {{ number_format($product->price,2,'.',','). " VND" }}</p>
					<p>Discount: {{ number_format($product->discount,0,'.',','). "%" }}</p>
					<p>Total: {{ $product->price-($product->price*$product->discount/100) }}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p style="word-wrap: break-word;">
						{{$product->description}}
					</p>	
				</div>
			</div>
		</div>
	</div>
{{-- @endsection --}}