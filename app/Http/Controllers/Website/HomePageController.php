<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        $articles = \App\Models\Post::take(4)->get();

        return view('website.pages.home.index', compact('articles'));
    }
}
