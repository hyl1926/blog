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

//首页
//Route::get('/',"HomeController@home")->name('home');

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/about','StaticPagesController@about')->name('about');
Route::get('/news','StaticPagesController@news')->name('news');
Route::get('/add','StaticPagesController@addnews')->name('add');
Route::get('/edit','StaticPagesController@edit')->name('edit');
Route::get('/del','StaticPagesController@del')->name('del');

