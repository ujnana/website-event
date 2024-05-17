<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardUserController extends Controller
{
    public function index()
    {
        dd('dashboard user');
        return view('dashboard.user-index');
    }
}
