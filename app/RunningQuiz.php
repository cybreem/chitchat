<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RunningQuiz extends Model
{
    protected $fillable = ['game_id', 'quiz_id', 'status'];
    //
}
