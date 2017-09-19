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

    Route::get('/don-hang',['as' => 'orders', 'uses' => 'OrderController@index']);

    Route::group(['prefix'=>'don-hang'],function (){
        
        Route::get('/{id}/xem',['as'=>'view','uses'=>'OrderController@show']);
        Route::get('/{id}/cap-nhat',['as'=>'don-hang/edit','uses'=>'OrderController@edit']);
        Route::post('/{id}/cap-nhat',['uses'=>'OrderController@update']);
        Route::get('/{id}/xoa',['as'=>'don-hang/delete','uses'=>'OrderController@destroy']);
        Route::post('/{id}/xoa',['uses'=>'OrderController@delete']);
    });
    
});
Auth::routes();

Route::get('/home', 'HomeController@login')->name('home');

Route::get('/branch/add','BranchController@showAddForm')->name('showAddBranchForm');

Route::post('/branch/add','BranchController@add');

Route::get('/index','HomeController@index')->name('index');
Route::get('/','HomeController@index')->name('index');

Route::get('/{id}/chitietsanpham','HomeController@chitietsanpham')->name('chitietsanpham');

Route::get('{id}/category','HomeController@category')->name('category');

Route::get('{id}/branch','HomeController@branch')->name('branch');

Route::get('/{id}/mua-hang','HandleController@muahang')->name('muahang');

Route::get('gio-hang',['as'=>'giohang','uses'=>'HandleController@giohang']);

Route::get('/xoa-san-pham/{id}','HandleController@xoasanpham')->name('xoasanpham');

Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'HandleController@capnhat']);

Route::get('thanh-toan',['as'=>'thanhtoan','uses'=>'HandleController@thanhtoan']);

Route::post('thanh-toan',['uses'=>'HandleController@chotdonhang']);

Route::get('/branch', "BranchController@listAllBranchs")->name("branch.list");
Route::get('/branch/add', "BranchController@showAddForm")->name("branch.add");
Route::post('/branch/add', "BranchController@createBranch")->name("branch.create");
Route::get('/branch/{id}/edit', "BranchController@showEditForm")->name("branch.edit");
Route::post('/branch/{id}/edit', "BranchController@updateBranch")->name("branch.update");
Route::get('/branch/{id}/delete', "BranchController@showDeleteForm")->name("branch.deleteForm");
Route::post('/branch/{id}/delete', "BranchController@deleteBranch")->name("branch.delete");
