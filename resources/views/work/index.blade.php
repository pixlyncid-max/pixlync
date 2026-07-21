@extends('layouts.app')

@section('title', 'Work | PIXLYNC.ID — Selected Digital Artefacts')
@section('description', 'Explore PIXLYNC.ID\'s portfolio of digital solutions — from scalable mobile ecosystems to avant-garde brand identities. Architecture meets creative disruption.')

@section('content')

<div class="px-mobile md:px-desktop py-12 md:py-24">

    {{-- 1. Hero Header --}}
    @include('work.partials.hero')

    {{-- 2. Filter Bar --}}
    @include('work.partials.filter-bar')

    {{-- 3. Projects Grid --}}
    @include('work.partials.projects-grid')

    {{-- 4. CTA Section --}}
    @include('work.partials.cta')

</div>

{{-- Back to Top Button --}}
<button
    id="back-to-top"
    aria-label="Back to top"
    class="fixed bottom-8 right-8 bg-surface-variant border-4 border-outline p-4 neo-shadow neo-shadow-hover z-50 opacity-0 pointer-events-none transition-opacity duration-300"
>
    <span class="material-symbols-outlined text-primary font-bold" aria-hidden="true">arrow_upward</span>
</button>

@endsection

@push('scripts')
<script>
    // ── Project Filter Logic ──────────────────────────────────────────
    const filterBtns  = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            // Update button active state
            filterBtns.forEach((b) => {
                b.classList.remove('bg-primary', 'text-on-primary');
                b.classList.add('bg-transparent', 'text-primary');
                b.setAttribute('aria-pressed', 'false');
            });
            btn.classList.add('bg-primary', 'text-on-primary');
            btn.classList.remove('bg-transparent', 'text-primary');
            btn.setAttribute('aria-pressed', 'true');

            // Show/hide cards
            projectCards.forEach((card) => {
                const match = filter === 'all' || card.dataset.filter === filter;
                card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                if (match) {
                    card.style.opacity  = '1';
                    card.style.transform = 'scale(1)';
                    card.style.display  = '';
                } else {
                    card.style.opacity  = '0';
                    card.style.transform = 'scale(0.97)';
                    setTimeout(() => {
                        if (card.dataset.filter !== filter && filter !== 'all') {
                            card.style.display = 'none';
                        }
                    }, 300);
                }
            });
        });
    });

    // ── Back to Top Button ────────────────────────────────────────────
    const backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            backToTop.classList.remove('opacity-0', 'pointer-events-none');
            backToTop.classList.add('opacity-100');
        } else {
            backToTop.classList.add('opacity-0', 'pointer-events-none');
            backToTop.classList.remove('opacity-100');
        }
    }, { passive: true });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endpush
