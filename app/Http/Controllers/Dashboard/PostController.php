<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'List Articles';
        $posts = Post::all();

        return view('dashboard.pages.posts.index', compact('posts', 'title'));
    }

    public function create()
    {
        $title = 'Create Article';
        $categories = Categories::all();

        return view('dashboard.pages.posts.create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
    }

    public function show(Post $post)
    {
    }

    public function edit(Post $post)
    {
        return view('dashboard.pages.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
    }

    public function destroy(Post $post)
    {
    }
}
