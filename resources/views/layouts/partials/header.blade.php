<header class="sticky top-0 w-full z-50 bg-background border-b-4 border-outline shadow-neo">
    <nav class="flex justify-between items-center px-6 md:px-12 py-4 w-full max-w-[1440px] mx-auto">

        <a href="{{ route('home') }}" class="block shrink-0" aria-label="PIXLYNC.ID — Home">
            <img src="{{ asset('images/main-logo.png') }}" alt="PIXLYNC.ID" class="w-40 md:w-56 h-auto" />
        </a>

        {{-- Desktop Navigation --}}
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'text-secondary font-bold underline decoration-4 text-xl' : 'text-on-background font-medium text-xl' }} hover:text-secondary transition-colors nav-link">Home</a>
            <a href="{{ route('work') }}"
                class="{{ request()->routeIs('work') ? 'text-secondary font-bold underline decoration-4 text-xl' : 'text-on-background font-medium text-xl' }} hover:text-secondary transition-colors nav-link">Work</a>
            <a href="{{ route('services') }}"
                class="{{ request()->routeIs('services') ? 'text-secondary font-bold underline decoration-4 text-xl' : 'text-on-background font-medium text-xl' }} hover:text-secondary transition-colors nav-link">Services</a>
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-secondary font-bold underline decoration-4 text-xl' : 'text-on-background font-medium text-xl' }} hover:text-secondary transition-colors nav-link">About</a>
            <a href="{{ route('blog') }}"
                class="{{ request()->routeIs('blog') ? 'text-secondary font-bold underline decoration-4 text-xl' : 'text-on-background font-medium text-xl' }} hover:text-secondary transition-colors nav-link">Blog</a>
        </div>

        {{-- CTA Button --}}
        <a href="mailto:hello@pixlync.id" id="nav-cta"
            class="hidden md:flex items-center justify-center bg-secondary text-on-secondary border-4 border-outline px-6 py-3 font-mono font-bold uppercase text-sm md:text-base neo-shadow neo-shadow-hover transition-all text-center">
            START YOUR PROJECT
        </a>

        {{-- Mobile Hamburger --}}
        <button
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden'); document.getElementById('mobile-menu').classList.toggle('flex');"
            class="md:hidden flex flex-col gap-1.5 p-2" aria-label="Open mobile menu">
            <span class="w-6 h-0.5 bg-on-background block transition-all"></span>
            <span class="w-6 h-0.5 bg-on-background block transition-all"></span>
            <span class="w-6 h-0.5 bg-on-background block transition-all"></span>
        </button>
    </nav>

    {{-- Mobile Menu Dropdown --}}
    <div id="mobile-menu"
        class="hidden md:hidden flex-col gap-4 px-mobile pb-6 border-t-4 border-outline bg-background">
        <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') ? 'text-secondary font-bold' : 'font-medium text-on-background' }} hover:text-secondary py-2 border-b border-outline-variant">Beranda</a>
        <a href="{{ route('work') }}"
            class="{{ request()->routeIs('work') ? 'text-secondary font-bold' : 'font-medium text-on-background' }} hover:text-secondary py-2 border-b border-outline-variant">Work</a>
        <a href="{{ route('services') }}"
            class="{{ request()->routeIs('services') ? 'text-secondary font-bold' : 'font-medium text-on-background' }} hover:text-secondary py-2 border-b border-outline-variant">Services</a>
        <a href="{{ route('about') }}"
            class="{{ request()->routeIs('about') ? 'text-secondary font-bold' : 'font-medium text-on-background' }} hover:text-secondary py-2 border-b border-outline-variant">About</a>
        <a href="{{ route('blog') }}"
            class="{{ request()->routeIs('blog') ? 'text-secondary font-bold' : 'font-medium text-on-background' }} hover:text-secondary py-2 border-b border-outline-variant">Blog</a>
        <a href="#faq"
            class="font-medium text-on-background hover:text-secondary py-2 border-b border-outline-variant">FAQ</a>
        <a href="mailto:hello@pixlync.id"
            class="mt-4 bg-secondary text-on-secondary border-4 border-outline px-4 py-3 font-mono font-bold uppercase text-sm neo-shadow transition-all text-center w-full block">START
            YOUR PROJECT</a>
    </div>
</header>