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
    return view('_allView.home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/authLogin', 'Auth_\LoginController@getLoginForm')->name('getLogin');
Route::post('/authLogin', 'Auth_\LoginController@login')->name('postLogin');

Route::get('/authRegister', 'Auth_\RegisterController@getRegistrationForm')->name('getRegister');
Route::post('/authRegister', 'Auth_\RegisterController@register')->name('postRegister');

Route::get('/step', 'AllController\StepController@index')->name('get10Step');
Route::get('/book', 'AllController\BookController@index')->name('getBook');
Route::get('/cart', 'AllController\CartController@index')->name('getCart');
Route::get('/contact', 'AllController\ContactController@index')->name('getContact');
Route::get('/detailProducts', 'AllController\DetailProductsController@index')->name('getDetailProducts');
Route::get('/modelHot', 'AllController\ModelHotController@index')->name('getModelHot');
Route::get('/products', 'AllController\ProductsController@index')->name('getProducts');
Route::get('/service', 'AllController\ServiceController@index')->name('getService');
