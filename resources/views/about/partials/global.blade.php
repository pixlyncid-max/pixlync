{{-- About — Global Reach & Stats Section --}}
<section class="px-mobile md:px-desktop py-24 bg-primary text-on-primary" aria-labelledby="global-heading">

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">

        {{-- Left: Stats --}}
        <div class="md:col-span-5 reveal">
            <h2 id="global-heading" class="font-display text-5xl md:text-6xl uppercase mb-8 leading-tight font-black">
                {{ $settings->global_heading1 ?? 'A Borderless' }} <br/>
                <span class="text-tertiary-fixed">{{ $settings->global_heading2 ?? 'Collective' }}</span>
            </h2>
            <p class="font-body text-on-primary/70 mb-12 text-lg leading-relaxed">
                {{ $settings->global_description ?? 'While our roots are in the digital ether, our impact is physical and global. We partner with visionaries across 4 continents to reshape the web.' }}
            </p>

            <div class="space-y-8">
                @foreach ($stats as $stat)
                <div class="flex items-end gap-4">
                    <span class="font-display text-7xl md:text-8xl leading-none text-secondary-container font-black">
                        {{ $stat['value'] }}
                    </span>
                    <span class="font-mono font-bold mb-2 uppercase text-sm tracking-widest text-on-primary/70">
                        {{ $stat['label'] }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Right: Map / Location Visual --}}
        <div class="md:col-span-7 reveal" style="transition-delay: 200ms">
            <div
                id="global-map-card"
                class="w-full aspect-[16/10] bg-primary-container border-4 border-secondary-container/50 rounded-[32px] p-4 neo-shadow relative overflow-hidden transition-transform duration-300"
                aria-label="Global offices map"
            >
                <div class="w-full h-full border border-on-primary/10 rounded-2xl flex items-center justify-center flex-col gap-4">
                    <span class="material-symbols-outlined text-secondary-container" style="font-size: 100px; font-variation-settings: 'FILL' 1;" aria-hidden="true">public</span>
                    <p class="font-mono font-bold text-on-primary uppercase text-sm tracking-widest">Map Data Synchronized</p>
                    <p class="font-mono text-on-primary/50 text-xs tracking-widest uppercase">
                        @foreach ($offices as $i => $office)
                            {{ $office }}{{ !$loop->last ? ' • ' : '' }}
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
