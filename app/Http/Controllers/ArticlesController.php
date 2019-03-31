<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = \App\Article::all();

        return view('articles/index', [
            'articles' => $articles
        ]);
    }

    public function article($id)
    {
        return view('articles/article', [
            'article' => \App\Article::find($id),
            'articles' => \App\Article::all()
        ]);
    }

    public function create()
    {
        return view('articles/create', [
            'articles' => \App\Article::all()
        ]);
    }
}
