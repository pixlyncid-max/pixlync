<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- SEO Meta --}}
    <title>@yield('title', config('app.name', 'PIXLYNC.ID'))</title>
    <meta name="description" content="@yield('description', 'PIXLYNC.ID — A collective of digital architects, designers, and strategists. We engineer elite digital experiences that drive growth.')" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700;800&family=JetBrains+Mono:wght@500;700&family=Archivo+Narrow:wght@400;500;600&display=swap" rel="stylesheet" />

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet" />

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="bg-background text-on-background font-body overflow-x-hidden">

    {{-- Header / Navigation --}}
    @include('layouts.partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
