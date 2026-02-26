@props(['blogs'])


<section class="bg-gradient-to-br from-[#8B4513] via-[#A0522D] to-[#6B3410] py-10 md:py-16 px-6 md:px-10 relative overflow-hidden">
    
    {{-- Decorative Elements --}}
    <svg class="absolute top-12 right-24 w-20 h-20 opacity-15 stroke-yellow-400 fill-none stroke-[3] pointer-events-none" viewBox="0 0 100 100">
        <path d="M50,10 L60,40 L90,40 L65,60 L75,90 L50,70 L25,90 L35,60 L10,40 L40,40 Z" />
    </svg>
    <div class="absolute top-24 left-12 w-48 h-48 rounded-full opacity-10 bg-gradient-radial from-yellow-400/30 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10 items-start">
        
        {{-- Left Section --}}
        <div class="lg:w-[400px] text-white">
            <div class="mb-8">
                <h1 class="text-5xl md:text-6xl font-black text-yellow-400 mb-4 border-b-4 border-yellow-400 pb-4 inline-block capitalize">
                    Digital Diaries
                </h1>
                <p class="text-lg leading-relaxed mt-6 font-medium">
                    Stay updated with the latest news, announcements, and stories from our school. Discover insightful articles, trending topics, and everything you need to stay informed, inspired, and ahead of the curve.
                </p>
            </div>
            @if($showButton ?? true)
                <a href="{{ url('blog') }}" class="inline-block bg-yellow-400 text-[#8B4513] px-8 py-4 text-lg font-bold hover:bg-yellow-500 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl capitalize">
                    Know More
                </a>
            @endif
        </div>

        {{-- Blog Cards Grid --}}
<div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-8">

@forelse($blogs->take(4) as $blog)
    <div class="flip-card-container h-[260px] cursor-pointer group">
        <div class="flip-card-inner relative w-full h-full transition-transform duration-700">

            {{-- FRONT (Image Only) --}}
            <div class="absolute inset-0 rounded-lg overflow-hidden shadow-xl backface-hidden">
                <img src="{{ asset('storage/'.$blog->image) }}"
                     alt="{{ $blog->title }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
            </div>

            {{-- BACK (Content) --}}
            <div class="absolute inset-0 rounded-lg bg-gradient-to-br from-yellow-500 to-yellow-700 text-white p-6 flex flex-col justify-between backface-hidden rotate-y-180">

                <div>
                    <h3 class="text-xl font-bold mb-3 leading-tight">
                        {{ $blog->title }}
                    </h3>

                    <p class="text-sm leading-relaxed opacity-90">
                        {{ Str::limit($blog->short_description, 110) }}
                    </p>
                </div>

                <div class="mt-4">
                    <div class="text-xs opacity-80 mb-3">
                        📅 {{ $blog->created_at->format('d F, Y') }}
                    </div>

                    <a href="{{ route('blog.show', $blog->slug) }}"
                       class="inline-block bg-yellow-400 text-blue-900 px-5 py-2 text-sm font-bold rounded hover:bg-yellow-500 transition">
                        Read More
                    </a>
                </div>

            </div>

        </div>
    </div>
@empty
    <div class="col-span-full text-center text-white py-10">
        No blogs available.
    </div>
@endforelse

</div>



    </div>

</section>