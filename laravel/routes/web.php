<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('pages.index');
});

Route::get('index', function () {
    return view('pages.index');
});
Route::get('contact',function(){
    return view('pages.contact');
});

Route::group(['prefix' => 'order'],function(){
    Route::get('food','OrderController@showFood')->name('food');
    Route::get('table','OrderController@showTable')->name('table');
    Route::post('table','OrderController@postTable')->name('table');
    Route::get('takeaway','OrderController@showTakeaway')->name('takeaway');
});

Route::group(['prefix' => 'pages'],function(){
    Route::get('index','ViewController@showIndex')->name('index');
    Route::get('contact','ViewController@showContact')->name('contact');
});

Route::group(['prefix' => 'shop'],function(){
    Route::get('cart','ShopController@showCart')->name('cart');
    Route::get('checkout','ShopController@showCheckout')->name('checkout');
    Route::post('checkout','ShopController@postCheckout')->name('checkout');
    Route::get('confirm','ShopController@showConfirm')->name('confirm');

    Route::get('addToCart/{id}/{category}','ShopController@addToCart')->name('addToCart');
    Route::get('deleteToCart/{id}/{category}','ShopController@deleteToCart')->name('deleteToCart');
    Route::get('updateToCart/{id}/{category}','ShopController@updateToCart')->name('updateToCart');
});

Route::group(['prefix' => 'user'],function(){
    Route::get('login','AuthController@showLogin')->name('login');
    Route::post('login','AuthController@postLogin')->name('login');
    Route::get('register','AuthController@showRegister')->name('register');
    Route::post('register','AuthController@postRegister')->name('register');
    Route::get('deleteOrder/{id}','AuthController@deleteOrder')->name('deleteOrder');

    Route::group(['before' => 'auth'],function(){
        Route::get('profile','AuthController@showProfile')->name('profile');
        Route::get('edit','AuthController@showEdit')->name('edit');
        Route::post('edit','AuthController@postEdit')->name('edit');
        Route::get('orders','AuthController@showOrders')->name('orders');
        Route::get('logout','AuthController@logout')->name('logout');
    });
});

Route::group(['prefix' => 'admin'],function(){
    Route::group(['middleware' => ['auth','admin']],function(){
        Route::get('index','AdminController@showIndex')->name('adminIndex');
        Route::get('tables','AdminController@showTables')->name('adminTables');
        Route::get('forms','AdminController@showForms')->name('adminForms');
    });
});
