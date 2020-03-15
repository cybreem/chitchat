<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{
    public function index()
    {
        return Game::all();
    }
 
    public function show($id)
    {
        return Game::find($id);
    }

    public function store(Request $request)
    {
        return Game::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Game::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Game::findOrFail($id);
        $article->delete();

        return 204;
    }

    public function start(Request $request)
    {
    	$data = Auth::guard('api')->user();
    	// dump($data);exit;
    }

    //baru
}
