<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowRecordController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('users')->group(function () {
    Route::get('/list', [UserController::class, 'index']);
    Route::get('/show/{user}', [UserController::class, 'show']);
    Route::post('/create', [UserController::class, 'store']);
    Route::put('/update/{user}', [UserController::class, 'update']);
    Route::delete('/delete/{user}', [UserController::class, 'destroy']);
});
Route::prefix('books')->group(function () {
    Route::get('/list', [BookController::class, 'index']);
    Route::get('/show/{book}', [BookController::class, 'show']);
    Route::post('/create', [BookController::class, 'store']);
    Route::put('/update/{book}', [BookController::class, 'update']);
    Route::delete('/delete/{book}', [BookController::class, 'destroy']);
});
Route::prefix('records')->group(function () {
    Route::get('/list', [BorrowRecordController::class, 'index']);
    Route::get('/show/{record}', [BorrowRecordController::class, 'show']);
    Route::post('/search', [BorrowRecordController::class, 'search']);
});
