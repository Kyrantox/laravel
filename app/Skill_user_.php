<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill_user_ extends Model
{
    protected $table = 'skill_user';
    protected $fillable = [
        'skill_id', 'level'
    ];
}
