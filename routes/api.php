<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class);
});
Route::prefix('v1')->group(function () {
    Route::apiResource('posts', PostController::class);
});
//Route::prefix('v2')->group(function () {
//    Route::apiResource('users/posts', [\App\Models\User::class, 'posts']);
//});
