{{-- Work Page — CTA Section --}}
<section class="mt-32 p-12 md:p-24 bg-primary text-on-primary rounded-[40px] relative overflow-hidden flex flex-col items-center text-center reveal" aria-labelledby="work-cta-heading">

    {{-- Dot Pattern Background --}}
    <div
        class="absolute inset-0 opacity-10 pointer-events-none"
        style="background-image: radial-gradient(#8DF9A8 2px, transparent 2px); background-size: 28px 28px;"
        aria-hidden="true"
    ></div>

    <div class="relative z-10">
        <h2 id="work-cta-heading" class="font-display text-4xl md:text-6xl mb-8 leading-tight uppercase font-black">
            {!! $settings->cta_heading ?? 'READY TO BUILD <br/> THE NEXT ARTEFACT?' !!}
        </h2>
        <p class="font-body text-primary-fixed max-w-xl mx-auto mb-12 text-lg md:text-xl">
            {{ $settings->cta_description ?? "Our waitlist for new projects is now open. Let's discuss your vision and create something that lasts." }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8 font-mono font-bold text-secondary-container text-lg">
            <a href="mailto:hello@pixlync.id" class="flex items-center gap-2 hover:opacity-80 transition-opacity">
                <span class="material-symbols-outlined text-2xl" aria-hidden="true">mail</span>
                hello@pixlync.id
            </a>
        </div>
        <a
            href="mailto:hello@pixlync.id"
            id="work-cta-btn"
            class="bg-secondary-container text-primary font-mono font-black px-12 py-5 border-4 border-secondary-container neo-shadow neo-shadow-hover uppercase text-lg tracking-widest transition-all inline-block"
        >
            INQUIRE NOW
        </a>
    </div>

</section>
