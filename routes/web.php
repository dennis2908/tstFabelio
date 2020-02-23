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

Route::get('/','ProductController@formInsert')->name('product.formInsert');
Route::post('/insertData','ProductController@insertData')->name('product.insertData');
Route::get('/allData','ProductController@allData')->name('product.allData');
Route::get('/getDetail/{id}','ProductController@getDetail')->name('product.getDetail');