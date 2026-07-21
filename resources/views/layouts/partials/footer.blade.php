<footer class="bg-primary text-on-primary w-full border-t-4 border-outline">

    {{-- Main Footer Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 px-6 md:px-12 py-24 w-full max-w-[1440px] mx-auto">

        {{-- Brand Column --}}
        <div class="md:col-span-4 mb-16 md:mb-0">
            <a href="{{ route('home') }}" aria-label="PIXLYNC.ID — Home">
                <img src="{{ asset('images/main-logo.png') }}" alt="PIXLYNC.ID" class="w-40 md:w-56 h-auto mb-6"
                    style="filter: brightness(0) invert(1);" />
            </a>
            <p class="font-body text-outline-variant max-w-xs mb-10 text-lg">
                Architecting elite digital experiences that blend structural integrity with creative disruption.
            </p>
            <div class="space-y-4 font-body text-outline-variant mb-10 text-lg">
                <p class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary">location_on</span>
                    123 Digital Way, Tech District, Jakarta
                </p>
                <p class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary">mail</span>
                    hello@pixlync.id
                </p>
                <p class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-secondary">call</span>
                    +62 21 555 0199
                </p>
            </div>
            <div class="flex gap-6">
                <a href="https://facebook.com/pixlync" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                    class="w-14 h-14 rounded-lg border-4 border-outline-variant flex items-center justify-center hover:bg-secondary hover:border-outline hover:text-primary transition-all neo-shadow-hover">
                    <span class="material-symbols-outlined text-2xl">facebook</span>
                </a>
                <a href="https://pixlync.id" target="_blank" rel="noopener noreferrer" aria-label="Website"
                    class="w-14 h-14 rounded-lg border-4 border-outline-variant flex items-center justify-center hover:bg-secondary hover:border-outline hover:text-primary transition-all neo-shadow-hover">
                    <span class="material-symbols-outlined text-2xl">language</span>
                </a>
                <a href="mailto:hello@pixlync.id" aria-label="Share"
                    class="w-14 h-14 rounded-lg border-4 border-outline-variant flex items-center justify-center hover:bg-secondary hover:border-outline hover:text-primary transition-all neo-shadow-hover">
                    <span class="material-symbols-outlined text-2xl">share</span>
                </a>
            </div>
        </div>

        {{-- Pages Links --}}
        <div class="md:col-span-2">
            <h4 class="font-display text-2xl text-on-primary uppercase mb-10 font-black">Pages</h4>
            <ul class="space-y-6 font-mono font-bold uppercase text-outline-variant text-lg">
                <li><a href="{{ route('work') }}" class="hover:text-secondary transition-colors">Work</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-secondary transition-colors">Services</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-secondary transition-colors">About</a></li>
                <li><a href="{{ route('blog') }}" class="hover:text-secondary transition-colors">Blog</a></li>
            </ul>
        </div>

        {{-- Connect Links --}}
        <div class="md:col-span-2">
            <h4 class="font-display text-2xl text-on-primary uppercase mb-10 font-black">Connect</h4>
            <ul class="space-y-6 font-mono font-bold uppercase text-outline-variant text-lg">
                <li><a href="https://instagram.com/pixlync" target="_blank" rel="noopener noreferrer"
                        class="hover:text-secondary transition-colors">Instagram</a></li>
                <li><a href="https://linkedin.com/company/pixlync" target="_blank" rel="noopener noreferrer"
                        class="hover:text-secondary transition-colors">LinkedIn</a></li>
                <li><a href="https://behance.net/pixlync" target="_blank" rel="noopener noreferrer"
                        class="hover:text-secondary transition-colors">Behance</a></li>
                <li><a href="https://dribbble.com/pixlync" target="_blank" rel="noopener noreferrer"
                        class="hover:text-secondary transition-colors">Dribbble</a></li>
            </ul>
        </div>

        {{-- Newsletter --}}
        <div class="md:col-span-4">
            <h4 class="font-display text-2xl text-on-primary uppercase mb-10 font-black">Stay Synced</h4>
            <form action="{{ route('home') }}" method="POST" id="newsletter-form">
                @csrf
                <input type="email" name="email" id="newsletter-email" placeholder="Your Email Address" required
                    class="w-full bg-primary/20 border-4 border-outline text-on-primary px-8 py-5 rounded-xl focus:outline-none focus:border-secondary transition-colors placeholder:text-outline-variant" />
                <button type="submit"
                    class="mt-6 w-full bg-secondary text-primary py-5 font-mono font-black uppercase border-4 border-outline neo-shadow neo-shadow-hover text-lg">
                    Subscribe
                </button>
            </form>
        </div>

    </div>

    {{-- Copyright Bar --}}
    <div
        class="px-mobile md:px-desktop py-10 border-t-4 border-outline/20 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="font-mono text-sm md:text-base uppercase text-outline-variant">
            &copy; {{ date('Y') }} PIXLYNC.ID DIGITAL ARTEFACTS. ALL RIGHTS RESERVED.
        </div>
        <div class="flex gap-10 font-mono text-sm md:text-base uppercase text-outline-variant">
            <a href="{{ route('home') }}" class="hover:text-on-primary transition-colors">Privacy Policy</a>
            <a href="{{ route('home') }}" class="hover:text-on-primary transition-colors">Terms of Service</a>
        </div>
    </div>

</footer>