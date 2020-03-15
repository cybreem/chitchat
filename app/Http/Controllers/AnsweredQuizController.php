<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnsweredQuizController extends Controller
{
    public function index()
    {
        return AnsweredQuiz::all();
    }
 
    public function show($id)
    {
        return AnsweredQuiz::find($id);
    }

    public function store(Request $request)
    {
        return AnsweredQuiz::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = AnsweredQuiz::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = AnsweredQuiz::findOrFail($id);
        $article->delete();

        return 204;
    }
}
