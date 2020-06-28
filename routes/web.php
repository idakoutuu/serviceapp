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
Route::group(['as' => 'app.'], function(){
    Route::get('/', 'AppController@index')->name('index');
    Route::get('service', 'AppController@service')->name('service');
    Route::get('message', 'AppController@message')->name('message');
    
    Route::get('contact', 'AppController@contact')->middleware('auth')->name('contact');
    Route::post('contact/confirm', 'AppController@confirm')->name('confirm');
    Route::post('contact/thanks', 'AppController@send')->name('thanks');
    
    Route::get('terms', 'AppController@terms')->name('terms');
    Route::get('restaurant', 'AppController@restaurant')->name('restaurant');
});

//'prefix' => 'user'　ここ聞く
Route::group(['as' => 'user.'],function(){
    Route::get('usertop', 'UsersController@usertop')->middleware('auth')->name('usertop');
    Route::get('mypage', 'UsersController@mypage')->middleware('auth')->name('mypage');
    Route::get('anypage', 'UsersController@anypage')->middleware('auth')->name('anypage');
    Route::get('edit', 'UsersController@edit')->middleware('auth')->name('edit');
    Route::post('update', 'UsersController@update')->middleware('auth')->name('update');
    Route::post('updated', 'UsersController@updated')->middleware('auth')->name('updated');
});


Auth::routes();
Route::post('register/verification', 'Auth\RegisterController@verification')->name('verification');//ここはrouter.phpのregistermethodとどちらが採用されるのか？
Route::post('register', 'Auth\RegisterController@register');
Route::get('home', 'HomeController@index')->name('home');
