<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class ArticlesPageController extends Controller
{
    public function index()
    {
        $title = 'Articles';
        $articles = \App\Models\Post::orderBy('id', 'desc')->get();

        return view('website.pages.articles.index', compact('title', 'articles'));
    }

    public function detail($id)
    {
        $article = \App\Models\Post::find($id);
        $articles = \App\Models\Post::orderBy('id', 'desc')->take(4)->get();
        $title = $article->title;

        return view('website.pages.articles.detail', compact('article', 'articles', 'title'));
    }
}
