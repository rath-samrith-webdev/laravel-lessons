<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getAllProduct()
    {
        return Product::all();
    }
    public function addProduct($name): bool
    {
        $created = Product::create($name);
        if (!$created) {
            return false;
        };
        return true;
    }
}
