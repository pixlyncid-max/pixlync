{{-- Services Page — Services Grid --}}
<section class="px-mobile md:px-desktop py-16 bg-surface-container" aria-labelledby="services-grid-heading">

    <h2 id="services-grid-heading" class="sr-only">Our Services</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 lg:gap-16">

        @foreach ($services as $service)

            {{-- ── FEATURED variant (dark primary background) ──────── --}}
            @if ($service->variant === 'featured')
            <article
                class="bg-primary text-on-primary border-4 border-outline p-8 rounded-3xl neo-shadow neo-shadow-hover transition-all flex flex-col h-full lg:translate-y-8 reveal"
                id="service-{{ $service->id }}"
            >
                <div class="w-16 h-16 {{ $service->icon_bg }} rounded-xl border-2 border-outline flex items-center justify-center mb-6" aria-hidden="true">
                    <span class="material-symbols-outlined text-primary text-3xl">{{ $service->icon }}</span>
                </div>
                <h3 class="font-display text-2xl uppercase mb-4 text-secondary-container font-black">{{ $service->title }}</h3>
                <p class="font-body text-on-primary/70 mb-8 flex-grow text-base leading-relaxed">{{ $service->description }}</p>
                <ul class="space-y-3 mb-8" aria-label="Features">
                    @foreach ($service->features as $feature)
                    <li class="flex items-center gap-2 font-mono font-bold text-sm uppercase">
                        <span class="material-symbols-outlined text-secondary-container text-xl" aria-hidden="true">check_circle</span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full py-4 border-2 border-secondary-container text-secondary-container font-mono font-bold hover:bg-secondary-container hover:text-primary transition-colors uppercase text-sm rounded-lg">
                    {{ $service->cta_label }}
                </button>
            </article>

            {{-- ── ACCENT variant (green background) ──────────────── --}}
            @elseif ($service->variant === 'accent')
            <article
                class="bg-secondary-container text-primary border-4 border-outline p-8 rounded-3xl neo-shadow neo-shadow-hover transition-all flex flex-col h-full reveal"
                id="service-{{ $service->id }}"
            >
                <div class="w-16 h-16 {{ $service->icon_bg }} rounded-xl border-2 border-outline flex items-center justify-center mb-6" aria-hidden="true">
                    <span class="material-symbols-outlined text-on-primary text-3xl">{{ $service->icon }}</span>
                </div>
                <h3 class="font-display text-2xl uppercase mb-4 font-black">{{ $service->title }}</h3>
                <p class="font-body text-primary/80 mb-8 flex-grow text-base leading-relaxed">{{ $service->description }}</p>
                <ul class="space-y-3 mb-8" aria-label="Features">
                    @foreach ($service->features as $feature)
                    <li class="flex items-center gap-2 font-mono font-bold text-sm uppercase">
                        <span class="material-symbols-outlined text-primary text-xl" aria-hidden="true">check_circle</span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full py-4 border-2 border-primary font-mono font-bold hover:bg-primary hover:text-on-primary transition-colors uppercase text-sm rounded-lg">
                    {{ $service->cta_label }}
                </button>
            </article>

            {{-- ── OFFSET variant (slightly shifted on desktop) ──────── --}}
            @elseif ($service->variant === 'offset')
            <article
                class="bg-background border-4 border-outline p-8 rounded-3xl neo-shadow neo-shadow-hover transition-all flex flex-col h-full lg:-translate-y-8 reveal"
                id="service-{{ $service->id }}"
            >
                <div class="w-16 h-16 {{ $service->icon_bg }} rounded-xl border-2 border-outline flex items-center justify-center mb-6" aria-hidden="true">
                    <span class="material-symbols-outlined text-primary text-3xl">{{ $service->icon }}</span>
                </div>
                <h3 class="font-display text-2xl uppercase mb-4 font-black">{{ $service->title }}</h3>
                <p class="font-body text-on-background/60 mb-8 flex-grow text-base leading-relaxed">{{ $service->description }}</p>
                <ul class="space-y-3 mb-8" aria-label="Features">
                    @foreach ($service->features as $feature)
                    <li class="flex items-center gap-2 font-mono font-bold text-sm uppercase">
                        <span class="material-symbols-outlined text-secondary text-xl" aria-hidden="true">check_circle</span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full py-4 border-2 border-outline font-mono font-bold hover:bg-primary hover:text-on-primary transition-colors uppercase text-sm rounded-lg">
                    {{ $service->cta_label }}
                </button>
            </article>

            {{-- ── DEFAULT variant (cream/white background) ────────── --}}
            @else
            <article
                class="bg-background border-4 border-outline p-8 rounded-3xl neo-shadow neo-shadow-hover transition-all flex flex-col h-full reveal"
                id="service-{{ $service->id }}"
            >
                <div class="w-16 h-16 {{ $service->icon_bg }} rounded-xl border-2 border-outline flex items-center justify-center mb-6" aria-hidden="true">
                    <span class="material-symbols-outlined text-primary text-3xl">{{ $service->icon }}</span>
                </div>
                <h3 class="font-display text-2xl uppercase mb-4 font-black">{{ $service->title }}</h3>
                <p class="font-body text-on-background/60 mb-8 flex-grow text-base leading-relaxed">{{ $service->description }}</p>
                <ul class="space-y-3 mb-8" aria-label="Features">
                    @foreach ($service->features as $feature)
                    <li class="flex items-center gap-2 font-mono font-bold text-sm uppercase">
                        <span class="material-symbols-outlined text-secondary text-xl" aria-hidden="true">check_circle</span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
                <button class="w-full py-4 border-2 border-outline font-mono font-bold hover:bg-primary hover:text-on-primary transition-colors uppercase text-sm rounded-lg">
                    {{ $service->cta_label }}
                </button>
            </article>
            @endif

        @endforeach

    </div>
</section>
