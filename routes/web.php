<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\MovieController;
use App\Models\Episode;
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

Route::get('/',[\App\Http\Controllers\MovieController::class, 'home']);

Route::get('/insert',[\App\Http\Controllers\MovieController::class, 'index']);
Route::post('/movie', [\App\Http\Controllers\MovieController::class,'createMovie']);
Route::post('/episode' , [\App\Http\Controllers\EpisodeController::class, 'createEpisode']);
Route::put('/movie', [\App\Http\Controllers\MovieController::class, 'updateMovie'] );
Route::delete('/movie/{id}', [MovieController::class, 'deleteMovie']);

Route::get('/update', [\App\Http\Controllers\MovieController::class, 'update']);

Route::get('/test', function () {
    return view('test');
});
