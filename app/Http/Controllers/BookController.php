<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['success' => true, 'data' => BookResource::collection(Book::all())], 200);
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
    public function store(StoreBookRequest $request)
    {
        try {
            $book = Book::create($request->validated());
            return response()->json(['success' => true, 'data' => $book], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => "Failed to create book"], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json(['success' => true, 'data' => BookResource::make($book)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        try {
            $book->update($request->validated());
            return response()->json(
                ['success' => true, 'data' => $book],
                200
            );
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => "Failed to update book
                "], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            $book->delete();
            return response()->json(['success' => true, 'message' => "Book deleted successfully"], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => "Failed to delete book
                "], 500);
        }
    }
}
