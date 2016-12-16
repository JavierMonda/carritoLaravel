<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::bind('product', function($id) {
	return App\Product::where('id', $id)->first();
});

// Inicio
Route::get('/', 'HomeController@getIndex');

// Catálogo
Route::get('product/show/{id}', 'StoreController@show');

// Carrito
Route::get('cart/show', 'CartController@show');

Route::get('cart/add/{product}', 'CartController@add');

Route::get('cart/delete/{product}', 'CartController@delete');

Route::get('cart/trash', 'CartController@trash');

Route::get('cart/update/{product}/{quantity}', 'CartController@update');