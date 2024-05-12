<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $userCount = User::count();
        $articleCount = Post::count();

        return view('dashboard.index', compact('title', 'userCount', 'articleCount'));
    }
}
