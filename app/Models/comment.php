<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = "comments";
    protected $guarded = [];
    
    public function likes(){
        return $this->hasMany('App\Models\LikeDislike','comment_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike','comment_id')->sum('dislike');
    }
}
