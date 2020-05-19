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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "index page";
});

Route::get('/help', function () {
    return "help page";
});

Route::get('name/{name}/age/{age}', function ($name,$age) {
    return "Im is a ".$name.'今年：'.$age.'岁';
});

Route::get('hello/{hello?}', function ($hello=null) {
    return "hello! -".$hello;
});

Route::get('hello2/{hello?}', function ($hello='Tom') {
    return "hello! -".$hello;
});

Route::get('/foo', ['as'=>'foo1',function () {
    return "help foo";
}]);

Route::get('/foo2', function () {
    return "help foo2";
})->name('foo');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        // 该路由将使用 Auth 中间件
    });

    Route::get('name', function () {
        // 该路由也将使用 Auth 中间件
    });
});


Route::group(['namespace'=>'Admin'],function(){
	// 控制器在「App\Http\Controllers\Admin」命名空间
	Route::group(['namespace'=>'User'],function(){
		// 控制器在「App\Http\Controllers\Admin\User」命名空间
	});
	
});


Route::group(['prefix' => 'user'], function () {
    Route::get('name', function ()    {
        //
    });
    Route::get('age', function ()    {
        //
    });
    Route::get('introduction', function ()    {
        //
    });
});


Route::group(['prefix' => 'user/{id}'], function () {
    Route::get('name', function ($id)    {
        // 符合 'user/{id}/name' URL 
    });
    Route::get('age', function ($id)    {
        // 符合 'user/{id}/age' URL 
    });
});


Route::get('/helpurl', function() {
    return url('/helpurl');
});



Route::get('/too',function(){
	return route('too');               //route('路由名称')
});

Route::get('/diss',function(){
	
})->name('too');



Route::get('hello/{name?}', function ($name = 'Tom') {
    return 'Hello! '.$name;
})->where('name','[A-Za-z]+');    //正则限制参数值格式

Route::get('name/{name}/age/{age}', function ($name, $age) {
    return 'I`m '.$name.' ,and I`m '.$age;
})->where(['name' => '[A-Za-z]+', 'age' => '[0-9]+']);    //多个参数进行正则验证





Route::post('/foo', function() {
    //该路由将匹配 post方法的 '/foo' url
});

Route::put('/foo', function() {
    //该路由将匹配 put方法的 '/foo' url
});

//可以用 match 来同时处理多种类型的请求

Route::match(['get', 'post'],'/foo', function () {
    // 该路由将匹配 get 和 post 方法的 'foo' url
});

//使用 any 来同时处理所有类型的请求

Route::any('/foo', function() {
    // 该路由将匹配 所有 类型的 'foo' url
});







