<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'category_id',
        'user_id',
        'published_at',
        'image',
    ];

    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
}
