@extends('store.template')

@section('content')

    <div class="container text-center">
    	<div class="page-header">
    		<h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
    	</div>

    	<div class="row">
    		<div class="col-md-6">
    			<div class="product-block">
			        <img src="/{{$product->image}}" />
			    </div>
    		</div>
    		<div class="col-md-6">
			    <div class="product-block">
			        <h3>{{ $product->name }}</h3>
			        <div class="product-info panel">
				        <p>{{ $product->description }}</p>
				        <h3>
							<span class="label label-success">Precio: {{ number_format($product->price,2) }} €</span>
						</h3>
				        <a class="btn btn-warning" href="{{ url('/cart/add/' . $product->id ) }}">
				        	Lo quiero <i class="fa fa-cart-plus"></i>
						</a>
				        <a href="{{ url('/') }}" class="btn btn-default">
				        	<i class="fa fa-chevron-circle-left"></i> Volver
						</a>		        
					</div>
			    </div>
    		</div>
    	</div><hr>
	</div>

@stop