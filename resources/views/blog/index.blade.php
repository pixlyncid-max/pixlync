@extends('layouts.app')

@section('title', 'Blog | PIXLYNC.ID — Digital Artefacts Lab')
@section('description', 'Explore PIXLYNC.ID\'s blog: engineering insights, design strategy, product deep-dives, and creative breakdowns from our digital laboratory.')

@section('content')

    {{-- 1. Featured Article Hero --}}
    @include('blog.partials.featured')

    {{-- 2. Filter & Search Bar --}}
    @include('blog.partials.filter-bar')

    {{-- 3. Posts Grid + Pagination --}}
    @include('blog.partials.posts-grid')

    {{-- 4. Newsletter --}}
    @include('blog.partials.newsletter')

@endsection

@push('scripts')
<script>
    // ── Search filtering (client-side) ────────────────────────────────
    const searchInput = document.getElementById('blog-search');
    const postCards   = document.querySelectorAll('.post-card');

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase().trim();
        postCards.forEach((card) => {
            const title   = card.querySelector('h3')?.textContent.toLowerCase() ?? '';
            const excerpt = card.querySelector('p')?.textContent.toLowerCase() ?? '';
            const match   = title.includes(query) || excerpt.includes(query);
            card.style.display = match || query === '' ? '' : 'none';
        });
    });
</script>
@endpush
