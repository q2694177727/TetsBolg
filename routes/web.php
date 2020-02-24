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
Route::name('index.')->group( function(){
    Route::get('/index','Index\IndexController@index')->name('index1');
    Route::get('/','Index\IndexController@index')->name('index2');
});