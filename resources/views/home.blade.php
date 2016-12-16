@extends('layouts.master')

@section('content')

    <div class="row" style="text-align: center">

	    <div class="col-sm-12">
	    	<h1>Listado de Productos</h1>
	    </div>
	    @foreach($products as $product)
	    <div class="col-sm-4">
	        <h2>{{ $product->name }}</h2>
	        <img class="img img-responsive" src="/{{$product->image}}" />
	        <h3>
	        	<span class="label label-success">Precio: {{ number_format($product->price,2) }} €</span>
	        </h3>
	        <a href="">
	        	<button type="button" class="btn btn-warning">Lo quiero</button>
			</a>
			<a href="">
	        	<button type="button" class="btn btn-primary">Detalles</button>
			</a>
	    </div>
	    @endforeach
	</div>

@stop