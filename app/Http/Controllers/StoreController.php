<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;

class StoreController extends Controller
{
    public function show($id) {
    	$product = Product::findOrFail($id);
    	return view('product.show', ['product' => $product]);
    }
}
