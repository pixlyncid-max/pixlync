@extends('layouts.app')

@section('title', 'PIXLYNC.ID — Building Digital Experiences That Drive Growth')
@section('description', 'PIXLYNC.ID is a collective of digital architects, designers, and strategists. We engineer elite digital artefacts that blend structural integrity with creative disruption.')

@section('content')

    {{-- 1. Hero --}}
    @include('home.partials.hero')

    {{-- 2. Trust Bar Marquee --}}
    @include('home.partials.trust-bar')

    {{-- 3. About --}}
    @include('home.partials.about')

    {{-- 4. Services --}}
    @include('home.partials.services')

    {{-- 5. Portfolio / Work --}}
    @include('home.partials.portfolio')

    {{-- 6. Final CTA --}}
    @include('home.partials.cta')

@endsection
