<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['w_id',  'status', 'date', 'time', 'datePay', 'timePay','qty','totalPrice'];

    public function user()
    {
        return $this->hasOne(User::class,'id','w_id');
    }
}
