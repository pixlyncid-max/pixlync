{{-- About — Values Bento Grid Section --}}
<section class="px-mobile md:px-desktop py-24 bg-surface-container-low" aria-labelledby="values-heading">

    {{-- Section Header --}}
    <div class="flex flex-col md:flex-row justify-between items-baseline mb-16 gap-4 reveal">
        <h2 id="values-heading" class="font-display text-5xl md:text-6xl text-primary uppercase font-black">Our DNA</h2>
        <div class="h-1 bg-outline/30 flex-grow mx-8 hidden md:block" aria-hidden="true"></div>
        <p class="font-mono font-bold text-primary uppercase text-sm tracking-widest">Core Values &amp; Culture</p>
    </div>

    {{-- Bento Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

        {{-- Value 1: Radical Clarity --}}
        <article class="md:col-span-4 p-8 bg-surface border-4 border-outline rounded-3xl neo-shadow hover:-translate-y-2 transition-transform duration-300 reveal">
            <div class="w-16 h-16 bg-secondary-container rounded-full flex items-center justify-center mb-6 border-2 border-outline" aria-hidden="true">
                <span class="material-symbols-outlined text-primary text-4xl">bolt</span>
            </div>
            <h3 class="font-display text-2xl mb-4 uppercase font-black">Radical Clarity</h3>
            <p class="font-body text-on-background/60 text-base leading-relaxed">
                We strip away the noise. In a world of digital clutter, we champion brutalist simplicity and functional honesty.
            </p>
        </article>

        {{-- Value 2: Technical Rigor (Featured dark card) --}}
        <article class="md:col-span-8 p-8 bg-primary text-on-primary border-4 border-outline rounded-3xl neo-shadow relative overflow-hidden reveal" style="transition-delay: 100ms">
            <div class="relative z-10">
                <div class="w-16 h-16 bg-tertiary-fixed rounded-full flex items-center justify-center mb-6 border-2 border-on-primary/30" aria-hidden="true">
                    <span class="material-symbols-outlined text-primary text-4xl">precision_manufacturing</span>
                </div>
                <h3 class="font-display text-2xl mb-4 uppercase text-secondary-container font-black">Technical Rigor</h3>
                <p class="font-body text-on-primary/70 max-w-lg text-lg leading-relaxed">
                    Every pixel is deliberate. Our code is built to last, treated with the same respect as physical load-bearing beams in high-rise architecture.
                </p>
            </div>
            {{-- Decorative background icon --}}
            <div class="absolute right-[-40px] bottom-[-40px] opacity-10 pointer-events-none" aria-hidden="true">
                <span class="material-symbols-outlined text-on-primary" style="font-size: 300px;">settings_accessibility</span>
            </div>
        </article>

        {{-- Value 3: Human-Centric Impact --}}
        <article class="md:col-span-7 p-8 bg-secondary-container border-4 border-outline rounded-3xl neo-shadow reveal" style="transition-delay: 200ms">
            <h3 class="font-display text-2xl mb-4 uppercase font-black">Human-Centric Impact</h3>
            <p class="font-body text-on-background text-lg leading-relaxed">
                Technology is a tool for the people. We design interfaces that don't just work—they resonate and empower global communities.
            </p>
        </article>

        {{-- Value 4: Continuous Lab --}}
        <article class="md:col-span-5 p-8 bg-surface border-4 border-outline rounded-3xl neo-shadow flex flex-col justify-between reveal" style="transition-delay: 300ms">
            <div>
                <h3 class="font-display text-2xl mb-4 uppercase font-black">Continuous Lab</h3>
                <p class="font-body text-on-background/60 text-base leading-relaxed">
                    The 'Lab' isn't just a tab; it's a mindset of constant experimentation and creative disruption.
                </p>
            </div>
            <div class="mt-8">
                <a href="{{ route('blog') }}" class="font-mono font-bold flex items-center gap-2 hover:gap-4 transition-all uppercase text-primary text-sm group">
                    EXPLORE OUR EXPERIMENTS
                    <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" aria-hidden="true">arrow_right_alt</span>
                </a>
            </div>
        </article>

    </div>
</section>
