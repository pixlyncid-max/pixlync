{{-- Blog — Posts Grid & Pagination --}}
<section class="px-mobile md:px-desktop py-16" aria-labelledby="blog-grid-heading">

    <h2 id="blog-grid-heading" class="sr-only">All Blog Posts</h2>

    {{-- Posts Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach ($posts as $post)
        <article
            class="bg-background border-4 border-outline rounded-3xl flex flex-col h-full neo-shadow neo-shadow-hover transition-all overflow-hidden reveal post-card"
            data-category="{{ strtolower($post->category) }}"
            style="transition-delay: {{ $loop->index * 80 }}ms"
            aria-label="{{ $post->title }}"
        >
            {{-- Card Image --}}
            <div class="relative h-64 border-b-4 border-outline overflow-hidden">
                <div
                    class="w-full h-full bg-cover bg-center transition-transform duration-500 hover:scale-105"
                    style="background-image: url('{{ $post->image }}')"
                    role="img"
                    aria-label="{{ $post->title }} cover image"
                ></div>
                {{-- Category Badge --}}
                <div class="absolute bottom-4 right-4">
                    <span class="bg-primary text-on-primary font-mono font-bold text-xs px-3 py-1 uppercase rounded">
                        {{ $post->category }}
                    </span>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="p-8 flex flex-col flex-grow">
                {{-- Meta --}}
                <div class="flex justify-between items-center mb-4 font-mono font-bold text-xs text-on-background/50 uppercase">
                    <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                    <span>{{ $post->read_time }}</span>
                </div>

                {{-- Title --}}
                <h3 class="font-display text-2xl text-primary mb-4 leading-tight font-black uppercase">
                    {{ $post->title }}
                </h3>

                {{-- Excerpt --}}
                <p class="font-body text-on-background/60 mb-8 line-clamp-3 text-base leading-relaxed flex-grow">
                    {{ $post->excerpt }}
                </p>

                {{-- Read More --}}
                <div class="mt-auto pt-6 border-t-2 border-outline/20 flex justify-end">
                    <a
                        href="{{ route('blog') }}"
                        class="flex items-center gap-2 font-mono font-bold text-secondary hover:underline group text-sm uppercase"
                        aria-label="Read more: {{ $post->title }}"
                    >
                        READ MORE
                        <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1" aria-hidden="true">arrow_forward</span>
                    </a>
                </div>
            </div>

        </article>
        @endforeach

    </div>

    {{-- Pagination --}}
    <nav class="mt-20 flex justify-center items-center gap-3" aria-label="Blog pagination">
        <button class="w-12 h-12 flex items-center justify-center border-2 border-outline rounded-lg hover:bg-primary hover:text-on-primary transition-all" aria-label="Previous page">
            <span class="material-symbols-outlined text-xl" aria-hidden="true">chevron_left</span>
        </button>

        @foreach ([1, 2, 3] as $page)
        <button
            class="w-12 h-12 flex items-center justify-center border-2 border-outline rounded-lg font-mono font-bold text-sm
                {{ $page === 1 ? 'bg-primary text-on-primary' : 'hover:bg-primary/10' }}"
            aria-label="Page {{ $page }}"
            aria-current="{{ $page === 1 ? 'page' : 'false' }}"
        >
            {{ $page }}
        </button>
        @endforeach

        <span class="font-mono font-bold text-on-background/40" aria-hidden="true">...</span>

        <button class="w-12 h-12 flex items-center justify-center border-2 border-outline rounded-lg font-mono font-bold text-sm hover:bg-primary/10" aria-label="Page 12">
            12
        </button>
        <button class="w-12 h-12 flex items-center justify-center border-2 border-outline rounded-lg hover:bg-primary hover:text-on-primary transition-all" aria-label="Next page">
            <span class="material-symbols-outlined text-xl" aria-hidden="true">chevron_right</span>
        </button>
    </nav>

</section>
