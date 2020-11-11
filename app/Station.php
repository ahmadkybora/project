<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['title', 'lat', 'lng', 'u_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
