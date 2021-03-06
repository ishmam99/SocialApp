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
Route::post('follow/{user}','FollowController@follow');



Auth::routes();

Route::get('/profile/{user}/edit','ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}','ProfileController@update')->name('profile.update');
Route::get('/profile/{user}','ProfileController@index')->name('profile.show');
Route::get('/profile/image/{user}','ProfileController@image')->name('profile.image');
Route::get('/profiletest/{user}','ProfileController@indextest')->name('profiletest.show');
Route::get('/','PostController@index');
Route::get('/test','PostController@test');
Route::get('/friends','PostController@friend')->name('friends');
Route::get('/follower','PostController@follower')->name('follower');
Route::get('/p/create','PostController@create');
Route::post('/p','PostController@store');
Route::get('/p/{post}','PostController@show'); 
Route::post('/like','PostController@liked')->name('like');
