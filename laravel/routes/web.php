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
    return view('page.index');
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('index',[
        'as' => 'admin.index',
        'uses' => 'AdminController@getIndex'
    ]);
    Route::get('tables',[
        'as' => 'admin.tables',
        'uses' => 'AdminController@getTables'
    ]);
    Route::get('forms',[
        'as' => 'admin.forms',
        'uses' => 'AdminController@getForms'
    ]);
});



Route::group(['prefix' => 'order'],function(){
    Route::get('takeaway',[
        'as' => 'order.takeaway',
        'uses' => 'OrderController@getTakeaway'
    ]);
    Route::get('reservation',[
        'as' => 'order.reservation',
        'uses' => 'OrderController@getReservation'
    ]);
    Route::post('reservation',[
        'as' => 'order.reservation',
        'uses' => 'OrderController@postReservation'
    ]);
    Route::get('dish',[
        'as' => 'order.dish',
        'uses' => 'OrderController@getReservationDish'
    ]);
});

Route::group(['prefix' => 'page'],function(){
    Route::get('index',[
        'as' => 'page.index',
        'uses' => 'PageController@getIndex'
    ]);
    Route::get('contact',[
        'as' => 'page.contact',
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
    Route::get('confirm',[
        'as' => 'shop.confirm',
        'uses' => 'ShopController@getConfirm'
    ]);
    Route::get('/add-to-cart-takeaway/{id}',[
        'as' => 'shop.takeaway',
        'uses' => 'ShopController@addToCartTakeaway'
    ]);
    Route::get('/delete-from-cart/{id}/{rowId}',[
        'as' => 'shop.delete',
        'uses' => 'ShopController@deleteFromCart'
    ]);
    Route::get('manualCheckout',[
        'as' => 'shop.manualCheckout',
        'uses' => 'ShopController@getManualCheckout'
    ]);
    Route::post('manualCheckout',[
        'as' => 'shop.manualCheckout',
        'uses' => 'ShopController@postManualCheckout'
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
    Route::get('orders',[
        'uses' => 'UserController@getOrders',
        'as' => 'user.orders'
    ]);
    Route::get('register',[
        'as' => 'user.register',
        'uses' => 'UserController@getRegister'
    ]);
    Route::post('register',[
        'as' => 'user.register',
        'uses' => 'UserController@postRegister'
    ]);
    Route::group(['middleware' => 'auth'],function(){
        Route::get('profile',[
            'as' => 'user.profile',
            'uses' => 'UserController@getProfile'
        ]);
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