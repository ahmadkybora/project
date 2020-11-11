<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['u_id', 'name', 'lat', 'lng', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
