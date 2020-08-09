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

// Games
Route::get('/games', 'GamesController@GamesIndex')->name('Videogames Information');
Route::get('/games/{id}', 'GamesController@GamesDetails')->name('GamesDetails');

// Stores
Route::get('/stores', 'StoresController@StoresIndex')->name(' Stores information');
Route::get('/stores/{id}', 'StoresController@StoresDetails')->name('Store Details');

// Publishers
Route::get('/publishers', 'PubsController@PubIndex')->name(' Publishers information');
Route::get('/publishers/{id}', 'PubsController@PubDetails')->name('Publishers Details');

// Platforms
Route::get('/platforms', 'PlatsController@PlatIndex')->name(' Platform information');
Route::get('/platforms/{id}', 'PlatsController@PlatDetails')->name('Platform Details');

// Genres
Route::get('/genres', 'GenresController@GenreIndex')->name(' Genre information');
Route::get('/genres/{id}', 'GenresController@GenreDetails')->name('Genre Details');

////////

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
Route::get('/admin/genre', 'GenresController@IndexAdmin');

Route::get('/admin/genres/create','GenresController@Create');

Route::post('/admin/genres/create','GenresController@Genre');

Route::get('/admin/genres/edit/{id}', "GenresController@Edit");

Route::post('/admin/genres/edit', "GenresController@Update");

Route::get('/admin/genres/delete/{id}', "GenresController@Delete");

Route::delete('/admin/genres/delete', "GenresController@Remove");

Route::get('/admin/genres/{id}','GenresController@Show');


//Admin Publisher Routes
Route::get('/admin/publisher', 'PublishersController@IndexAdmin');

Route::get('/admin/publisher/create','PublishersController@Create');

Route::post('/admin/publisher/create','PublishersController@Publisher');

Route::get('/admin/publisher/edit/{id}', "PublishersController@Edit");

Route::post('/admin/publisher/edit', "PublishersController@Update");

Route::get('/admin/publisher/delete/{id}', "PublishersController@Delete");

Route::delete('/admin/publisher/delete', "PublishersController@Remove");

Route::get('/admin/publisher/{id}','PublishersController@Show');


//Admin Stores Routes
Route::get('/admin/stores', 'StoresController@IndexAdmin');

Route::get('/admin/stores/create','StoresController@Create');

Route::post('/admin/stores/create','StoresController@Store');

Route::get('/admin/stores/edit/{id}', "StoresController@Edit");

Route::post('/admin/stores/edit', "StoresController@Update");

Route::get('/admin/stores/delete/{id}', "StoresController@Delete");

Route::delete('/admin/stores/delete', "StoresController@Remove");

Route::get('/admin/stores/{id}','StoresController@Show');



//Admin Plat Routes
Route::get('/admin/plat', 'PlatsController@IndexAdmin');

Route::get('/admin/plat/create','PlatsController@Create');

Route::post('/admin/plat/create','PlatsController@Plat');

Route::get('/admin/plat/edit/{id}', "PlatsController@Edit");

Route::post('/admin/plat/edit', "PlatsController@Update");

Route::get('/admin/plat/delete/{id}', "PlatsController@Delete");

Route::delete('/admin/plat/delete', "PlatsController@Remove");

Route::get('/admin/plat/{id}','PlatsController@Show');

//Admin Pubs Routes
Route::get('/admin/pub', 'PubsController@IndexAdmin');

Route::get('/admin/pub/create','PubsController@Create');

Route::post('/admin/pub/create','PubsController@Publi');

Route::get('/admin/pub/edit/{id}', "PubsController@Edit");

Route::post('/admin/pub/edit', "PubsController@Update");

Route::get('/admin/pub/delete/{id}', "PubsController@Delete");

Route::delete('/admin/pub/delete', "PubsController@Remove");

Route::get('/admin/pub/{id}','PubsController@Show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
