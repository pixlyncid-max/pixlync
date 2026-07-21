{{-- About — Hero / Narrative Section --}}
<section class="px-mobile md:px-desktop py-32 grid grid-cols-1 lg:grid-cols-12 gap-6 items-end" aria-labelledby="about-hero-heading">

    {{-- Left: Headline --}}
    <div class="lg:col-span-8 reveal">
        <span class="font-mono font-bold text-on-primary bg-primary px-3 py-1 mb-6 inline-block text-sm tracking-widest uppercase">
            {{ $settings->hero_badge ?? 'EST. 2018' }}
        </span>
        <h1 id="about-hero-heading" class="font-display text-6xl md:text-8xl lg:text-9xl text-primary uppercase leading-tight mb-8">
            {{ $settings->hero_heading_line1 ?? 'Crafting Digital' }} <br/>
            <span class="text-secondary">{{ $settings->hero_heading_line2 ?? 'Artefacts' }}</span> {{ $settings->hero_heading_suffix ?? 'with Purpose.' }}
        </h1>
        <p class="font-body text-on-background/60 max-w-2xl text-lg md:text-xl leading-relaxed">
            {{ $settings->hero_description ?? "PIXLYNC.ID isn't just an agency; it's a digital laboratory where architecture meets code. We believe that the internet should be a collection of stable, beautiful, and unapologetically bold structures." }}
        </p>
    </div>

    {{-- Right: Decorative Card / Hero Image --}}
    <div class="lg:col-span-4 hidden lg:block reveal" style="transition-delay: 200ms" aria-hidden="true">
        <div class="w-full aspect-square border-4 border-outline rounded-xl overflow-hidden neo-shadow relative flex items-center justify-center bg-surface-variant">
            @if(!empty($settings->hero_image))
                <img src="{{ asset('storage/' . $settings->hero_image) }}" alt="About Hero" class="w-full h-full object-cover">
            @else
                <span class="material-symbols-outlined text-primary" style="font-size: 120px;">architecture</span>
            @endif
        </div>
    </div>

</section>
