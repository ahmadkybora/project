<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillLIst extends Model
{
    protected $table = "skill_lists";
    protected $fillable = ['name'];
}
