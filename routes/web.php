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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    return view('product/categories');
});

Route::get('/products', function () {
    return view('product/products');
});

Route::get('/account', function () {
    return view('user/account');
});

Route::get('/register', function () {
    return view('user/register');
});