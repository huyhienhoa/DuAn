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
Route::middleware(["auth"])->group(function () {

    Route::get('/product','ProductController@listProduct')->name('products');

    Route::get('/add','ProductController@showAddForm')->name('showAddForm');

    Route::post('/add','ProductController@createProduct');
    Route::get('{id}/edit','ProductController@showUpdateForm')->name('edit');

    Route::post('{id}/edit','ProductController@update');

    Route::get('/{id}/delete','ProductController@showDeleteForm')->name('delete');

    Route::post('/{id}/delete','ProductController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@login')->name('home');



Route::get('/index','HomeController@index');

Route::get('/{id}/chitietsanpham','HomeController@chitietsanpham');

Route::get('{id}/category','HomeController@category');
