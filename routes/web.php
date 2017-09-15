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
//Route::post('/add','ProductController@fileUpload');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('{id}/edit','ProductController@showUpdateForm')->name('edit');

Route::post('{id}/edit','ProductController@update');

Route::get('/{id}/delete','ProductController@showDeleteForm')->name('delete');

Route::post('/{id}/delete','ProductController@delete');

Route::get('/branch/add','BranchController@showAddForm')->name('showAddBranchForm');

Route::post('/branch/add','BranchController@add');





Route::get('/index','HomeController@index')->name('index');

Route::get('/{id}/chitietsanpham','HomeController@chitietsanpham')->name('chitietsanpham');

Route::get('{id}/category','HomeController@category')->name('category');

Route::get('{id}/branch','HomeController@branch')->name('branch');

Route::get('/{id}/mua-hang','HandleController@muahang')->name('muahang');

Route::get('gio-hang',['as'=>'giohang','uses'=>'HandleController@giohang']);

Route::get('/xoa-san-pham/{id}','HandleController@xoasanpham')->name('xoasanpham');

Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'HandleController@capnhat']);

Route::get('thanh-toan',['as'=>'thanhtoan','uses'=>'HandleController@thanhtoan']);

Route::post('thanh-toan',['uses'=>'HandleController@chotdonhang']);
