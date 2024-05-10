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

Route::prefix("user")->group(function () {
    Route::get("/all",function (){
        global $users;
        $user_name = "";
        foreach ($users as $user) {
            $user_name.=$user['name']." ";
        }
        return "The users ".$user_name;
    });
});


Route::fallback(function(){
    return "404 Page not found";
});
