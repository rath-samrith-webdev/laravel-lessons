<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserDetail;
use App\Http\Resources\UserDetails;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        if($users->isEmpty()){
            return response()->json(['success'=>false,'message' => 'No posts found'], 404);
        }
        return response()->json(['success' => true, 'message'=>"Post found", 'data' => UserDetail::collection(User::all())]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=User::create($request->all());
        if($user){
            return response()->json(['success'=>true,'message'=>'Post created','data'=>new UserDetail($user)]);
        }
        return response()->json(['success'=>false,'message'=>'Post not created','data'=>null]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        if(!$user){
            return response()->json(['success'=>false,"message"=>"User not found"],404);
        }
        return response()->json(['success'=>true,'message'=>'User found','data'=>new UserDetails($user)],200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
