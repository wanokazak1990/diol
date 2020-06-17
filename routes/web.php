<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Products\ProductController@index')->name('product.index');
Route::get('/product/{id}','Products\ProductController@show')->name('product.show');
Route::get('/sort', 'Products\SortController@index')->name('product.sort');


Route::group(['prefix'=>'cart','middleware'=>'cart','namespace'=>'Cart'],function(){
	Route::get('/','CartController@index')->name('cart.index');
	Route::post('/toggle/{id}','CartController@add')->name('cart.add');
	Route::post('/take/{id}','CartController@take')->name('cart.take');
	/*Route::get('/delete/{id}','CartController@delete')->name('cart.delete');
	Route::get('/delete/{id}','CartController@delete')->name('cart.delete');*/
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
