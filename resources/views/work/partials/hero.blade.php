{{-- Work Page — Hero Header --}}
<header class="mb-20 max-w-4xl" aria-labelledby="work-page-heading">
    <h1 id="work-page-heading" class="font-display text-5xl md:text-7xl lg:text-8xl text-primary leading-none mb-8 uppercase">
        {!! $settings->hero_heading_line1 ?? 'SELECTED' !!} <br/>
        <span class="bg-secondary-container text-primary px-4 py-1 border-4 border-outline inline-block -rotate-2">
            {{ $settings->hero_heading_badge ?? 'ARTEFACTS' }}
        </span>
    </h1>
    <p class="font-body text-on-background/60 max-w-2xl text-lg md:text-xl leading-relaxed">
        {{ $settings->hero_description ?? 'A collection of digital solutions where architectural precision meets creative disruption. From scalable mobile ecosystems to avant-garde brand identities.' }}
    </p>
</header>
