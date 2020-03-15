<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizAnswerKeyController extends Controller
{
    public function index()
    {
        return QuizAnswerKey::all();
    }
 
    public function show($id)
    {
        return QuizAnswerKey::find($id);
    }

    public function store(Request $request)
    {
        return QuizAnswerKey::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = QuizAnswerKey::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = QuizAnswerKey::findOrFail($id);
        $article->delete();

        return 204;
    }
}
