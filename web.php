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
Route::get('about',function(){
    return view('about');
});
Route::get('/ww', function () {
    return view('ww'); 
});
Route::get('/admin/config/', 'Admin\RBAC\UserManagementController@index'); //查看所有用户
Route::get('/admin/home/', 'Admin\RBAC\UserManagementController@home'); 
Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',function(){
              return view('dashboard');
    });
    Route::get('account',function(){
        return view('account');
});
});