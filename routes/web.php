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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::get('admin/news/create','Admin\NewsController@add');


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'bbb'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::get('admin/profile/create','Action\profileController@add');

Route::get('admin/profile/edit','Action\profileController@add');

