<div class="bg-[#2C1810] rounded-lg p-6 mb-8">
    <div class="text-xs text-amber-200 leading-relaxed">

        @foreach(config('seo_pages') as $slug => $page)
            <a href="{{ url($slug) }}"
               class="inline-block mr-2 mb-2 hover:text-white transition">

                {{ $page['heading'] }}
            </a>

            @if(!$loop->last)
                <span class="mx-1 text-amber-400">|</span>
            @endif
        @endforeach

    </div>
</div>
