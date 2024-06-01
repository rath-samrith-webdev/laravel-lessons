<?php

namespace App\Http\Resources;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this->id,
            'post' => $this->post_id,
            'content' => $this->comment_content,
            'comment_by' => Commenter::make($this->user),
            'replies' => CommentReplyResource::collection($this->replycomment()->get())
        ];
    }
}
