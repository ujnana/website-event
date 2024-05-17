<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partnership;

class DashboardUserController extends Controller
{
    public function index()
    {
        $partnershipCount = Partnership::where('user_id', auth()->user()->id)->count();
        $partnerships = Partnership::where('user_id', auth()->user()->id)->get();

        return view('dashboard.user-index', compact('partnershipCount', 'partnerships'));
    }
}
