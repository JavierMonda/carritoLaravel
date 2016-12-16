<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Product;

class CartController extends Controller
{
	// Creamos una variable de sesión si no existe
	public function _construct() {
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    // Mostrar carrito
    public function show() {
    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('store.cart', compact('cart', 'total'));
    }

    // Añadir item
    public function add(Product $product) {
    	$cart = \Session::get('cart');
    	$product->quantity = 1;
    	$cart[$product->id] = $product;
    	\Session::put('cart', $cart);

    	return redirect() ->action('CartController@show');
    }

    // Borrar item
    public function delete(Product $product) {
    	$cart = \Session::get('cart');
    	unset($cart[$product->id]);
    	\Session::put('cart', $cart);

    	return redirect()->action('CartController@show');
    }

    // Actualizar item
    public function update(Product $product, $quantity) {
    	$cart = \Session::get('cart');
    	$cart[$product->id]->quantity = $quantity;
    	\Session::put('cart', $cart);

    	return redirect()->action('CartController@show');
    }

    // Vaciar carrito
    public function trash() {
    	$cart = \Session::get('cart');
    	$cart = [];
    	// \Session::forget('cart');
    	\Session::put('cart', $cart);
    	
    	return redirect()->action('CartController@show');
    }

    // Total
    private function total() {
    	$cart = \Session::get('cart');
    	$total = 0;
    	foreach($cart as $item) {
    		$total += $item->price * $item->quantity;
    	}

    	return $total;
    }
}
