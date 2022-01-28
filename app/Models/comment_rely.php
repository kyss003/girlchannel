<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class comment_rely extends Model
{
    use HasFactory;
    protected $table = "comment_relies";
    protected $guarded = [];

    public function likes(){
        return $this->hasMany('App\Models\LikeDislike','comment_rely_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike','comment_rely_id')->sum('dislike');
    }

    public function comment(){
        return $this->belongsTo('App\Models\comment','comment_rely_id');
    }
}
