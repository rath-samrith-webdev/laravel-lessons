<?php

namespace App\Http\Controllers;

use App\Models\PostComments;
use App\Http\Requests\StorePostCommentsRequest;
use App\Http\Requests\UpdatePostCommentsRequest;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostCommentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostComments $postComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostComments $postComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostCommentsRequest $request, PostComments $postComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostComments $postComments)
    {
        //
    }
}
