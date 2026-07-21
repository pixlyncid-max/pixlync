{{-- Services Page — CTA Section --}}
<section class="px-mobile md:px-desktop py-24" aria-labelledby="services-cta-heading">
    <div class="bg-secondary-container border-4 border-outline rounded-[32px] neo-shadow p-12 md:p-24 text-center relative overflow-hidden reveal">

        {{-- Decorative rocket icon --}}
        <div class="absolute top-0 right-0 p-8 text-primary opacity-10 pointer-events-none select-none" aria-hidden="true">
            <span class="material-symbols-outlined text-primary" style="font-size: 300px; font-variation-settings: 'FILL' 1;">rocket_launch</span>
        </div>

        <div class="relative z-10">
            <h2 id="services-cta-heading" class="font-display text-5xl md:text-7xl text-primary uppercase leading-tight mb-8 font-black">
                Ready to <br/> Break the <br/>
                <span class="underline decoration-outline decoration-4">Internet?</span>
            </h2>

            <div class="flex flex-col md:flex-row gap-6 justify-center items-center">
                <a
                    href="mailto:hello@pixlync.id"
                    id="services-cta-btn"
                    class="bg-primary text-on-primary border-4 border-outline px-12 py-6 font-mono font-black neo-shadow neo-shadow-hover text-lg uppercase tracking-widest"
                >
                    CONSULT WITH AN EXPERT
                </a>
                <a
                    href="{{ route('work') }}"
                    class="font-mono font-bold text-primary underline decoration-2 uppercase hover:text-secondary transition-colors text-sm tracking-widest"
                >
                    View Our Portfolio
                </a>
            </div>
        </div>

    </div>
</section>
