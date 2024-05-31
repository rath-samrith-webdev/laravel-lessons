<?php

use App\Http\Controllers\Api\CatgoryController;
use App\Http\Controllers\Api\ProductController;
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

Route::prefix('products')->group(function(){
    Route::get('/list', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('/create', [ProductController::class, 'store']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});
Route::prefix('category')->group(function(){
    Route::get('/', [CatgoryController::class, 'index']);
    Route::get('/{id}', [CatgoryController::class, 'show']);
    Route::post('/create', [CatgoryController::class, 'store']);
    Route::put('/{id}', [CatgoryController::class, 'update']);
    Route::delete('/{id}', [CatgoryController::class, 'destroy']);
});
