<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['u_id', 'job', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
