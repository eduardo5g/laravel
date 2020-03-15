<?php

Route::resource('products','ProductController');//->middleware('auth');
/*
// Make this source code automatic
//php artisan make:controller ProductController --resource
Route::get('product/{id}/create','ProductController@create')->name('products.create');
Route::get('product/{id}/edit/','ProductController@edit')->name('products.edit');
Route::get('product/{id}','ProductController@show')->name('products.show');
Route::get('product','ProductController@index')->name('products.index');
Route::post('product','ProductController@store')->name('products.store');
Route::put('product{id}','ProductController@update')->name('products.update');
Route::delete('product{id}','ProductController@delete')->name('products.delete');
*/
Route::get('/', function () {
    return view('welcome');
});
