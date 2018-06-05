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

Route::get('/', 'ProductController@getindex')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'ProductController@getindex')->name('home');
Route::get('add-to-cart/{id}', 'ProductController@addTocart')->name('addToCart');


