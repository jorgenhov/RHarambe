<?php

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () { return view('index'); });
Route::get('orders', function () { return view('orders'); });
Route::get('takeAway', function () { return view('takeAway'); });
Route::get('contact', function () { return view('contact'); });
Route::get('shopping_cart', function () { return view('shopping_cart'); });

Auth::routes();

Route::get('/home', 'HomeController@index');
