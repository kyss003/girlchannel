<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    public function comment_rely(){
        return $this->hasMany('App\Models\comment_rely', 'comment_id');
    }

}
