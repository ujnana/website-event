<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('website.pages.login.index');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }

        return back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

}
