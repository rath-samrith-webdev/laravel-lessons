<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Catgory;
use Illuminate\Http\Request;

class CatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'Category List',
            'data' => Catgory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Catgory::create($request->validated());
        return response()->json([
            'success' => true,
            'message' => 'Category created',
            'data' => Catgory::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Catgory $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catgory $catgory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catgory $catgory)
    {
        //
    }
}
