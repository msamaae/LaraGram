<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    /* Eloquent Relationship */
    // A Post belongs to a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
