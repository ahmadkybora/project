<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['w_id', 'e_id', 'r_id', 'i_id', 'price', 'startTime', 'endTime', 'date', 's_id', 'a_id', 'status'];

    public function worker()
    {
        return $this->hasOne(User::class, "id", "w_id");
    }

    public function request()
    {
        return $this->hasOne(Request::class,'id','r_id');
    }
}
