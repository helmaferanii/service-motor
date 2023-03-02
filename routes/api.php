<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\UserController;
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

Route::post('/register',[\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login',[\App\Http\Controllers\Api\AuthController::class, 'login']);

// Route::group(['prefix' => 'v1'], function () {
//     Route::post('login', [UserController::class, 'login']);
//     Route::post('register', [UserController::class, 'register']);
//     Route::get('logout', [UserController::class, 'logout'])->middleware('auth:api');
//     // Route::get('mobils', [MobilController::class, 'allMobil']);
//     // Route::get('mobils/{id}', [MobilController::class, 'singleMobil']);
// });
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});