{{-- About — Team Section --}}
<section class="px-mobile md:px-desktop py-24" aria-labelledby="team-heading">

    <h2 id="team-heading" class="font-display text-5xl md:text-6xl text-primary uppercase mb-16 text-center font-black reveal">
        The Masterminds
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach ($team as $member)
        <article class="flex flex-col reveal {{ $member['offset'] ? 'lg:mt-12' : '' }}" style="transition-delay: {{ $loop->index * 100 }}ms">

            {{-- Photo card --}}
            <div class="w-full aspect-[4/5] border-4 border-outline rounded-3xl overflow-hidden neo-shadow mb-6 group relative">
                <img
                    src="{{ $member['image'] }}"
                    alt="Photo of {{ $member['name'] }}, {{ $member['role'] }}"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    loading="lazy"
                />
                {{-- Hover badge overlay --}}
                <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center" aria-hidden="true">
                    <div class="bg-secondary-container px-4 py-3 border-2 border-outline neo-shadow">
                        <span class="font-mono font-bold text-primary text-sm uppercase">{{ $member['badge'] }}</span>
                    </div>
                </div>
            </div>

            {{-- Info --}}
            <h3 class="font-display text-xl md:text-2xl text-primary uppercase font-black">{{ $member['name'] }}</h3>
            <p class="font-mono text-xs text-outline-variant uppercase mt-1 tracking-widest leading-relaxed">{{ $member['role'] }}</p>

        </article>
        @endforeach

    </div>
</section>
