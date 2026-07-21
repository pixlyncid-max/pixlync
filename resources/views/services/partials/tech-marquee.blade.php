{{-- Services Page — Tech Stack Marquee --}}
<section class="py-16 border-y-4 border-outline bg-primary overflow-hidden" aria-label="Technology stack">
    <div class="marquee-container" aria-hidden="true">
        <div class="marquee-content flex items-center gap-16 px-8">
            @foreach ($techStack as $tech)
                <span class="font-display text-4xl md:text-5xl text-secondary-container uppercase font-black whitespace-nowrap">{{ $tech }}</span>
                <span class="font-display text-4xl md:text-5xl text-on-primary uppercase font-black">/</span>
            @endforeach
            {{-- Duplicate for seamless infinite loop --}}
            @foreach ($techStack as $tech)
                <span class="font-display text-4xl md:text-5xl text-secondary-container uppercase font-black whitespace-nowrap">{{ $tech }}</span>
                <span class="font-display text-4xl md:text-5xl text-on-primary uppercase font-black">/</span>
            @endforeach
        </div>
    </div>
</section>
