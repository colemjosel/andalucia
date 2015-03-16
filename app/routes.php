<?php


//Ecommerce comp
Route::get('/', ['as' => 'home', 'uses' => 'EcommerceController@showHome']);
Route::get('categoria/{id}', ['as' => 'categoria', 'uses' => 'EcommerceController@showCategoria']);
Route::get('producto/{id}', ['as' => 'producto', 'uses' => 'EcommerceController@showProducto']);
Route::get('summary', ['as' => 'summary', 'uses' => 'EcommerceController@showSummary']);
Route::post('checkout', ['as' => 'checkout', 'uses' => 'EcommerceController@showCheckout']);
