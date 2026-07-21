@extends('layouts.app')

@section('title', 'Services | PIXLYNC.ID — Digital Artefacts That Scale')
@section('description', 'Explore PIXLYNC.ID\'s full suite of digital services: web & mobile development, UI/UX design, digital marketing, SEO, and cloud solutions.')

@section('content')

    {{-- 1. Hero --}}
    @include('services.partials.hero')

    {{-- 2. Services Cards Grid --}}
    @include('services.partials.services-grid')

    {{-- 3. Tech Stack Marquee --}}
    @include('services.partials.tech-marquee')

    {{-- 4. How We Work (Process) --}}
    @include('services.partials.process')

    {{-- 5. CTA --}}
    @include('services.partials.cta')

@endsection
