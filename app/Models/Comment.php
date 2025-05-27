<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $connection = "mongodb";
    protected $collection = "comments";

    protected $fillable = [
        "comment",
        "user_id",
        "post_id",
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
