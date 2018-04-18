<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
//登录
Route::controller('/backlogin','Back\BackLoginController');
//首页
Route::controller('/backindex','Back\BackIndexController');
//栏目
Route::controller('/backcolumn','Back\BackColumnController');
//会员
Route::controller('/backmember','Back\BackMemberController');
Route::post('/backmember/upload','Back\BackMemberController@upload');
//网站管理
Route::get('/backnet/index','Back\BackNetController@index');
Route::get('/backnet/list','Back\BackNetController@mainlist');
Route::get('/backnet/info','Back\BackNetController@info');
Route::get('/backnet/message','Back\BackNetController@message');
Route::get('/backnet/menu','Back\BackNetController@menu');
Route::get('/backnet/netadd','Back\BackNetController@netadd');
Route::post('/backnet/netdo','Back\BackNetController@netdo');
//广告管理
Route::get('/backadvertising/add','Back\BackAdvertisingController@add');
Route::post('/backadvertising/add_do','Back\BackAdvertisingController@add_do');
Route::get('/backadvertising/ad_list','Back\BackAdvertisingController@ad_list');
Route::get('/backadvertising/ad_up/{id}','Back\BackAdvertisingController@ad_up');
Route::post('/backadvertising/up_do','Back\BackAdvertisingController@up_do');
