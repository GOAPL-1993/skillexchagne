<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $fillable = [
        "post_user_id",
        "post_username",
        "wanna_teach",
        "wanna_learn",
        "body",
        "likes",
        "sort",
        "catalog",
        "area",
    ];
}
