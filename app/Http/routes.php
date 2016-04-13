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

Route::get('/', 'HomeController@index')->middleware('web');

Route::get('about', 'AboutController@index')->middleware('web');

Route::get('shop', 'ShopController@index')->middleware('web');
Route::get('custom', 'ShopController@custom')->middleware('web');

Route::get('cart', 'ShopController@cart')->middleware('web');

Route::get('gallery', 'GalleryController@index')->middleware('web');

Route::get('stockists', 'InfoController@stockists')->middleware('web');
Route::get('shipping', 'InfoController@shipping')->middleware('web');
Route::get('tandc', 'InfoController@tandc')->middleware('web');

Route::get('contact', 'ContactController@index')->middleware('web');


Route::group(['middleware' => ['web']], function () {
	//
});
