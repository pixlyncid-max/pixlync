{{-- Work Page — Projects Grid --}}
<div class="grid grid-cols-1 md:grid-cols-12 gap-8" id="projects-grid" aria-label="Project portfolio grid">

    @foreach ($projects as $project)

        {{-- ======================================
             LAYOUT: Large Featured (col-span-8)
             ====================================== --}}
        @if ($project->layout === 'large')
        <article
            class="col-span-1 md:col-span-8 bg-surface-variant border-4 border-outline rounded-3xl overflow-hidden neo-shadow group project-card reveal"
            data-filter="{{ $project->filter }}"
            aria-label="{{ $project->title }}"
        >
            {{-- Image --}}
            <div class="relative h-[400px] md:h-[600px] overflow-hidden">
                <img
                    src="{{ $project->image }}"
                    alt="{{ $project->title }} — {{ $project->category }}"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-105 group-hover:scale-100"
                    loading="lazy"
                />
                <div class="absolute top-6 left-6">
                    <span class="bg-secondary-container text-primary font-mono font-bold text-xs border-4 border-outline px-3 py-1 rounded-full uppercase">
                        {{ $project->category }}
                    </span>
                </div>
            </div>

            {{-- Card Footer --}}
            <div class="p-8 md:p-12 border-t-4 border-outline flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div>
                    <h2 class="font-display text-2xl md:text-3xl text-primary mb-3 uppercase font-black">{{ $project->title }}</h2>
                    <p class="font-body text-on-background/60 max-w-lg text-base md:text-lg leading-relaxed">{{ $project->description }}</p>
                </div>
                <a
                    href="{{ route('work') }}"
                    class="bg-secondary-container text-primary font-mono font-bold px-8 py-4 border-4 border-outline neo-shadow neo-shadow-hover whitespace-nowrap uppercase text-sm tracking-tight"
                >
                    {{ $project->cta_label }}
                </a>
            </div>
        </article>

        {{-- ======================================
             LAYOUT: Small Vertical (col-span-4)
             ====================================== --}}
        @elseif ($project->layout === 'small')
        <article
            class="col-span-1 md:col-span-4 bg-surface-variant border-4 border-outline rounded-3xl overflow-hidden neo-shadow group project-card reveal"
            data-filter="{{ $project->filter }}"
            aria-label="{{ $project->title }}"
        >
            {{-- Image --}}
            <div class="relative h-[300px] md:h-[400px] overflow-hidden">
                <img
                    src="{{ $project->image }}"
                    alt="{{ $project->title }} — {{ $project->category }}"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                    loading="lazy"
                />
                <div class="absolute top-6 left-6">
                    <span class="bg-secondary-container text-primary font-mono font-bold text-xs border-4 border-outline px-3 py-1 rounded-full uppercase">
                        {{ $project->category }}
                    </span>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="p-8 border-t-4 border-outline flex flex-col gap-4">
                <h2 class="font-display text-xl md:text-2xl text-primary uppercase font-black">{{ $project->title }}</h2>
                <p class="font-body text-on-background/60 text-base leading-snug">{{ $project->description }}</p>
                <a
                    href="{{ route('work') }}"
                    class="w-full bg-background text-primary font-mono font-bold px-6 py-4 border-4 border-outline neo-shadow neo-shadow-hover uppercase text-sm tracking-tight text-center mt-2"
                >
                    {{ $project->cta_label }}
                </a>
            </div>
        </article>

        {{-- ======================================
             LAYOUT: Wide Horizontal (col-span-8)
             ====================================== --}}
        @elseif ($project->layout === 'wide')
        <article
            class="col-span-1 md:col-span-8 bg-surface-variant border-4 border-outline rounded-3xl overflow-hidden neo-shadow group project-card reveal"
            data-filter="{{ $project->filter }}"
            aria-label="{{ $project->title }}"
        >
            <div class="flex flex-col md:flex-row h-full">
                {{-- Image (left half) --}}
                <div class="w-full md:w-1/2 relative h-[300px] md:h-full overflow-hidden border-b-4 md:border-b-0 md:border-r-4 border-outline">
                    <img
                        src="{{ $project->image }}"
                        alt="{{ $project->title }} — {{ $project->category }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                        loading="lazy"
                    />
                </div>

                {{-- Content (right half) --}}
                <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center gap-4">
                    <span class="bg-secondary-container text-primary font-mono font-bold text-xs border-4 border-outline px-3 py-1 rounded-full uppercase self-start">
                        {{ $project->category }}
                    </span>
                    <h2 class="font-display text-2xl md:text-3xl text-primary uppercase font-black">{{ $project->title }}</h2>
                    <p class="font-body text-on-background/60 text-base leading-relaxed">{{ $project->description }}</p>
                    <a
                        href="{{ route('work') }}"
                        class="bg-primary text-on-primary font-mono font-bold px-8 py-4 border-4 border-outline neo-shadow neo-shadow-hover uppercase text-sm tracking-tight self-start mt-2"
                    >
                        {{ $project->cta_label }}
                    </a>
                </div>
            </div>
        </article>
        @endif

    @endforeach

</div>
