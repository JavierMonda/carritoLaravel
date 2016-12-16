@extends('store.template')

@section('content')

    <div class="container text-center">
    	<div class="text-center">
    		<h1>Catálogo de productos</h1>
    	</div><hr>
	    <div id="products">
		    @foreach($products as $product)
		    <div class="product white-panel">
		        <h2>{{ $product->name }}</h2>
		        <img src="/{{$product->image}}" />
		        <div class="product-info panel">
					<h3>
						<span class="label label-success">Precio: {{ number_format($product->price,2) }} €</span>
					</h3>
					<p>
						<a class="btn btn-warning" href="{{ url('/cart/add/' . $product->id ) }}">
							<i class="fa fa-cart-plus"></i> Lo quiero
						</a>
						<a class="btn btn-primary" href="{{ url('/product/show/' . $product->id ) }}">
							<i class="fa fa-chevron-circle-right"></i> Detalles
						</a>
					</p>
				</div>
		    </div>
		    @endforeach
		</div>
	</div>

@stop