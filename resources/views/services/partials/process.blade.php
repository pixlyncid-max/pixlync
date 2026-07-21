{{-- Services Page — How We Work / Process Section --}}
<section class="px-mobile md:px-desktop py-24 md:py-32" aria-labelledby="process-heading">

    {{-- Section Header --}}
    <div class="mb-24 reveal">
        <h2 id="process-heading" class="font-display text-5xl md:text-6xl text-primary uppercase mb-4 font-black leading-tight">{{ $settings->process_heading ?? 'The Protocol' }}</h2>
        <p class="font-body text-on-background/60 max-w-2xl text-lg md:text-xl leading-relaxed">
            {{ $settings->process_description ?? 'Efficiency is our baseline. Our methodology is built for speed, precision, and architectural integrity.' }}
        </p>
    </div>

    {{-- Process Steps --}}
    <div class="relative grid grid-cols-1 md:grid-cols-4 gap-6 mt-16">

        {{-- Horizontal connector line (desktop only) --}}
        <div class="hidden md:block absolute top-[-24px] left-0 w-full h-1 bg-outline/30 z-0" aria-hidden="true"></div>

        @foreach ($process as $step)
        <article class="relative bg-background p-8 border-4 border-outline rounded-3xl neo-shadow reveal" style="transition-delay: {{ $loop->index * 100 }}ms">

            {{-- Step Number Badge --}}
            <div
                class="absolute -top-6 left-8 w-12 h-12 bg-secondary text-on-secondary font-mono font-bold flex items-center justify-center border-4 border-outline rounded-full text-sm"
                aria-label="Step {{ $step['number'] }}"
            >
                {{ $step['number'] }}
            </div>

            <h4 class="font-mono font-bold text-secondary uppercase mb-2 mt-4 text-sm tracking-widest">{{ $step['label'] }}</h4>
            <h3 class="font-display text-2xl md:text-3xl text-primary uppercase mb-4 leading-none font-black">{{ $step['title'] }}</h3>
            <p class="font-body text-on-background/60 text-base leading-relaxed">{{ $step['description'] }}</p>

        </article>
        @endforeach

    </div>
</section>
