<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    use HasFactory;
    protected $table = "topics";
    protected $fillable = [
        'image',
        'title',
        'content',
        'like_count',
        'dislike_count',
    ];
}
