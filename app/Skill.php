<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['w_id', 'sl_id', 'level'];

    public function worker()
    {
        return $this->hasMany(Worker::class, 'w_id');
    }

    public function skill_list()
    {
        return $this->hasOne(SkillLIst::class,'id', 'sl_id');
    }
}
