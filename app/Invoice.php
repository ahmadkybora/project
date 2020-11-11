<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['e_id', 'code', 'date', 'time', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class,'e_id','id');
    }
}
