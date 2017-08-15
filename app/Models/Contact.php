<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function official()
    {
        return $this->belongsTo(Official::class);
    }

    public function city()
    {
        return $this->belongsTo(Location::class);
    }
}
