{{-- Blog — Featured Article Hero --}}
<section class="px-mobile md:px-desktop py-16 flex flex-col md:flex-row gap-6 items-stretch" aria-labelledby="featured-article-heading">

    {{-- Left: Featured Image --}}
    <div class="flex-1 border-4 border-outline rounded-xl overflow-hidden relative group neo-shadow min-h-[320px] md:min-h-[400px]">
        {{-- Dark overlay --}}
        <div class="absolute inset-0 bg-primary/20 z-10 pointer-events-none" aria-hidden="true"></div>

        {{-- Background image with zoom on hover --}}
        <div
            class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105 absolute inset-0"
            style="background-image: url('{{ $featured->image }}')"
            role="img"
            aria-label="Featured article cover image"
        ></div>

        {{-- Featured Badge --}}
        <div class="absolute top-6 left-6 z-20">
            <span class="bg-secondary-container text-primary border-2 border-outline font-mono font-bold px-4 py-1 uppercase rounded-full text-sm">
                Featured Article
            </span>
        </div>
    </div>

    {{-- Right: Article Info --}}
    <div class="flex-1 flex flex-col justify-center">

        {{-- Category + Divider --}}
        <div class="flex items-center gap-4 mb-4">
            <span class="font-mono font-bold text-secondary uppercase tracking-widest text-sm">{{ $featured->category }}</span>
            <span class="w-12 h-1 bg-primary inline-block" aria-hidden="true"></span>
        </div>

        <h1 id="featured-article-heading" class="font-display text-4xl md:text-5xl text-primary mb-6 leading-tight font-black uppercase">
            {{ $featured->title }}
        </h1>
        <p class="font-body text-on-background/60 mb-8 max-w-xl text-lg leading-relaxed">
            {{ $featured->excerpt }}
        </p>

        {{-- Meta --}}
        <div class="flex flex-wrap items-center gap-6 mb-12">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-xl" aria-hidden="true">calendar_today</span>
                <span class="font-mono font-bold text-sm uppercase">{{ $featured->published_at ? $featured->published_at->format('M d, Y') : '' }}</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-xl" aria-hidden="true">schedule</span>
                <span class="font-mono font-bold text-sm uppercase">{{ $featured->read_time }}</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-xl" aria-hidden="true">person</span>
                <span class="font-mono font-bold text-sm uppercase">By {{ $featured->author }}</span>
            </div>
        </div>

        <a
            href="{{ route('blog') }}"
            id="featured-read-btn"
            class="w-fit bg-secondary text-on-secondary border-4 border-outline font-mono font-bold px-10 py-5 uppercase neo-shadow neo-shadow-hover flex items-center gap-3 text-sm"
        >
            Read the story
            <span class="material-symbols-outlined" aria-hidden="true">arrow_right_alt</span>
        </a>
    </div>

</section>
