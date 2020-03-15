<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RunningQuizController extends Controller
{
    public function index()
    {
        return RunningQuiz::all();
    }
 
    public function show($id)
    {
        return RunningQuiz::find($id);
    }

    public function store(Request $request)
    {
        return RunningQuiz::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = RunningQuiz::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = RunningQuiz::findOrFail($id);
        $article->delete();

        return 204;
    }
}
