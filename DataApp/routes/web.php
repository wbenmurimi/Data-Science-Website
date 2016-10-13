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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@welcome');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/members', 'Frontend\MembersController@getMembers');
Route::get('/chat', 'HomeController@chat');
Route::get('/contact-us', 'HomeController@contactUs');
Route::get('/member-profile', 'Frontend\MembersController@getMemberProfile');

//Social login routes to redirect and call back
Route::get('social/auth/redirect/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('social/auth/{provider}', 'Auth\LoginController@handleProviderCallback');


/*
| Routes by @Benjamin
*/
Route::get('/test', 'Frontend\CommentsController@getAllComments');
Route::post('/post-comment', 'Frontend\CommentsController@postComment');
Route::post('/update-user-bio', 'Frontend\MembersController@postBio');
Route::post('/contact-us-email', 'HomeController@postContactUs');