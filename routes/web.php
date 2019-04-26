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

Auth::routes();

Route::get('/home', [
    'uses'=>'ProductController@getDashboard',
    'as'=>'dashboard'
]);

Route::get('/product', [
    'uses'=>'ProductController@getProduct',
    'as'=>'product'
]);

Route::get('/category',[
    'uses'=>'ProductController@getCategory',
    'as'=>'category'
]);

Route::post('/category/new',[
    'uses'=>'ProductController@postNewCategory',
    'as'=>'new.category'
]);

Route::get('/category/delete/{id}', [
    'uses'=>'ProductController@getDeleteCategory',
    'as'=>'remove.category'
]);

Route::get('/category/update',[
    'uses'=>'ProductController@getUpdateCategory',
    'as'=>'update.category'
]);