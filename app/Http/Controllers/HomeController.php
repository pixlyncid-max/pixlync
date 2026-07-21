<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the homepage / landing page.
     */
    public function index()
    {
        $services = \App\Models\Service::all();
        $portfolios = \App\Models\Portfolio::take(6)->get();

        return view('home.index', compact('services', 'portfolios'));
    }
}
