<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("product")->group(function () {
    Route::get('/clothe',function (){
        return "Hello this clothe product page";
    });
    Route::get('/shirt',function (){
        return "Hello this shirt page";
    });
    Route::get('/clothe/name/{name}',function ($name){
        return "The clothe you looking for " . $name;
    })->where(['name' => '[A-Za-z]+']);
    Route::get('/shirt/price/{name}',function ($name){
        return "The clothe you looking for " . $name;
    })->where(['name'=> '[0-9]+']);
});

Route::fallback(function(){
    return "404 Page not found";
});
