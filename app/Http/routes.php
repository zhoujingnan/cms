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
Route::get('/backnet/conadd','Back\BackNetController@conadd');
Route::post('/backnet/netdo','Back\BackNetController@netdo');
Route::post('/backnet/condo','Back\BackNetController@condo');
//广告管理
Route::get('/backadvertising/add','Back\BackAdvertisingController@add');
Route::post('/backadvertising/add_do','Back\BackAdvertisingController@add_do');
Route::get('/backadvertising/ad_list','Back\BackAdvertisingController@ad_list');
Route::get('/backadvertising/ad_up/{id}','Back\BackAdvertisingController@ad_up');
Route::post('/backadvertising/up_do','Back\BackAdvertisingController@up_do');
Route::get('/backadvertising/pagedata','Back\BackAdvertisingController@pagedata');
Route::get('/backadvertising/del','Back\BackAdvertisingController@del');

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
Route::get('/backmember/pidel','Back\BackMemberController@pidel');
//课堂
Route::get('/backclass/index','Back\BackClassController@index');
Route::get('/backclass/uniqueTitle','Back\BackClassController@uniqueTitle');
Route::get('/backclass/pagedata','Back\BackClassController@pagedata');
Route::get('/backclass/add','Back\BackClassController@add');
Route::post('/backclass/adddo','Back\BackClassController@adddo');
Route::get('/backclass/up/{class_id}','Back\BackClassController@up');
Route::post('/backclass/updo','Back\BackClassController@updo');
Route::get('/backclass/del/{member_id}','Back\BackClassController@del');
Route::get('/backclass/pidel','Back\BackClassController@pidel');
//故事管理
Route::get('/backstory/index','Back\BackStoryController@index');
Route::get('/backstory/add','Back\BackStoryController@add');
Route::get('/backstory/uniqueTitle','Back\BackStoryController@uniqueTitle');
Route::post('/backstory/adddo','Back\BackStoryController@adddo');
Route::get('/backstory/pagedata','Back\BackStoryController@pagedata');
Route::get('/backstory/up/{class_id}','Back\BackStoryController@up');
Route::post('/backstory/updo','Back\BackStoryController@updo');
Route::get('/backstory/del/{member_id}','Back\BackStoryController@del');
Route::get('/backstory/pidel','Back\BackStoryController@pidel');
//活动管理
Route::get('backactive/index','Back\BackActiveController@index');
Route::get('backactive/add','Back\BackActiveController@add');
Route::post('backactive/adddo','Back\BackActiveController@adddo');
Route::get('backactive/uniqueTitle','Back\BackActiveController@uniqueTitle');
Route::get('/backactive/pagedata','Back\BackActiveController@pagedata');
Route::get('/backactive/up/{active_id}','Back\BackActiveController@up');
Route::post('/backactive/updo','Back\BackActiveController@updo');
Route::get('/backactive/del/{active_id}','Back\BackActiveController@del');
Route::get('/backactive/pidel','Back\BackActiveController@pidel');
//留言管理
Route::get("/backleave/index","Back\BackLeaveController@index");
Route::get("/backleave/pagedata","Back\BackLeaveController@pagedata");
Route::get("backleave/clickup","Back\BackLeaveController@clickup");
Route::get('/backleave/del/{active_id}','Back\BackLeaveController@del');
Route::get('/backleave/pidel','Back\BackLeaveController@pidel');
<<<<<<< HEAD
//友情链接管理
Route::get('/backlink/add','Back\BackLinkController@add');
Route::post('/backlink/adddo','Back\BackLinkController@adddo');
Route::get('/backlink/show','Back\BackLinkController@show');
Route::get('/backlink/del','Back\BackLinkController@del');
=======
//用户管理
Route::get("/backadmin/index","Back\BackAdminController@index");
Route::get("/backadmin/add","Back\BackAdminController@add");
Route::get("/backadmin/del","Back\BackAdminController@del");
Route::get("/backadmin/sole","Back\BackAdminController@sole");
Route::get("/backadmin/roleadd/{id}","Back\BackAdminController@roleadd");
Route::get("/backadmin/upstatus","Back\BackAdminController@upstatus");
Route::post("/backadmin/r_do","Back\BackAdminController@r_do");
Route::post("/backadmin/add_do","Back\BackAdminController@add_do");
//角色管理
Route::get("/backrole/index","Back\BackRoleController@index");
Route::get("/backrole/add","Back\BackRoleController@add");
Route::post("/backrole/adddo","Back\BackRoleController@adddo");
Route::get("/backrole/up/{role_id}","Back\BackRoleController@up");
Route::post("/backrole/updo","Back\BackRoleController@updo");
Route::get("/backrole/uniqueTitle","Back\BackRoleController@uniqueTitle");
Route::get('/backrole/del/{active_id}','Back\BackRoleController@del');
Route::get('/backrole/pidel','Back\BackRoleController@pidel');
Route::get('/backrole/addpower/{role_id}','Back\BackRoleController@addpower');
Route::post('/backrole/addpowerdo','Back\BackRoleController@addpowerdo');
//权限管理
Route::get("/backpower/index","Back\BackPowerController@index");
Route::get("/backpower/add","Back\BackPowerController@add");

>>>>>>> 80f490af76ddabf54c224b7eb9e40739cb587576
