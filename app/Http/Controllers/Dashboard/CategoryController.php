<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Category Articles';
        $categories = Categories::all();

        return view('dashboard.pages.categories.index', compact('categories', 'title'));
    }

    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    public function store(Request $request)
    {
    }

    public function show(Categories $categories)
    {
    }

    public function edit(Categories $categories)
    {
        return view('dashboard.pages.categories.edit', compact('categories'));
    }

    public function update(Request $request, Categories $categories)
    {
    }

    public function destroy(Categories $categories)
    {
    }
}
