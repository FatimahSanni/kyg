<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parties()
    {
        return $this->belongsToMany(Party::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
