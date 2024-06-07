<?php

namespace App\Http\Resources;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BorrowBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'book' => BookResource::make($this->book),
            'user' => UserDetail::make($this->user),
            'borrow_date' => $this->borrow_date,
            'return_date' => $this->return_date,
        ];
    }
}
