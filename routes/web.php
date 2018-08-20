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
    return view('home2');
});

Route::get('/tell', function () {
    return "tell your father";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home2');
Route::middleware(['auth'])->group(function () {
	Route::resource('profile', 'ProfileController');
});
