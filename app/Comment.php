<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['e_id', 'w_id', 'date', 'time', 'status', 'comment'];

    public function user()
    {
        return $this->hasOne(User::class,"id","e_id");
    }
}
