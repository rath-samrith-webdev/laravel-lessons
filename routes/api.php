<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('/create', [PostController::class, 'store']);
    Route::get('/{post}', [PostController::class, 'show']);
    Route::put('/update/{post}', [PostController::class, 'update']);
    Route::delete('/delete/{post}', [PostController::class, 'destroy']);
});
