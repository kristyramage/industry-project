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


Route::get('prints', 'PrintsController@index');
Route::get('custom', 'ShopController@custom');

 // routes must be listed this way
Route::get('prints/create', 'PrintsController@create')->middleware(['auth']);
Route::get('prints/{title}', 'PrintsController@show');



// Route::get('prints/store', 'PrintsController@store')->middleware(['', 'auth']);
Route::get('store', 'PrintsController@store')->middleware(['auth']);
Route::post('store', 'PrintsController@store')->middleware(['auth']);


Route::get('prints/edit/{id}', 'PrintsController@edit')->middleware(['auth']);

Route::get('prints/update', 'PrintsController@update')->middleware(['auth']);

// Route::get('removeprint/{id}', 'PrintsController@remove')->middleware(['auth']);
// Route::delete('prints/destroy', 'PrintsController@destroy')->middleware(['auth']);

Route::get('cart', 'ShopController@cart');

Route::get('gallery', 'GalleryController@index');

Route::get('stockists', 'InfoController@stockists');
Route::get('shipping', 'InfoController@shipping');
Route::get('tandc', 'InfoController@tandc');

Route::get('contact', 'ContactController@index');



// Route::group(['middleware' => ['web']], function () {
// 	//
// });
