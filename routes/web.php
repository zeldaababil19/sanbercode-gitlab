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

Route::get('/pendaftaran', 'DaftarController@daftar');

Route::post('/daftar', 'DaftarController@submit');

Route::get('/table', function(){
  return view('table.table');
});

Route::get('/data-table', function(){
  return view('table.data-table');
});


// CRUD Cast
Route::get('/cast', 'CastController@index');
Route::get('/cast/create', 'CastController@create');
Route::post('/cast', 'CastController@store');
Route::get('/cast/{cast_id}', 'CastController@show');
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
Route::put('/cast/{cast_id}', 'CastController@update');
Route::delete('/cast/{cast_id}', 'CastController@destroy');

// CRUD Genre
Route::get('/genre', 'GenreController@index');
Route::get('/genre/create', 'GenreController@create');
Route::post('/genre', 'GenreController@store');
Route::get('/genre/{genre_id}', 'GenreController@show');
Route::get('/genre/{genre_id}/edit', 'GenreController@edit');
Route::put('/genre/{genre_id}', 'GenreController@update');
Route::delete('/genre/{genre_id}', 'GenreController@destroy');

// CRUD Film
Route::resource('film', 'FilmController');

Route::get('/home', 'HomeController@index')->name('home');

});
Auth::routes();