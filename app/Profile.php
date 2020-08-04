<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Eloquent Relationship 
    // A Profile belongs to a User
    public function user() 
    {
        // We don't need to use App\User because they belong in the same namespace
        return $this->belongsTo(User::class);
    }
}
