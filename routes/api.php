<?php

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

Route::prefix("user")->group(function () {
    Route::get("/all",function (){
        global $users;
        return $users;
    }); //Return all users
    Route::get('/{id}',function ($id){
        global $users;
        return $users[$id];
    })->where("id","[0-9]+"); //Get user by index
    Route::get('/{name}',function ($name){
        global $users;
        return array_filter($users,fn($user)=>$user['name']==$name);
    })->where("name","[a-z]+");//Get user by name
    Route::get('/user/{id}/posts/{index}',function ($id,$index){
        global $users;
        return $users[$id]["posts"]["$index"];
    });//Get post through post index from user index

});//Define prefix for routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
