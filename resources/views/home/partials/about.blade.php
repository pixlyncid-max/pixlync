{{-- About Section --}}
<section class="px-mobile md:px-desktop py-32 bg-background" id="about" aria-labelledby="about-heading">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

        {{-- About Text --}}
        <div class="reveal">
            <h2 id="about-heading" class="font-display text-5xl md:text-6xl text-primary uppercase mb-8 leading-tight">
                We are <br/>
                <span class="text-secondary">PIXLYNC.ID</span>
            </h2>
            <div class="h-4 w-40 bg-secondary mb-10" aria-hidden="true"></div>
            <p class="font-body text-primary mb-8 text-2xl">
                A collective of digital architects, designers, and strategists.
                We don't just build software; we engineer digital legacies.
            </p>
            <p class="font-body text-on-background/70 text-lg leading-relaxed">
                Our mission is to bridge the gap between complex technology and human-centric experiences,
                helping businesses navigate the digital frontier with confidence and creativity.
                Every pixel is calculated, every interaction is intentional.
            </p>
            <div class="mt-12">
                <button id="about-story-btn" class="bg-primary text-on-primary border-4 border-outline px-8 py-4 font-mono font-bold uppercase neo-shadow neo-shadow-hover">
                    Our Story
                </button>
            </div>
        </div>

        {{-- About Visual --}}
        <div class="relative reveal" style="transition-delay: 200ms" aria-hidden="true">
            <div class="aspect-square bg-surface-variant border-4 border-outline rounded-[48px] neo-shadow flex items-center justify-center overflow-hidden p-12">
                <div class="text-center">
                    <span class="material-symbols-outlined text-primary text-[160px] mb-6" style="font-size: 160px;">architecture</span>
                    <div class="font-display text-3xl text-primary uppercase font-black">Digital Architects</div>
                </div>
            </div>
        </div>

    </div>
</section>
