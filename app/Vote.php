<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "votes";
    protected $fillable = ['w_id', 'e_id', 'rate'];

    public function user()
    {
        return $this->hasOne(User::class, "u_id", "id");
    }
}
