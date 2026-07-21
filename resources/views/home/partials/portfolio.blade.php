{{-- Portfolio / Work Section --}}
<section class="px-mobile md:px-desktop py-32 bg-background" id="work" aria-labelledby="work-heading">

    <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
        <div>
            <h2 id="work-heading" class="font-display text-5xl md:text-6xl text-primary uppercase reveal">Featured Works</h2>
            <p class="font-body text-on-background/70 max-w-xl mt-4 text-lg reveal">
                Exploring the intersection of architectural stability and digital fluidity.
            </p>
        </div>
        <a
            href="{{ route('work') }}"
            id="portfolio-btn"
            class="bg-primary text-on-primary border-4 border-outline px-8 py-4 font-mono font-bold uppercase neo-shadow neo-shadow-hover reveal"
        >
            View Full Portfolio
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        @forelse($portfolios as $portfolio)
            <article class="group relative block overflow-hidden rounded-3xl border-4 border-outline bg-background neo-shadow neo-shadow-hover transition-all reveal">
                <div class="aspect-[4/3] w-full overflow-hidden border-b-4 border-outline bg-primary-fixed-dim">
                    @if($portfolio->image)
                        <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" />
                    @else
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop" alt="{{ $portfolio->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter grayscale" loading="lazy" />
                    @endif
                </div>
                <div class="p-8 md:p-10">
                    <div class="flex flex-wrap items-center gap-4 mb-4">
                        <span class="bg-primary text-on-primary px-4 py-1.5 rounded-full text-sm font-mono font-bold uppercase tracking-wider">{{ $portfolio->category }}</span>
                        <span class="text-on-background/60 font-mono font-medium">{{ $portfolio->client }}</span>
                    </div>
                    <h3 class="font-display text-3xl font-black mb-4 uppercase leading-tight group-hover:text-secondary transition-colors">{{ $portfolio->title }}</h3>
                    <p class="font-body text-on-background/80 text-lg mb-8">{{ $portfolio->description }}</p>
                    <a href="{{ $portfolio->link ?? route('work') }}" class="font-mono font-bold uppercase flex items-center gap-2 group/link underline decoration-4 underline-offset-4 hover:text-secondary transition-colors" aria-label="View {{ $portfolio->title }} case study">
                        View Case Study
                        <span class="material-symbols-outlined transition-transform group-hover/link:translate-x-2" aria-hidden="true">arrow_forward</span>
                    </a>
                </div>
            </article>
        @empty
        {{-- Portfolio Item 1 — Large --}}
        <article class="md:col-span-8 group relative overflow-hidden rounded-3xl border-4 border-outline reveal h-[500px]">
            <div
                class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCOwuE7V5ZfJ3j4sDw7A9te_Rk94JGgwZzRKj8bCAxVRCfxwrau7fgXaHPrz4RW5S_bEHBiasvA2mC5BnFTL6xv8DSq5nz6A9vNsDnvjtt0rRzH1TIIeG14LymGWZg-_cA1waYcbC-7BXT9dYE4tRv9x4xKreezyWx_La5GmYwSuZ3HOQjTo_bpMV5sT0R1Mu3jFWlMZzsHgQW4K4iLPTifzrmgC4PYdVOUF1ZVSS8TKiExJdWnRfep');"
                aria-hidden="true"
            ></div>
            <div class="absolute inset-0 bg-primary/90 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-12 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                <span class="font-mono font-bold text-secondary uppercase mb-4 text-lg">Web Platform / Fintech</span>
                <h3 class="font-display text-4xl text-on-primary mb-6 uppercase font-black">Vortex E-Commerce</h3>
                <p class="text-primary-fixed-dim max-w-lg mb-8 text-lg">
                    A radical redesign of an enterprise marketplace, focusing on high-speed interactions and bold typography.
                </p>
                <a href="{{ route('work') }}" class="w-fit bg-secondary text-primary px-8 py-4 font-mono font-bold uppercase border-4 border-outline neo-shadow-hover">
                    View Case Study
                </a>
            </div>
            <div class="sr-only">
                <h3>Vortex E-Commerce — Web Platform / Fintech</h3>
            </div>
        </article>

        {{-- Portfolio Item 2 — Small --}}
        <article class="md:col-span-4 group relative overflow-hidden rounded-3xl border-4 border-outline reveal h-[500px]" style="transition-delay: 150ms">
            <div
                class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA_hf50Rje-b2SiXMeXg2Z7QwIkddFTkCZI16n7hFpzVuQ-IEPwEV7SbZTkaAuE060bTTB2o3yWhFlr5Nuskfkif1kOYhD9HdczxJo9rmyHgC-yGHi2w4of9o8V8VPRbOvEWsojSchU60r53eU7MvB6d_ZdEekbuj7Rv5MIGzrzpXC1RmIMXVNI_6vN3zeyH65hq1JOuBPVelHR6yl97QJGA_4i1TIwkiCpMEVz1u5eoktG9hQ0E9rV');"
                aria-hidden="true"
            ></div>
            <div class="absolute inset-0 bg-secondary/95 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-10 translate-y-10 group-hover:translate-y-0 transition-transform duration-500">
                <span class="font-mono font-bold text-primary uppercase mb-2">Branding</span>
                <h3 class="font-display text-3xl text-primary mb-4 uppercase font-black">Neo-Synth Identity</h3>
                <a href="{{ route('work') }}" class="w-fit bg-primary text-on-primary px-6 py-3 font-mono font-bold uppercase border-4 border-outline neo-shadow-hover">
                    View Project
                </a>
            </div>
            <div class="sr-only">
                <h3>Neo-Synth Identity — Branding</h3>
            </div>
        </article>
        @endforelse
    </div>
</section>
