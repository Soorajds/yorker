<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\GameController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/players/list/{teamId}', [PlayerController::class, 'list']);
Route::get('/teams/detail/{teamId}', [PlayerController::class, 'playerDetail']);
Route::get('/players/detail/{playerId}', [StatsController::class, 'show']);
Route::get('/match/start/{playerId}', [GameController::class, 'start']);

