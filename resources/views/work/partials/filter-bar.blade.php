{{-- Work Page — Filter Bar --}}
<div class="flex flex-wrap gap-4 mb-16 items-center" role="group" aria-label="Filter projects by category">
    <span class="font-mono font-bold text-primary uppercase mr-4 text-sm tracking-widest">Filter by:</span>

    <button
        data-filter="all"
        class="filter-btn active bg-primary text-on-primary font-mono font-bold px-5 py-2 border-4 border-outline rounded-full text-sm neo-shadow transition-all"
        aria-pressed="true"
    >
        ALL
    </button>
    <button
        data-filter="web"
        class="filter-btn bg-transparent text-primary font-mono font-bold px-5 py-2 border-2 border-outline rounded-full text-sm hover:bg-primary hover:text-on-primary transition-all neo-shadow"
        aria-pressed="false"
    >
        WEB
    </button>
    <button
        data-filter="mobile"
        class="filter-btn bg-transparent text-primary font-mono font-bold px-5 py-2 border-2 border-outline rounded-full text-sm hover:bg-primary hover:text-on-primary transition-all neo-shadow"
        aria-pressed="false"
    >
        MOBILE
    </button>
    <button
        data-filter="branding"
        class="filter-btn bg-transparent text-primary font-mono font-bold px-5 py-2 border-2 border-outline rounded-full text-sm hover:bg-primary hover:text-on-primary transition-all neo-shadow"
        aria-pressed="false"
    >
        BRANDING
    </button>
    <button
        data-filter="marketing"
        class="filter-btn bg-transparent text-primary font-mono font-bold px-5 py-2 border-2 border-outline rounded-full text-sm hover:bg-primary hover:text-on-primary transition-all neo-shadow"
        aria-pressed="false"
    >
        MARKETING
    </button>
</div>
