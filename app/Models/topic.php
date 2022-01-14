<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class topic extends Model
{
    use HasFactory;
    
    protected $table = "topics";
    protected $guarded = [];

    public function likes(){
        return $this->hasMany('App\Models\LikeDislike','topic_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike','topic_id')->sum('dislike');
    }


}
