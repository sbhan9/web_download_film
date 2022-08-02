<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FilmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', function() {
    return "API Download Film Sproject Productive";
});
Route::get('/home', [FilmController::class, 'index']);
Route::get('/search', [FilmController::class, 'search']);
Route::get('/release', [FilmController::class, 'release']);
Route::get('/realese', [FilmController::class, 'tahun_realese']);