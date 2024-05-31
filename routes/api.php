<?php

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

Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('fb')->group(function () {
   Route::get('/posts',[PostController::class,'index']);
   Route::post('/posts/create',[PostController::class,'store']);
   Route::get('/posts/{id}',[PostController::class,'show']);
   Route::put('/posts/{id}',[PostController::class,'update']);
   Route::delete('/posts/{id}',[PostController::class,'destroy']);
   Route::get('/users',[UserController::class,'index']);
   Route::get('/users/{id}',[UserController::class,'show']);
});
