{{-- Hero Section --}}
<section class="relative px-mobile md:px-desktop py-24 md:py-40 flex flex-col md:flex-row items-center gap-12 overflow-hidden min-h-[80vh]" aria-label="Hero">

    {{-- Hero Text Content --}}
    <div class="w-full md:w-3/5 z-20">
        <h1 class="font-display text-4xl md:text-7xl lg:text-8xl text-primary uppercase mb-6 reveal active leading-tight">
            Building
            <span class="bg-secondary px-4 inline-block text-on-secondary">Digital</span>
            Experiences That Drive Growth
        </h1>
        <p class="font-body text-primary max-w-2xl mb-10 text-lg md:text-xl reveal active" style="transition-delay: 100ms">
            We architect elite digital artefacts that blend structural integrity with creative disruption.
            Transform your brand's presence with our premium neo-brutalist approach to strategy and design.
        </p>
        <div class="flex flex-wrap gap-6 reveal active" style="transition-delay: 200ms">
            <a
                href="mailto:hello@pixlync.id"
                id="hero-cta-primary"
                class="bg-primary text-on-primary border-4 border-outline px-8 py-5 font-mono font-bold uppercase text-lg neo-shadow neo-shadow-hover inline-block"
            >
                Get Started
            </a>
            <a
                href="{{ route('work') }}"
                id="hero-cta-secondary"
                class="bg-background text-primary border-4 border-outline px-8 py-5 font-mono font-bold uppercase text-lg neo-shadow neo-shadow-hover inline-flex items-center"
            >
                Our Works
            </a>
        </div>
    </div>

    {{-- Geometric Floating Shapes --}}
    <div class="w-full md:w-2/5 relative h-[400px] md:h-[600px] z-10" aria-hidden="true">
        <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/80 border-4 border-outline rounded-xl floating" style="animation-delay: 0s;"></div>
        <div class="absolute bottom-10 left-0 w-48 h-48 bg-primary/20 border-4 border-outline rounded-full floating" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 border-4 border-outline rounded-3xl rotate-12 flex items-center justify-center overflow-hidden">
            <div class="w-full h-full bg-secondary-container opacity-50 absolute"></div>
            <span class="material-symbols-outlined text-outline text-[120px] relative z-10">architecture</span>
        </div>
        <div class="absolute top-20 left-10 w-24 h-24 bg-primary/40 border-4 border-outline rounded-lg floating opacity-50" style="animation-duration: 7s; animation-delay: 0.5s;"></div>
        <div class="absolute bottom-20 right-1/4 w-32 h-32 bg-secondary border-4 border-outline rounded-full floating opacity-30" style="animation-duration: 5s; animation-delay: 1.5s;"></div>
    </div>

</section>
