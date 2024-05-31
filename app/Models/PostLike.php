<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostLike extends Model
{
    use HasFactory;
    public function postLikes():HasMany
    {
        return $this->hasMany(User::class);
    }
}
