<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\NewsController@index');
Route::get('/premier', 'App\Http\Controllers\NewsController@premier');
Route::get('/laliga', 'App\Http\Controllers\NewsController@laliga');
Route::get('/seriea', 'App\Http\Controllers\NewsController@seriea');
Route::get('/bundesliga', 'App\Http\Controllers\NewsController@bundesliga');
Route::get('/ligue1', 'App\Http\Controllers\NewsController@ligue1');