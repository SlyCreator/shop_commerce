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
Route::get('/','IndexController@index');
Route::get('/wrist-watch','IndexController@listbycategory');
Route::get('/wrist-watch/{id}','IndexController@productdetail');

Route::get('/store', function () {return view('store');});

Route::get('/product', function () {return view('product');});

Route::get('/checkout', function () {return view('checkout');});

Route::get('/blank', function () { return view('blank');});

