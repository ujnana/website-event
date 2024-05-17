<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function index()
    {
        $title = 'About';

        return view('website.pages.about.index', compact('title'));
    }
}
