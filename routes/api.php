<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\PaketController;
use App\Http\Controllers\API\Auth\CoachController;
use App\Http\Controllers\API\Auth\JadwalController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::prefix('paket')->group(function(){
    route::get('/view',[PaketController::class, 'PaketView']);
    route::post('/add',[PaketController::class, 'PaketAdd']);
    route::put('/update/{id}',[PaketController::class, 'PaketUpdate']);
    route::delete('/delete/{id}',[PaketController::class, 'PaketDelete']);
});

Route::prefix('coach')->group(function(){
    route::get('/view',[CoachController::class, 'CoachView']);
    route::post('/add',[CoachController::class, 'CoachAdd']);
    route::put('/update/{id}',[CoachController::class, 'CoachUpdate']);
    route::delete('/delete/{id}',[CoachController::class, 'CoachDelete']);
});

Route::prefix('jadwal')->group(function(){
    route::get('/view',[JadwalController::class, 'JadwalView']);
    route::post('/add',[JadwalController::class, 'JadwalAdd']);
    route::put('/update/{id}',[JadwalController::class, 'JadwalUpdate']);
    route::delete('/delete/{id}',[JadwalController::class, 'JadwalDelete']);
});