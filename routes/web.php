<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes  nnb
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('welcome');
});

Route::get('/hello', 'HelloController@index');
Route::get('/hello/service', 'HelloController@service');
Route::get('/hello/message', 'HelloController@message');

Route::get('/hello/contact', 'HelloController@contact');
Route::post('/contact/confirm', 'HelloController@confirm');
Route::post('hello/contact/thanks', 'HelloController@send');

Route::get('/hello/terms', 'HelloController@terms');
Route::get('/hello/restaurant', 'HelloController@restaurant');

Route::get('/user/myPage', 'UsersController@myPage');
Route::get('/user/anyPage', 'UsersController@anyPage');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
