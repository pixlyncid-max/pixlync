{{-- Blog — Newsletter / Stay Synced Section --}}
<section class="px-mobile md:px-desktop py-24" aria-labelledby="newsletter-heading">

    <div class="bg-primary-container p-10 md:p-16 rounded-[48px] border-4 border-outline shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] flex flex-col md:flex-row gap-10 items-center reveal">

        {{-- Left: Headline --}}
        <div class="flex-1">
            <h2 id="newsletter-heading" class="font-display text-5xl md:text-6xl text-secondary-container font-black mb-6 uppercase leading-none">
                {{ $settings->newsletter_heading ?? 'Stay Synced.' }}
            </h2>
            <p class="font-body text-on-primary/70 max-w-md text-lg leading-relaxed">
                {{ $settings->newsletter_description ?? 'Get our monthly technical artefacts, strategic insights, and design breakthroughs delivered directly to your terminal.' }}
            </p>
        </div>

        {{-- Right: Form --}}
        <div class="flex-1 w-full flex flex-col gap-4">
            <form action="#" method="POST" class="flex flex-col gap-4" aria-label="Newsletter subscription form">
                @csrf
                <div>
                    <label for="newsletter-email" class="sr-only">Email address</label>
                    <input
                        id="newsletter-email"
                        name="email"
                        type="email"
                        placeholder="YOUR@EMAIL.COM"
                        required
                        class="w-full bg-background border-4 border-outline p-6 font-mono font-bold uppercase text-sm focus:ring-0 focus:shadow-neo transition-all"
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-secondary-container text-primary border-4 border-outline font-mono font-black py-5 px-12 uppercase neo-shadow neo-shadow-hover text-sm tracking-widest"
                >
                    {{ $settings->newsletter_button_text ?? 'SUBSCRIBE TO LAB NOTES' }}
                </button>
            </form>
            <p class="font-mono text-xs text-on-primary/40 uppercase text-center">No spam. Unsubscribe any time.</p>
        </div>

    </div>
</section>
