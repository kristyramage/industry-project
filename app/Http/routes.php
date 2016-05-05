<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('logout', 'Auth\AuthController@logout');
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');


Route::get('about', 'AboutController@index');

// Prints CRUD
Route::get('prints', 'PrintsController@index');
 
Route::get('prints/create', 'PrintsController@create')->middleware(['auth']);
Route::get('prints/{title}', 'PrintsController@show');

Route::get('store', 'PrintsController@store')->middleware(['auth']);
Route::post('store', 'PrintsController@store')->middleware(['auth']);

Route::get('prints/edit/{id}', 'PrintsController@edit')->middleware(['auth']);
Route::post('prints/update', 'PrintsController@update')->middleware(['auth']);
Route::get('prints/removeprint/{id}', 'PrintsController@remove')->middleware(['auth']);

// Cart CRUD
Route::get('cart', 'CartController@index');
Route::post('addtocart', 'CartController@add');
Route::post('removefromcart/{id}', 'CartController@remove');
Route::post('updatecart/{id}', 'CartController@update');


Route::get('gallery', 'GalleryController@index');

Route::get('stockists', 'InfoController@stockists');
Route::get('shipping', 'InfoController@shipping');
Route::get('tandc', 'InfoController@tandc');

Route::get('contact', 'ContactController@index');
Route::post('contact/message', 'ContactController@send');
Route::get('custom', 'ContactController@custom');
Route::post('contact/custom', 'ContactController@query');


