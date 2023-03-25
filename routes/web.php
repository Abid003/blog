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
    return view('fontend.index');
});

Route::get('/about', function () {
    return view('fontend.about');
});

Route::get('/services', function () {
    return view('fontend.services');
});

Route::get('/contact', function () {
    return view('fontend.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
