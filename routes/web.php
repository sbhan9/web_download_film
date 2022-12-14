<?php

use App\Http\Controllers\API\FilmController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail', [HomeController::class, 'detail']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/release', [HomeController::class, 'tahun_release']);