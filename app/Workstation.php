<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workstation extends Model
{
    protected $fillable = ['worker_id', 'station_id', 'date', 'time', 'status'];

    public function UWorker()
    {
        return $this->hasOne(User::class,"id","w_id");
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
