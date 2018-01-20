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
//前台路由配置
Route::get('/', 'Index\IndexController@index');//后台首页
//后台路由配置
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', 'Admin\AdminController@index');//后台首页
    Route::get('index', 'Admin\AdminController@index');//定义第二首页路由
    Route::get('login','Admin\LoginController@index');//登录页面
    Route::get('getVerify','Admin\LoginController@getVerify');//验证码
    Route::get('runlogin', 'Admin\LoginController@runlogin');//检测登录
    Route::any('loginout', 'Admin\LoginController@login_out');//退出登录
});