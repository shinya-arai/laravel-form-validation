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

Route::get('/', function () {
    return view('pages.form_validation');
});


Route::post('/post/email', 'FormController@email_post');
Route::post('/post/password', 'FormController@password_post');
Route::post('/post/date', 'FormController@date_post');
Route::post('/post/url', 'FormController@url_post');


Route::post('/post/check', 'FormController@check_post');


