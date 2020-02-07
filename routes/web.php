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

///////////////////////// TEST ////////////////////////////
Route::get('/test/check','TestController@md5test');     //注册
Route::post('/test/check2','TestController@check2'); 	// 验证签名

///////////////////////// TEST ////////////////////////////

Route::post('/api/user/reg','User\UserController@reg');     //用户注册
Route::post('/api/user/login','User\UserController@login'); // 登录
Route::get('/api/show/time','User\UserController@showTime'); // 获取数据

Route::post('/api/auth','User\UserController@auth'); // 鉴权