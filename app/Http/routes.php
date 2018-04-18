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

//网站
Route::controller('/backnet','Back\BackNetController');
Route::post('/backnet/add','Back\BackNetController@add');
//栏目
Route::controller('/backcolumn','Back\BackColumnController');
//会员
Route::get('/backmember/index','Back\BackMemberController@index');
Route::get('/backmember/add','Back\BackMemberController@add');
Route::post('/backmember/upload','Back\BackMemberController@upload');
Route::get('/backmember/uniqueName','Back\BackMemberController@uniqueName');
Route::get('/backmember/up/{member_id}','Back\BackMemberController@up');
Route::post('/backmember/updo','Back\BackMemberController@updo');
Route::get('/backmember/del/{member_id}','Back\BackMemberController@del');
Route::get('/backmember/pagedata','Back\BackMemberController@pagedata');
//课堂
Route::get('/backclass/index','Back\BackClassController@index');
Route::get('/backclass/uniqueTitle','Back\BackClassController@uniqueTitle');
Route::get('/backclass/pagedata','Back\BackClassController@pagedata');
Route::get('/backclass/add','Back\BackClassController@add');
Route::post('/backclass/adddo','Back\BackClassController@adddo');
Route::get('/backclass/up/{class_id}','Back\BackClassController@up');
Route::post('/backclass/updo','Back\BackClassController@updo');
Route::get('/backclass/del/{member_id}','Back\BackClassController@del');
//故事管理
Route::get('/backstory/index','Back\BackStoryController@index');
Route::get('/backstory/add','Back\BackStoryController@add');
Route::get('/backstory/uniqueTitle','Back\BackStoryController@uniqueTitle');
Route::post('/backstory/adddo','Back\BackStoryController@adddo');
Route::get('/backstory/pagedata','Back\BackStoryController@pagedata');
Route::get('/backstory/up/{class_id}','Back\BackStoryController@up');
Route::post('/backstory/updo','Back\BackStoryController@updo');
Route::get('/backstory/del/{member_id}','Back\BackStoryController@del');
//活动管理
Route::get('backactive/index','Back\BackActiveController@index');


