<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetail;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        if($posts->isEmpty()){
            return response()->json(['success'=>false,'message' => 'No posts found'], 404);
        }
        return response()->json(['success' => true, 'message'=>"Post found", 'data' => PostDetail::collection(Post::all())]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post=Post::create($request->all());
        if($post){
            return response()->json(['success'=>true,'message'=>'Post created','data'=>new PostDetail($post)]);
        }
        return response()->json(['success'=>false,'message'=>'Post not created','data'=>null]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::find($id);
        if(!$post){
            return response()->json(['success'=>false,"message"=>"Post not found"],404);
        }
        return response()->json(['success'=>true,'message'=>'Post found','data'=>new PostDetail($post)],200);

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
