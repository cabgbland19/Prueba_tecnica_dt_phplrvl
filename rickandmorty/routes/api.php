<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\episodesController;
use App\Http\Controllers\locationsController;
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

Route::get('/Characters',[characterController::class,'allCharacters']);
Route::get('/Characters/{character}',[characterController::class,'getById']);
Route::post('/Characters',[characterController::class,'save']);
Route::put('/Characters/{character}',[characterController::class,'update']);
Route::delete('/Characters/{character}',[characterController::class,'destroy']);

Route::get('/Episodes',[episodesController::class,'allEpisodes']);
Route::get('/Episodes/{episodes}',[episodesController::class,'getById']);
Route::post('/Episodes',[episodesController::class,'save']);
Route::put('/Episodes/{episodes}',[episodesController::class,'update']);
Route::delete('/Episodes/{episodes}',[episodesController::class,'destroy']);

Route::get('/Locations',[locationsController::class,'alllocations']);
Route::get('/Locations/{locations}',[locationsController::class,'getById']);
Route::post('/Locations',[locationsController::class,'save']);
Route::put('/Locations/{locations}',[locationsController::class,'update']);
Route::delete('/Locations/{locations}',[locationsController::class,'destroy']);
