<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnsweredQuiz extends Model
{
	protected $fillable = ['game_id', 'quiz_id', 'key_id', 'user_id'];
    //
}
