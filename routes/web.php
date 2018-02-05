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
    return view('Home.welcome');
});
Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function(){
	Route::get('login','IndexController@login');								/*登录*/
	Route::get('lockscreen','IndexController@lockscreen');						/*超时锁定*/
	Route::get('dashboard','DashboardController@index');						/*控制面板*/ 
	Route::group(['prefix' => 'Errors','namespace' => 'Errors'],function(){
		Route::get('404',function(){											/*404错误*/
			return view('Admin.Errors.404');
		});
		Route::get('500',function(){											/*500错误*/
			return view('Admin.Errors.500');
		});
	});
}); 

