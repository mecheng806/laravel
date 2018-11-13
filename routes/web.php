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

// Route::get('/', function () {
//     return view('/','welcome',['name'=>'梅成']);
// });
Route::get('hi', function () {
     return 'Hello World';
});
Route::get('get',function(){
	return 'you success';
});
Route::view('/','welcome',['name'=>'laravel']);
Route::get('/show','Test\TestController@show');
Route::get('/data/{id}',function($id){
	return 'data'.'===='.$id;
})->where('id','[0-9]+');
Route::get('/test',function(){
	return view('admin.test1',['age'=>25]);
});
Route::get('post/create','Test\TestController@create');
Route::post('post','Test\TestController@store');
Route::get('post/list','Test\TestController@list');
Route::get('post/edit','Test\TestController@edit');