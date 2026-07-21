<?php

namespace App\Http\Controllers;

use App\Models\WorkSetting;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display the portfolio / work page.
     */
    public function index()
    {
        $projects = \App\Models\Project::orderBy('id')->get();

        $settings = WorkSetting::getSingleton();

        return view('work.index', compact('projects', 'settings'));
    }
}
