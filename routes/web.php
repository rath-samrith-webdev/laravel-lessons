<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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
Route::get('/about', function () {
    $posts = Post::all();
    return view('about', ['posts' => $posts]);
});
Route::get('/myview/{user}', function ($user) {
    return view('myview', ['user' => $user]);
});
Route::get('/users',[UserController::class,'getAllUsers']);
