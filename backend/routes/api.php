<?php

use App\Http\Controllers\LastFmApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/top-albums/{artist}', [LastFmApiController::class, 'getTopAlbums']);
Route::get('/top-artists', [LastFmApiController::class, 'getTopArtist']);
Route::get('/top-tracks', [LastFmApiController::class, 'getTopTracks']);

