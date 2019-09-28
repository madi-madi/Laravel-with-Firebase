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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('firebase','FirebaseController@index');
Route::get('firebase2','FirebaseController2@index');

//Route::group(['middleware'=>'session'], function(){
	Route::get('/', function () {
    return view('welcome');
//});

   // Route::get('your-route', 'YourController@yourAction');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
