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

Route::get('hjem', function(){
	return view('hjem');
});

Route::get('retter', function(){
	return view('retter');
});

Route::get('takeaway', function(){
	return view('takeaway');
});

Route::get('kontakt', function(){
	return view('kontakt');
});

Route::get('handlekurv', function(){
	return view('handlekurv');
});





Auth::routes();

Route::get('/home', 'HomeController@index');
