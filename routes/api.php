<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(function () {
    Route::prefix('post')->group(function () {
        Route::get('/list',[PostController::class,'index']);
        Route::get('/show/{post}',[PostController::class,'show']);
        Route::post('/store',[PostController::class,'store']);
        Route::put('/update/{post}',[PostController::class,'update']);
        Route::delete('/delete/{post}',[PostController::class,'destroy']);
    });
    Route::prefix('comment')->group(function () {
        Route::get('/list',[CommentController::class,'index']);
        Route::get('/show/{comment}',[CommentController::class,'show']);
        Route::post('/store',[CommentController::class,'store']);
        Route::put('/update/{comment}',[CommentController::class,'update']);
        Route::delete('/delete/{comment}',[CommentController::class,'destroy']);
    });
    Route::prefix('like')->group(function () {
        Route::get('/list',[LikeController::class,'index']);
        Route::get('/show/{like}',[LikeController::class,'show']);
        Route::post('/store',[LikeController::class,'store']);
        Route::put('/update/{like}',[LikeController::class,'update']);
        Route::delete('/delete/{like}',[LikeController::class,'destroy']);
    });
    Route::prefix('user')->group(function () {
        Route::get('/',[UserController::class,'index']);
        Route::get('/show/{user}',[UserController::class,'show']);
    });
});
