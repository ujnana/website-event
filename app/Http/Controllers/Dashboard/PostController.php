<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        return view('dashboard.pages.posts.create');
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
