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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['prefix' => 'admin'], function(){
	Route::get('',[
		'uses' => '',
		'as' => ''
	]);
});




Route::group(['prefix' => 'order'], function(){
	Route::get('foodreservation',[
		'uses' => 'OrderController@getFoodReservation',
		'as' => 'order.foodreservation'
	]);
	Route::get('tablereservation',[
		'uses' => 'OrderController@getTableReservation',
		'as' => 'order.tablereservation'
	]);
	Route::get('takeaway',[
		'uses' => 'OrderController@getTakeaway',
		'as' => 'order.takeaway'
	]);
});




Route::group(['prefix' => 'pages'], function(){
	Route::get('index',[
		'uses' => 'PageController@getIndex',
		'as' => 'pages.index'
	]);
	Route::get('takeaway',[
		'uses' => 'PageController@getContact',
		'as' => 'pages.contact'
	]);
});




Route::group(['prefix' => 'shop'], function(){
	Route::get('cart',[
		'uses' => 'ShopController@getUserCart',
		'as' => 'shop.cart'
	]);
	Route::get('addToCart',[
		'uses' => 'ShopController@addToCart',
		'as' => 'pages.contact'
	]);
});



Route::group(['prefix' => 'users'], function(){
	Route::get('login',[
		'uses' => 'UserController@getLogin',
		'as' => 'user.login'
	]);
	Route::post('login',[
		'uses' => 'UserController@postLogin',
		'as' => 'user.login'
	]);
	Route::get('register',[
		'uses' => 'UserController@getRegister',
		'as' => 'user.register'
	]);
	Route::post('register',[
		'uses' => 'UserController@postRegister',
		'as' => 'user.register'
	]);
	Route::get('edit',[
		'uses' => 'UserController@getEdit',
		'as' => 'user.edit'
	]);
	Route::post('edit',[
		'uses' => 'UserController@postEdit',
		'as' => 'user.edit'
	]);
});