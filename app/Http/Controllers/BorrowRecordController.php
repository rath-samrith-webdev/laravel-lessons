<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\BorrowRecord;
use App\Http\Requests\StoreBorrowRecordRequest;
use App\Http\Requests\UpdateBorrowRecordRequest;
use App\Http\Resources\BorrowBookResource;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;
use Symfony\Contracts\Service\Attribute\Required;


class BorrowRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['success' => true, 'data' => BorrowBookResource::collection(BorrowRecord::all())], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $borrowRecord = BorrowRecord::find($id);
        return response()->json(['success' => true, 'data' => BorrowBookResource::make($borrowRecord)], 200);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBorrowRecordRequest $request, BorrowRecord $borrowRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowRecord $borrowRecord)
    {
        //
    }
    public function search(SearchRequest $request)
    {
        $borrowRecords = BorrowRecord::where('borrow_date', $request->get('borrow_date'))->get();
        return response()->json(['success' => true, 'data' => BorrowBookResource::collection($borrowRecords)], 200);
    }
}
