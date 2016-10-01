<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/members', 'HomeController@members');
Route::get('/chat', 'HomeController@chat');
Route::get('/contact-us', 'HomeController@contactUs');
Route::post('/post-comment', 'HomeController@createComment');
Route::get('/member-profile', 'HomeController@memberProfile');

//Social login routes to redirect and call back
Route::get('social/auth/redirect/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('social/auth/{provider}', 'Auth\LoginController@handleProviderCallback');
