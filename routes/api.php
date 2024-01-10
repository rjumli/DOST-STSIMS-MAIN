<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user', [App\Http\Controllers\ApiController::class, 'user']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('01101011 01110010 01100001 01100100')->group(function(){
        Route::get('/locations/{type}', [App\Http\Controllers\ApiController::class, 'locations']);
        Route::get('/schools/{type}', [App\Http\Controllers\ApiController::class, 'schools']);
        Route::get('/lists/{type}', [App\Http\Controllers\ApiController::class, 'lists']);
        Route::prefix('scholars')->group(function(){
            Route::get('/{code}', [App\Http\Controllers\ApiController::class, 'scholars']);
            Route::post('/', [App\Http\Controllers\ScholarController::class, 'store']);
        });

        Route::prefix('qualifiers')->group(function(){
            Route::get('/', [App\Http\Controllers\ApiController::class, 'qualifiers']);
            Route::post('/', [App\Http\Controllers\Scholar\QualifierController::class, 'store']);
        });
        Route::prefix('endorsements')->group(function(){
            Route::get('/', [App\Http\Controllers\ApiController::class, 'endorsements']);
            Route::post('/', [App\Http\Controllers\Scholar\EndorsementController::class, 'store']);
        });
        Route::get('/statistics', [App\Http\Controllers\ApiController::class, 'statistics']);
    });
});