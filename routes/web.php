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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {

Route::get('/', 'FilmController@index');

// CRUD Cast
Route::resource('cast', 'CastController');

// CRUD Genre
Route::resource('genre', 'GenreController');

// CRUD Film
Route::resource('film', 'FilmController');

Route::get('/home', 'HomeController@index')->name('home');

});
Auth::routes();