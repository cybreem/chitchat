<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\QuizAnswerKey;

class QuizController extends Controller
{
    public function insert(Request $request)
    {
    	$data = $request->all();
    	$question = $data['question'];
    	$answer_key = $data['answer_key'];

    	$model_quiz = new Quiz;
    	$model_quiz->question = $question;
    	$model_quiz->status = 0;

    	if ($model_quiz->save()) {
    		$quiz_answer = [];
    		foreach ($answer_key as $key => $value) {
	    		$model_quiz_answer_key = new QuizAnswerKey;
    			$model_quiz_answer_key->quiz_id = $model_quiz->id;
    			$model_quiz_answer_key->answer = $value;
    			if($model_quiz_answer_key->save()){
    				$quiz_answer[] = $model_quiz_answer_key;
    			}
    		}
    		if (!empty($quiz_answer)) {
		        return response()->json(['message' => 'success', 'data' => ['question' => $model_quiz, 'answer' => $quiz_answer]], 201);
    		} else {
    			$model_quiz->delete();
    		}
    	}
    	return response()->json(['message' => 'Failed, unknown error'], 400);

    }

    public function activate($id = null)
    {
    	if(!empty($id)) {
    		if ($model_quiz = Quiz::find($id)) {
	    		$model_quiz->status = 1;
	    		if ($model_quiz->save()) {
			    	return response()->json(['message' => 'success'], 201);
	    		}
    		}
    	}
    	return response()->json(['message' => 'Failed, unknown error'], 400);
    }
    //test

	public function deactive()
	{
		//
	}

}
