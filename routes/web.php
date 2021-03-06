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

Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@show']);

Route::get('/product', ['as' => 'products', 'uses' => 'ProductController@show']);

Auth::routes();

Route::get('product/{name}', 'ProductController@singleproduct')->name('singleproduct');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@show');
