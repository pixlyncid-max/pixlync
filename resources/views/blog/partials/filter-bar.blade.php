{{-- Blog — Filter & Search Bar --}}
<section class="px-mobile md:px-desktop py-8 border-t-4 border-outline bg-surface-container" aria-label="Filter and search blog posts">

    <div class="flex flex-col md:flex-row justify-between items-center gap-6">

        {{-- Category Filter Pills --}}
        <div class="flex flex-wrap gap-3" role="group" aria-label="Filter by category">
            @foreach ($categories as $category)
                @php
                    $slug   = $category === 'All Stories' ? 'all' : strtolower($category);
                    $active = $activeCategory === $slug;
                @endphp
                <a
                    href="{{ route('blog', $slug !== 'all' ? ['category' => $slug] : []) }}"
                    class="filter-pill font-mono font-bold px-6 py-2 rounded-full border-2 border-outline uppercase text-sm transition-colors
                        {{ $active
                            ? 'bg-primary text-on-primary'
                            : 'bg-transparent text-primary hover:bg-primary hover:text-on-primary' }}"
                    aria-current="{{ $active ? 'page' : 'false' }}"
                >
                    {{ $category }}
                </a>
            @endforeach
        </div>

        {{-- Search Input --}}
        <div class="relative w-full md:w-96">
            <label for="blog-search" class="sr-only">Search blog artefacts</label>
            <input
                id="blog-search"
                type="text"
                placeholder="SEARCH ARTEFACTS..."
                class="w-full bg-background border-4 border-outline p-4 pl-12 font-mono font-bold uppercase text-sm focus:ring-0 focus:bg-secondary-container/10 focus:shadow-neo transition-all"
            />
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary text-xl" aria-hidden="true">search</span>
        </div>

    </div>
</section>
