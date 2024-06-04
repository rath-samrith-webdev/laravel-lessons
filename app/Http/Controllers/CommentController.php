<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Error;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CommentResource::collection(Comment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'post_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);
        try {
            $comment = Comment::create($request->all());
            return new CommentResource($comment);
        } catch (Error $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        try {
            $comment = Comment::find($id);
            return response()->json(['success' => true, 'message' => 'Comment found', 'data' => CommentResource::make($comment)]);
        } catch (Error) {
            return response()->json(['success' => false, 'message' => 'Comment not found']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required|string',
            'post_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);
        try {
            $comment->update($request->all());
            return response()->json(['success' => true, 'message' => 'Comments Updated', 'data' => CommentResource::make($comment)]);
        } catch (Error $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        try {
            $comment->delete();
            return response()->json(['success' => true, 'message' => 'Comment deleted']);
        } catch (Error $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
