{{-- Services Page — Hero Section --}}
<section class="px-mobile md:px-desktop py-24 md:py-32 grid grid-cols-1 md:grid-cols-12 gap-6 relative overflow-hidden" aria-labelledby="services-hero-heading">

    {{-- Left: Headline --}}
    <div class="md:col-span-8 z-10">
        <span class="font-mono font-bold text-secondary uppercase mb-4 block tracking-widest text-sm">{{ $settings->hero_overline ?? 'Our Capabilities' }}</span>
        <h1 id="services-hero-heading" class="font-display text-6xl md:text-8xl lg:text-9xl text-primary uppercase leading-none mb-8">
            {{ $settings->hero_heading_line1 ?? 'Digital' }} <br/>
            <span class="italic">{{ $settings->hero_heading_line2 ?? 'Artefacts' }}</span> <br/>
            {{ $settings->hero_heading_line3 ?? 'That Scale.' }}
        </h1>
        <p class="font-body text-on-background/60 max-w-xl text-lg md:text-xl leading-relaxed">
            {{ $settings->hero_description ?? "We don't just build websites; we engineer high-performance digital environments that disrupt markets and establish brand dominance through Premium Neo-Brutalism." }}
        </p>
    </div>

    {{-- Right: Decorative Card --}}
    <div class="md:col-span-4 relative hidden md:flex items-center justify-center min-h-[300px]" aria-hidden="true">
        {{-- Rotated background layer --}}
        <div class="absolute inset-0 bg-secondary-container border-4 border-outline rounded-3xl neo-shadow rotate-3 z-0"></div>
        {{-- Front card --}}
        <div class="relative z-10 w-full h-full border-4 border-outline bg-surface rounded-3xl neo-shadow flex items-center justify-center p-8">
            <span class="material-symbols-outlined text-primary" style="font-size: 120px; font-variation-settings: 'FILL' 1;">architecture</span>
        </div>
    </div>

</section>
