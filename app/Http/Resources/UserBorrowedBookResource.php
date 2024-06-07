<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserBorrowedBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'borrow_id' => $this->id,
            'books' => BookResource::collection($this->book()->get()),
            'borrow_date' => $this->borrow_date,
            'return_date' => $this->return_date,
        ];
    }
}
