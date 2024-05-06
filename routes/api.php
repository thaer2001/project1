<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HotelController;

use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [RegisterController::class , 'register'])->middleware('register_confirm');
Route::post('/login', [RegisterController::class , 'login'])->middleware('login_confirm');



//Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Api', 'middleware' => 'auth:sanctum'], function() {

    Route::apiResource('cities', CityController::class);
    Route::apiResource('airlines', AirlineController::class);
    Route::apiResource('places', PlaceController::class);
    Route::apiResource('cars', CarController::class);
    Route::apiResource('hotels', HotelController::class);
//});

