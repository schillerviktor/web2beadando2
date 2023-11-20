<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PDFGeneratorController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegisterController;
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
    return view('index');
});

Route::resource('clubs', ClubController::class);

Route::get('players/details', [PlayerController::class, 'playerDetails'])->name('players.details');
Route::get('players/table', [PlayerController::class, 'table'])->name('table');
Route::get('players/table/create', [PlayerController::class, 'showCreateTable'])->name('table.create');
Route::get('players/table/edit/{id}', [PlayerController::class, 'showEditTable'])->name('editTable');
Route::post('players/table', [PlayerController::class, 'saveTable']);
Route::delete('players/table', [PlayerController::class, 'deleteTable']);
Route::put('players/table', [PlayerController::class, 'modifyTable']);
Route::resource('players', PlayerController::class);

Route::resource('pdf', PDFGeneratorController::class);

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});
