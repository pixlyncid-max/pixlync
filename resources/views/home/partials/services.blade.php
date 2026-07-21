{{-- Services Section --}}
<section class="px-mobile md:px-desktop py-32 bg-background" id="services" aria-labelledby="services-heading">

    <div class="mb-20 text-center">
        <h2 id="services-heading" class="font-display text-5xl md:text-6xl text-primary uppercase reveal">Engineered Solutions</h2>
        <div class="h-2 w-32 bg-secondary mx-auto mt-6" aria-hidden="true"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @forelse($services as $service)
            <article class="bg-secondary border-4 border-outline p-10 rounded-3xl neo-shadow neo-shadow-hover transition-all reveal">
                <div class="w-20 h-20 bg-primary border-4 border-outline rounded-xl flex items-center justify-center mb-8" aria-hidden="true">
                    <span class="material-symbols-outlined text-background" style="font-size: 48px;">{{ $service->icon ?? 'code' }}</span>
                </div>
                <h3 class="font-display text-2xl text-primary mb-4 uppercase font-black">{{ $service->title }}</h3>
                <p class="font-body text-primary mb-8 text-lg">
                    {{ $service->description }}
                </p>
                <a href="{{ route('services') }}" class="font-mono font-bold text-primary uppercase flex items-center gap-2 group text-lg underline decoration-4" aria-label="{{ $service->title }} details">
                    Details
                    <span class="material-symbols-outlined transition-transform group-hover:translate-x-2" aria-hidden="true">arrow_forward</span>
                </a>
            </article>
        @empty
        <article class="bg-secondary border-4 border-outline p-10 rounded-3xl neo-shadow neo-shadow-hover transition-all reveal">
            <div class="w-20 h-20 bg-primary border-4 border-outline rounded-xl flex items-center justify-center mb-8" aria-hidden="true">
                <span class="material-symbols-outlined text-background" style="font-size: 48px;">code</span>
            </div>
            <h3 class="font-display text-2xl text-primary mb-4 uppercase font-black">Website Development</h3>
            <p class="font-body text-primary mb-8 text-lg">
                High-performance, custom-coded websites built for conversion, speed, and seamless user journeys across all devices.
            </p>
            <a href="{{ route('services') }}" class="font-mono font-bold text-primary uppercase flex items-center gap-2 group text-lg underline decoration-4" aria-label="Website Development details">
                Details
                <span class="material-symbols-outlined transition-transform group-hover:translate-x-2" aria-hidden="true">arrow_forward</span>
            </a>
        </article>

        {{-- Service Card: UI/UX Design --}}
        <article class="bg-primary border-4 border-outline p-10 rounded-3xl neo-shadow neo-shadow-hover transition-all reveal" style="transition-delay: 100ms">
            <div class="w-20 h-20 bg-secondary border-4 border-outline rounded-xl flex items-center justify-center mb-8" aria-hidden="true">
                <span class="material-symbols-outlined text-primary" style="font-size: 48px;">drawing</span>
            </div>
            <h3 class="font-display text-2xl text-on-primary mb-4 uppercase font-black">UI/UX Design</h3>
            <p class="font-body text-primary-fixed-dim mb-8 text-lg">
                Human-centric interfaces that blend radical aesthetics with intuitive functionality to create memorable interactions.
            </p>
            <a href="{{ route('services') }}" class="font-mono font-bold text-secondary uppercase flex items-center gap-2 group text-lg" aria-label="UI/UX Design details">
                Details
                <span class="material-symbols-outlined transition-transform group-hover:translate-x-2" aria-hidden="true">arrow_forward</span>
            </a>
        </article>

        {{-- Service Card: Digital Growth --}}
        <article class="bg-background border-4 border-outline p-10 rounded-3xl neo-shadow neo-shadow-hover transition-all reveal" style="transition-delay: 200ms">
            <div class="w-20 h-20 bg-primary-fixed border-4 border-outline rounded-xl flex items-center justify-center mb-8" aria-hidden="true">
                <span class="material-symbols-outlined text-primary" style="font-size: 48px;">campaign</span>
            </div>
            <h3 class="font-display text-2xl text-primary mb-4 uppercase font-black">Digital Growth</h3>
            <p class="font-body text-on-background/70 mb-8 text-lg">
                Data-driven strategies that scale brands and dominate markets through precision targeting and creative excellence.
            </p>
            <a href="{{ route('services') }}" class="font-mono font-bold text-primary uppercase flex items-center gap-2 group text-lg underline decoration-4" aria-label="Digital Growth details">
                Details
                <span class="material-symbols-outlined transition-transform group-hover:translate-x-2" aria-hidden="true">arrow_forward</span>
            </a>
        </article>

        @endforelse
    </div>
</section>
