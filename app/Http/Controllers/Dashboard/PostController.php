<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $title = 'List Articles';
        $posts = Post::with('user')->get();

        return view('dashboard.pages.posts.index', compact('posts', 'title'));
    }

    public function create()
    {
        $title = 'Create Article';
        $categories = Categories::all()->pluck('name', 'id');

        return view('dashboard.pages.posts.create', compact('title', 'categories'));
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/thumbnails');
            $thumbnail->move($destinationPath, $thumbnailName);
            $validated['thumbnail'] = $thumbnailName;
        }

        Post::create($validated);

        return redirect()->route('post.index')->with('success', 'Post created successfully');
    }

    public function show(Post $post)
    {
    }

    public function edit(Post $post)
    {
        $title = 'Edit Article';
        $categories = Categories::all()->pluck('name', 'id');

        return view('dashboard.pages.posts.edit', compact('post', 'title', 'categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $validated = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time(). '.'. $thumbnail->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/thumbnails');
            $thumbnail->move($destinationPath, $thumbnailName);
            $validated['thumbnail'] = $thumbnailName;

            Storage::delete($destinationPath.$post->thumbnail);
        }

        $post->update($validated);

        return redirect()->route('post.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {

    }
}
