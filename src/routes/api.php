<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ModelCarController;
use App\Http\Controllers\RenterController;
use App\Http\Resources\RenterResource;
use App\Models\Renter;
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

Route::get('/modelcar/get', [ModelCarController::class, 'index']);
Route::get('/renter/get', [RenterController::class, 'index']);
Route::get('/renter/res/{id}', function ($id) {
    return new RenterResource(Renter::findOrFail($id));
});
Route::get('/renter/col/{id}', function ($id) {
    return new RenterResource(Renter::findOrFail($id));
});

Route::get('/renter', [RenterController::class, 'index']);
Route::get('/renter/{id}', [RenterController::class, 'show']);
Route::apiResource('renters', RenterController::class);
Route::apiResource('cars', CarController::class);
