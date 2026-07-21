{{-- About — Careers Section --}}
<section class="px-mobile md:px-desktop py-32 overflow-hidden" aria-labelledby="careers-heading">

    <div class="relative max-w-4xl">

        {{-- Decorative blur blob --}}
        <div class="absolute -right-24 -top-24 w-64 h-64 bg-secondary-container/20 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

        {{-- Section Header --}}
        <div class="reveal">
            <span class="font-mono font-bold text-secondary uppercase tracking-widest mb-4 inline-block text-sm">// CAREERS</span>
            <h2 id="careers-heading" class="font-display text-7xl md:text-9xl text-primary uppercase mb-12 font-black leading-none">
                Build the <br/> Next Artefact.
            </h2>
        </div>

        {{-- Job Listings --}}
        <div class="space-y-0">
            @foreach ($jobs as $job)
            <div class="group flex flex-col md:flex-row justify-between items-start md:items-center p-8 border-b-4 border-outline hover:bg-surface-container transition-colors duration-200 reveal" style="transition-delay: {{ $loop->index * 100 }}ms">
                <div>
                    <span class="{{ $job['badge_class'] }} font-mono font-bold text-xs px-2 py-0.5 rounded-full mb-2 inline-block uppercase">
                        {{ $job['badge'] }}
                    </span>
                    <h3 class="font-display text-2xl md:text-3xl text-primary uppercase font-black">{{ $job['title'] }}</h3>
                    <p class="font-mono text-xs text-outline-variant uppercase mt-1 tracking-widest">{{ $job['stack'] }}</p>
                </div>
                <a
                    href="mailto:careers@pixlync.id?subject=Application%20for%20{{ urlencode($job['title']) }}"
                    class="mt-4 md:mt-0 bg-primary text-on-primary font-mono font-bold px-8 py-3 neo-shadow neo-shadow-hover uppercase flex items-center gap-2 text-sm inline-flex"
                    aria-label="Apply for {{ $job['title'] }}"
                >
                    APPLY
                    <span class="material-symbols-outlined text-base" aria-hidden="true">launch</span>
                </a>
            </div>
            @endforeach
        </div>

        {{-- Open Pitch CTA --}}
        <div class="mt-16 flex flex-col md:flex-row items-center gap-8 reveal">
            <p class="font-body text-on-background/60 max-w-sm text-lg leading-relaxed">
                Don't see your role? We're always looking for rebels with a cause.
            </p>
            <a
                href="mailto:careers@pixlync.id"
                class="font-display text-3xl md:text-4xl text-primary uppercase underline decoration-4 hover:text-secondary transition-colors font-black"
            >
                Open Pitch
            </a>
        </div>

    </div>
</section>
