<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/mongodb', function () {
    return view('mongodb');
});





Route::get('/admin/products/{id}', 'GamesController@Show');

// Principal index 
Route::get('/games', 'GamesController@GamesIndex')->name('Videogames Information');
Route::get('/games/{id}', 'GamesController@GamesDetails')->name('GamesDetails');


// Create
//  Route::get('/admin/games/create', function() {
//     return view('admin/games/create');
// });

//Admin Games Routes
Route::get('/admin/games', 'GamesController@IndexAdmin');

Route::get('/admin/games/create','GamesController@Create');

Route::post('/admin/games/create','GamesController@Games');

Route::get('/admin/games/edit/{id}', "GamesController@Edit");

Route::post('/admin/games/edit', "GamesController@Update");

Route::get('/admin/games/delete/{id}', "GamesController@Delete");

Route::delete('/admin/games/delete', "GamesController@Remove");

Route::get('/admin/games/{id}','GamesController@Show');

//Admin Genre Routes
Route::get('/admin/genre', 'GenreController@IndexAdmin');

Route::get('/admin/genre/create','GenreController@Create');

Route::post('/admin/genre/create','GenreController@Genre');

Route::get('/admin/genre/edit/{id}', "GenreController@Edit");

Route::post('/admin/genre/edit', "GenreController@Update");

Route::get('/admin/genre/delete/{id}', "GenreController@Delete");

Route::delete('/admin/genre/delete', "GenreController@Remove");

Route::get('/admin/genre/{id}','GenreController@Show');

//Admin Platforms Routes
Route::get('/admin/platform', 'PlatformsController@IndexAdmin');

Route::get('/admin/platform/create','PlatformsController@Create');

Route::post('/admin/platform/create','PlatformsController@Platforms');

Route::get('/admin/platform/edit/{id}', "PlatformsController@Edit");

Route::post('/admin/platform/edit', "PlatformsController@Update");

Route::get('/admin/platform/delete/{id}', "PlatformsController@Delete");

Route::delete('/admin/platform/delete', "PlatformsController@Remove");

Route::get('/admin/platform/{id}','PlatformsController@Show');

//Admin Publisher Routes
Route::get('/admin/publisher', 'PublishersController@IndexAdmin');

Route::get('/admin/publisher/create','PublishersController@Create');

Route::post('/admin/publisher/create','PublishersController@Publisher');

Route::get('/admin/publisher/edit/{id}', "PublishersController@Edit");

Route::post('/admin/publisher/edit', "PublishersController@Update");

Route::get('/admin/publisher/delete/{id}', "PublishersController@Delete");

Route::delete('/admin/publisher/delete', "PublishersController@Remove");

Route::get('/admin/publisher/{id}','PublishersController@Show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
