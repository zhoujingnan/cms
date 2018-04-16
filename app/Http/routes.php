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
Route::controller('/backlogin','Back\BackLoginController');
Route::controller('/backindex','Back\BackIndexController');
Route::controller('/backnet','Back\BackNetController');
Route::controller('/backcolumn','Back\BackColumnController');
Route::controller('/backmember','Back\BackMemberController');
Route::post('/backmember/upload','Back\BackMemberController@upload');