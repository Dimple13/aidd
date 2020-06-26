<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stroop extends Model
{
    protected $fillable = ['user_id','score_1','score_2','score_3','score_4','score_5'];
}
