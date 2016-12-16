<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Product;

class HomeController extends Controller
{
    public function getIndex() {
        $products = Product::all();
    	return view('store.index', ['products' => $products]);
    }
}
