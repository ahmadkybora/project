<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    protected $fillable = ['u_id', 'name', 'date', 'origanizer', 'certificateFile'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
