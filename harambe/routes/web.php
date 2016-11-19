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

Route::group(['prefix' => 'order'],function(){
    Route::get('takeaway',[
        'as' => 'order.takeaway',
        'uses' => 'OrderController@getTakeaway'
    ]);
    Route::post('takeaway',[
        'as' => 'order.takeaway',
        'uses' => 'OrderController@getTakeaway'
    ]);
    Route::get('tableReservation',[
        'as' => 'order.reservation',
        'uses' => 'OrderController@getTableReservation'
    ]);
    Route::post('tableReservation',[
        'as' => 'order.reservation',
        'uses' => 'OrderController@postTableReservation'
    ]);
    Route::get('foodReservation',[
        'as' => 'order.dish',
        'uses' => 'OrderController@getFoodReservation'
    ]);
    Route::post('foodReservation',[
        'as' => 'order.dish',
        'uses' => 'OrderController@postFoodReservation'
    ]);
});

Route::group(['prefix' => 'pages'],function(){
    Route::get('index',[
        'as' => 'pages.index',
        'uses' => 'PageController@getIndex'
    ]);
    Route::get('contact',[
        'as' => 'pages.contact',
        'uses' => 'PageController@getContact'
    ]);
});

Route::group(['prefix' => 'shop'],function(){
    Route::get('cart',[
        'as' => 'shop.cart',
        'uses' => 'ShopController@getCart'
    ]);
    Route::get('/add-to-cart/{id}',[
        'as' => 'shop.reservation',
        'uses' => 'ShopController@addToCart'
    ]);
    Route::get('checkout',[
        'as' => 'shop.checkout',
        'uses' => 'ShopController@getCheckout'
    ]);
    Route::get('/add-to-cart-takeaway/{id}',[
        'as' => 'shop.takeaway',
        'uses' => 'ShopController@addToCartTakeaway'
    ]);
    Route::get('confirm',[
        'as' => 'shop.confirm',
        'uses' => 'ShopController@getConfirm'
    ]);
    Route::get('/delete-from-cart/{id}/{rowId}',[
        'as' => 'shop.delete',
        'uses' => 'ShopController@deleteFromCart'
    ]);
});

Route::group(['prefix' => 'user'],function(){
    Route::get('login',[
        'as' => 'user.login',
        'uses' => 'UserController@getLogin',
    ]);
    Route::post('login',[
        'as' => 'user.login',
        'uses' => 'UserController@postLogin',
    ]);
    Route::get('register',[
        'as' => 'user.register',
        'uses' => 'UserController@getRegister'
    ]);
    Route::post('register',[
        'as' => 'user.register',
        'uses' => 'UserController@postRegister'
    ]);
    Route::get('profile',[
            'as' => 'user.profile',
            'uses' => 'UserController@getProfile'
        ]);
    Route::group(['middleware' => 'auth'],function(){
        Route::get('edit',[
            'as' => 'user.edit',
            'uses' => 'UserController@getEdit'
        ]);
        Route::get('logout',[
            'as' => 'user.logout',
            'uses' => 'UserController@getLogout'
        ]);
    });
});