<?php
//portada
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);

//Ecommerce comp
Route::get('tienda', ['as' => 'tienda', 'uses' => 'EcommerceController@showHome']);
Route::get('categoria/{id}', ['as' => 'categoria', 'uses' => 'EcommerceController@showCategoria']);
Route::get('producto/{id}', ['as' => 'producto', 'uses' => 'EcommerceController@showProducto']);
Route::get('summary', ['as' => 'summary', 'uses' => 'EcommerceController@showSummary']);
Route::post('checkout', ['as' => 'checkout', 'uses' => 'EcommerceController@showCheckout']);
Route::get('pdf/{id}', ['as' => 'pdf', 'uses' => 'EcommerceController@printPDF']);


//Comment
Route::put('comment', ['as' => 'comment', 'uses' => 'CommentsController@save']);
Route::post('rate', ['as' => 'rate', 'uses' => 'CommentsController@rate']);
