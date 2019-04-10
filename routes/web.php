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
Route::any('key',"key\KeyController@key");
Route::any('encode',"key\KeyController@encode");
Route::any('decode',"key\KeyController@decode");
//注册
Route::any('register',"register\RegisterController@register");