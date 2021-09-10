<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotRequestController;
use App\Http\Controllers\NumberController;

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

Route::post('/handleRequest', [BotRequestController::class, 'handleRequest']);
Route::get('/1/{number}', [NumberController::class, 'one']);
Route::get('/2/{number}', [NumberController::class, 'two']);
Route::get('/3/{number}', [NumberController::class, 'three']);
Route::get('/4/{number}', [NumberController::class, 'four']);
Route::get('/5/{number}', [NumberController::class, 'five']);
Route::get('/fizzbuzz/{number}', [NumberController::class, 'fizzbuzz']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
