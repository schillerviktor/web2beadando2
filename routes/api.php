<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ThirdPartyAPIController;
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

Route::get('players', [PlayerController::class, 'restList']);
Route::post('players/interval', [PlayerController::class, 'restGetPlayersOfInterval']);
Route::post('players/pdf', [PlayerController::class, 'generatePdf']);
Route::get('players/{id}', [PlayerController::class, 'restShow']);
Route::post('players', [PlayerController::class, 'restStore']);
Route::put('players/{id}', [PlayerController::class, 'restUpdate']);
Route::delete('players/{id}', [PlayerController::class, 'restDelete']);

Route::get('clubs', [ClubController::class, 'restList']);
Route::get('clubs/{id}', [ClubController::class, 'restShow']);
Route::post('clubs', [ClubController::class, 'restStore']);
Route::put('clubs/{id}', [ClubController::class, 'restUpdate']);
Route::delete('clubs/{id}', [ClubController::class, 'restDelete']);

Route::get('positions', [PositionController::class, 'index']);
Route::get('positions/{id}', [PositionController::class, 'show']);
Route::post('positions', [PositionController::class, 'store']);
Route::put('positions/{id}', [PositionController::class, 'update']);
Route::delete('positions/{id}', [PositionController::class, 'delete']);

Route::get('live', [ThirdPartyAPIController::class, 'index']);

