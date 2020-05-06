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
    
    Route::get('contact', 'AppController@contact')->name('contact');
    Route::post('contact/confirm', 'AppController@confirm')->name('confirm');
    Route::post('contact/thanks', 'AppController@send')->name('thanks');
    
    Route::get('terms', 'AppController@terms')->name('terms');
    Route::get('restaurant', 'AppController@restaurant')->name('restaurant');
});
Route::group(['as' => 'user.', 'prefix' => 'user'],function(){
    Route::get('mypage', 'UsersController@myPage')->name('mypage');
    Route::get('anypage', 'UsersController@anyPage')->name('anypage');
});





Auth::routes();
Route::post('register/verrification', 'Auth\RegisterController@verrification')->name('verrification');//ここはrouter.phpのregistermethodとどちらが採用されるのか？
Route::post('register/thanks', 'Auth\RegisterController@register');
Route::get('home', 'HomeController@index')->name('home');
