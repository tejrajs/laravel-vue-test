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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/peoples', 'HomeController@peoples')->name('peoples');

Route::get('/redirect', 'SocialController@redirect');
Route::get('/callback', 'SocialController@callback');