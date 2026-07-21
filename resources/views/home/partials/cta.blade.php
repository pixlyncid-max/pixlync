{{-- Final CTA Section --}}
<section class="px-mobile md:px-desktop py-32" aria-labelledby="cta-heading">
    <div class="bg-primary border-4 border-outline rounded-[48px] p-12 md:p-24 text-center relative overflow-hidden reveal">

        {{-- Dot pattern background decoration --}}
        <div
            class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none"
            style="background-image: radial-gradient(#1AC64F 2px, transparent 2px); background-size: 30px 30px;"
            aria-hidden="true"
        ></div>

        <div class="relative z-10">
            <h2 id="cta-heading" class="font-display text-4xl md:text-7xl text-secondary uppercase mb-10 leading-tight font-black">
                Ready to scale <br/>your digital presence?
            </h2>
            <p class="font-body text-primary-fixed max-w-2xl mx-auto mb-12 text-xl md:text-2xl">
                Join the ranks of brands that prioritize stability, performance, and radical visual impact.
                Let's sync your vision with reality.
            </p>

            {{-- Contact Info --}}
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-16 font-mono font-bold text-secondary uppercase text-xl">
                <a href="mailto:hello@pixlync.id" class="flex items-center gap-3 justify-center hover:opacity-80 transition-opacity">
                    <span class="material-symbols-outlined text-3xl" aria-hidden="true">mail</span>
                    hello@pixlync.id
                </a>
                <a href="tel:+622155550199" class="flex items-center gap-3 justify-center hover:opacity-80 transition-opacity">
                    <span class="material-symbols-outlined text-3xl" aria-hidden="true">call</span>
                    +62 21 555 0199
                </a>
            </div>

            <a
                href="mailto:hello@pixlync.id"
                id="cta-start-project"
                class="bg-secondary text-primary border-4 border-outline px-12 py-8 font-display text-2xl md:text-4xl uppercase neo-shadow neo-shadow-hover neo-shadow-active transition-all font-black inline-block"
            >
                START YOUR PROJECT NOW
            </a>
        </div>

    </div>
</section>
