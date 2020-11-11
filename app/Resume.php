<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable=['u_id','name','projectSite','side','cooperationDate','certificateFile'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
