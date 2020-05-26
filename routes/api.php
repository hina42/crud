<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('product','productController@index');

Route::get('category','categoryController@index');

Route::post('signup','categoryController@signup');

Route::post('login','categoryController@login');

Route::post('prdbycat','categoryController@prdbycat');

Route::post('user','userController@show');