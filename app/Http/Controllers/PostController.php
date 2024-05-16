<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = new Post();
        $allPosts = $post->getAllPosts();
        if ($allPosts!=[]){
            return response()->json(["status"=>true,"message"=>"Posts found","posts"=>$allPosts],200);
        }else{
            return response()->json(["status"=>true,"message"=>"Posts not found"],200);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $postContent=["title"=>$request->get('title'),"body"=>$request->get('body')];
        $iscreated=$post->createPost($postContent);
        if($iscreated){
            return response()->json(["status"=>true,"message"=>"Post created","data"=>$postContent],201);
        }else{
            return response()->json(["status"=>false,"message"=>"Unable to create post"],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json(["status"=>true,"message"=>"Post found","data"=>$post],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $postContent=["title"=>$request->get('title'),"body"=>$request->get('body')];
        $posts=new Post();
        $isUpdated=$posts->updatePost($postContent,$post);
        if($isUpdated){
            return response()->json(["status"=>true,"message"=>"Post updated","data"=>$postContent],201);
        }else{
            return response()->json(["status"=>false,"message"=>"Unable to update post"],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $posts=new Post();
        $isDeleted=$posts->removePost($post);
        if($isDeleted){
            return response()->json(["status"=>true,"message"=>"Post deleted successfully"],200);
        }else{
            return response()->json(["status"=>false,"message"=>"Unable to delete post"],500);
        }
    }

}
