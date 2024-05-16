<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','body'];
    public function getAllPosts(){
        return Post::all();
    }
    public function getPostById($id){
        return Post::where('id',$id)->first();
    }
    public function createPost($post){
       if(!Post::create($post)){
           return false;
       }else{
           return true;
       }
    }
    public function removePost($post){
        if(!$post->delete()){
            return false;
        }else{
            return true;
        }
    }
    public function updatePost($newPost,$post){
        if(!$post->update($newPost)){
            return false;
        }else{
            return true;
        }
    }
}
