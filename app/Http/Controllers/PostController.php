<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Error;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        if ($posts->count() > 0) {
            return response()->json(['success' => true, 'message' => "Post retrived", 'data' => PostResource::collection($posts)], 200);
        } else {
            return response()->json(['success' => false, 'message' => "No post found"], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            $post = Post::create($request->validated());
            return response()->json(['success' => true, 'message' => 'Post created', 'data' => $post], 201);
        } catch (Error) {
            return response()->json(['success' => false, 'message' => 'Failed to create post'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $post = Post::find($id);
        if ($post) {
            try {
                return response()->json(['success' => true, 'message' => 'Post retrived', 'data' => PostResource::make($post)], 200);
            } catch (Error) {
                return response()->json(['success' => true, 'message' => "Post not found"], 500);
            }
        } else {
            return response()->json(['success' => false, 'message' => "Post not found"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        try {
            $post = $post->update($request->validated());
            return response()->json(['success' => true, 'message' => 'Post Updated', 'data' => $request->validated()], 200);
        } catch (Error) {
            return response()->json(['success' => false, 'message' => 'Failed to create post'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return response()->json(['success' => true, 'message' => 'Post Removed', 'data' => $post], 200);
        } catch (Error) {
            return response()->json(['success' => false, 'message' => 'Failed to remove post'], 500);
        };
    }
}
