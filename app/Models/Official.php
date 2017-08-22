<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = ['first_name', 'last_name', 'gender', 'user_id'];

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

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
