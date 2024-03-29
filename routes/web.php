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
})->name('home');

Route::resource ('artist', 'ArtistController');
Route::resource ('movie', 'MovieController');
Route::resource ('room', 'RoomController');
Route::resource ('showtime', 'ShowtimeController');
Route::resource ('theatre', 'TheatreController');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
