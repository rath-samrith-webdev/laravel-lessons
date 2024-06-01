<?php

namespace App\Http\Controllers;

use App\Models\ReplyComment;
use Illuminate\Http\Request;

class ReplyCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ReplyComment::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReplyComment $replyComment)
    {
        return $replyComment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReplyComment $replyComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReplyComment $replyComment)
    {
        //
    }
}
