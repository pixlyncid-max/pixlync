<?php

namespace App\Http\Controllers;

use App\Models\ServiceSetting;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display the services page.
     */
    public function index()
    {
        $services = \App\Models\Service::orderBy('id')->get();

        $process = [
            ['number' => '01', 'label' => 'Discovery',  'title' => 'The Deep Dive',   'description' => 'We audit your current state, identify bottlenecks, and map the competitive landscape to find your unique leverage.'],
            ['number' => '02', 'label' => 'Blueprint',  'title' => 'Architecting',    'description' => 'Our team develops the technical and visual blueprints, ensuring every pixel and line of code serves a strategic purpose.'],
            ['number' => '03', 'label' => 'Execution',  'title' => 'The Build',       'description' => 'Agile development cycles with frequent deployments. We build in the open, maintaining constant transparency and speed.'],
            ['number' => '04', 'label' => 'Dominance',  'title' => 'Launch',          'description' => 'Post-launch optimization and scaling strategies to ensure your digital artefact continues to perform and grow.'],
        ];

        $techStack = ['React', 'TypeScript', 'Node.js', 'Framer Motion', 'Docker', 'Laravel', 'Figma', 'PostgreSQL'];

        $settings = ServiceSetting::getSingleton();

        return view('services.index', compact('services', 'process', 'techStack', 'settings'));
    }
}
