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

Route::get('/start','studentController@index');
Route::post('/store','studentController@store')->name('store');
Route::get('/delete','studentController@destroy')->name('delete');
Route::post('/update','studentController@update')->name('update');
Route::get('/show','studentController@show')->name('show');

Route::get('/',function(){
return view('index');
});