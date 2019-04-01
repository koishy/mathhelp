<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('articles/index');
    }

    public function article($id)
    {
        return view('articles/article', [
            'current' => $id,
            'article' => \App\Article::findOrFail($id)
        ]);
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:5',
            'values' => 'numeric|min:1|max:50',
            'formula' => 'required'
        ]);
        
        $article = \App\Article::findOrFail($id);

        $article->title = request('title');
        $article->content = request('content');
        $article->values = request('values');
        $article->formula = request('formula');

        $article->save();

        return redirect('/articles/'.$id);
    }

    public function delete($id)
    {
        $article = \App\Article::findOrFail($id);
        $article->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        return view('articles/edit', [
            'article' => \App\Article::findOrFail($id)
        ]);        
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:5',
            'values' => 'numeric|min:1|max:50',
            'formula' => 'required'
        ]);

        $article = \App\Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'values' => request('values'),
            'formula' => request('formula')
        ]);

        return redirect('articles/'.$article->id);
    }

    public function create()
    {
        return view('articles/create');
    }
}
