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
    //Frontend view
Route::get('/','IndexController@index')->name('home');
Route::get('/wrist-watch','IndexController@listbycategory');
Route::get('/wrist-watch/{id}','IndexController@productdetail');

    //handling Cart
Route::get('/viewcart','CartController@index')->name('viewcart');
Route::post('/addtocart','CartController@addToCart')->name('addToCart');
Route::get('cart/removeItem/{id}','CartController@removeItem')->name('removeItem');
Route::get('cart/update-quantity/{id}/{qty}','CartController@updateCart');

    //Handling Order
Route::get('placeOrder','OrderController@checkout_page')->name('Checkoutpage');


    //Testing views

Route::get('/store', function () {return view('store');});

Route::get('/product', function () {return view('product');});

Route::get('/checkout', function () {return view('checkout');});

Route::get('/blank', function () { return view('blank');}); 

Route::get('/viewcarty', function () { return view('viewcart');}); 