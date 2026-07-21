@extends('layouts.app')

@section('title', 'About Us | PIXLYNC.ID — Crafting Digital Artefacts with Purpose')
@section('description', 'Learn about PIXLYNC.ID — a digital laboratory where architecture meets code. Meet the team, our values, global reach, and open career opportunities.')

@section('content')

    {{-- 1. Hero / Narrative --}}
    @include('about.partials.hero')

    {{-- 2. Values Bento Grid --}}
    @include('about.partials.values')

    {{-- 3. The Team --}}
    @include('about.partials.team')

    {{-- 4. Global Reach & Stats --}}
    @include('about.partials.global')

    {{-- 5. Careers --}}
    @include('about.partials.careers')

@endsection

@push('scripts')
<script>
    // ── Map card 3D tilt on hover ─────────────────────────────────────
    const mapCard = document.getElementById('global-map-card');
    if (mapCard) {
        mapCard.addEventListener('mousemove', (e) => {
            const rect     = mapCard.getBoundingClientRect();
            const moveX    = ((e.clientX - rect.left) - rect.width  / 2) / 50;
            const moveY    = ((e.clientY - rect.top)  - rect.height / 2) / 50;
            mapCard.style.transform = `perspective(1000px) rotateY(${moveX}deg) rotateX(${-moveY}deg)`;
        });
        mapCard.addEventListener('mouseleave', () => {
            mapCard.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
        });
    }
</script>
@endpush
