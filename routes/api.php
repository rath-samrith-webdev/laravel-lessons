<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DiscountController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\API\StudentController;
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

//Student Routes
Route::prefix('student')->group(function () {
    Route::get('/list',[StudentController::class,'index'])->name('student.list');
    Route::post('/create',[StudentController::class,'store'])->name('student.create');
    Route::get('/show/{id}',[StudentController::class,'show'])->name('student.show');
    Route::put('/update/{id}',[StudentController::class,'update'])->name('student.update');
    Route::delete('/delete/{id}',[StudentController::class,'destroy'])->name('student.destroy');
});

//Category Routes
Route::prefix('category')->group(function(){
    Route::get('/list',[CategoryController::class,'index'])->name('category.list');
    Route::post('/create',[CategoryController::class,'store'])->name('category.create');
    Route::get('/show/{id}',[CategoryController::class,'show'])->name('category.show');
    Route::put('/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
});

//Products Routes
Route::prefix('product')->group(function(){
    Route::get('/list',[ProductController::class,'index'])->name('product.list');
    Route::post('/create',[ProductController::class,'store'])->name('product.create');
    Route::get('/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::put('/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/delete/{id}',[ProductController::class,'destroy'])->name('product.destroy');
});

//Discount Routes
Route::prefix('discount')->group(function(){
    Route::get('/list',[DiscountController::class,'index'])->name('discount.list');
    Route::post('/create',[DiscountController::class,'store'])->name('discount.create');
    Route::get('/show/{id}',[DiscountController::class,'show'])->name('discount.show');
    Route::put('/update/{id}',[DiscountController::class,'update'])->name('discount.update');
    Route::delete('/delete/{id}',[DiscountController::class,'destroy'])->name('discount.destroy');
});

//Order Routes
Route::prefix('order')->group(function(){
    Route::get('/list',[OrderController::class,'index'])->name('order.list');
    Route::post('/create',[OrderController::class,'store'])->name('order.create');
    Route::get('/show/{id}',[OrderController::class,'show'])->name('order.show');
    Route::put('/update/{id}',[OrderController::class,'update'])->name('order.update');
    Route::delete('/delete/{id}',[OrderController::class,'destroy'])->name('order.destroy');
});
