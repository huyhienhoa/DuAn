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

Auth::routes();
                
Route::get('product','ProductController@listProduct')->name('products');

Route::get('/add','ProductController@showAddForm')->name('showAddForm');

Route::post('/add','ProductController@createProduct');
Route::post('/add','ProductController@fileUpload');
