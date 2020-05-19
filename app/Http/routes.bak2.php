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



Route::get('/user/name','UserController@name');
Route::get('/user/age','UserController@age');
Route::get('/user/intro','UserController@intro');

Route::get('/young/{age}','UserController@young')->Middleware('young');


Route::get('error',function(){
	return view('errors.503',['message'=>'zheshigecuowu']);
});

