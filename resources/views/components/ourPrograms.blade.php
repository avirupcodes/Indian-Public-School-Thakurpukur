
{{-- Programs Section --}}
<section class="relative py-16 px-4 overflow-hidden bg-center bg-cover bg-fixed" style="background-image: url('{{ asset('gallery/class-room3.webp') }}')">
    {{-- Background Overlay --}}
    <div class="absolute inset-0 bg-amber-900/90 z-0 pointer-events-none"></div>
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-64 h-64 bg-blue-300 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-purple-300 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto relative z-10">
        {{-- Desktop View - Hidden on mobile --}}
        <div class="hidden md:block max-w-6xl mx-auto relative">
            {{-- Curved Wave Background --}}
            <div class="absolute inset-0 flex items-center justify-center">
                <svg class="w-full h-auto" viewBox="0 0 1200 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 50 200 Q 300 50, 600 200 T 1150 200" 
                          stroke="rgba(255, 255, 255, 0.2)" 
                          stroke-width="3" 
                          fill="none"
                          stroke-dasharray="10,10"/>
                </svg>
            </div>

            <div class="flex items-center justify-center gap-8 relative">
                {{-- Left Side - Giggling Grads --}}
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="relative group">
                        <div class="w-40 h-40 rounded-full border-4 border-white p-1 bg-white shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                            <img src="{{ asset('gallery/ukg-ips.avif') }}" 
                                 alt="Giggling Grads" 
                                 class="w-full h-full rounded-full object-cover">
                        </div>
                        {{-- Decorative stars --}}
                        <div class="absolute -left-4 top-1/2 text-white text-2xl">✨</div>
                    </div>
                    <div class="text-center mt-4">
                        <h3 class="text-white font-bold text-lg">Giggling Grads</h3>
                        <p class="text-blue-200 text-sm">(Nursery to UKG)</p>
                        <button class="mt-2 text-white text-sm underline hover:text-blue-200 transition-colors">
                            Know More
                        </button>
                    </div>
                </div>

                {{-- Center Top - Rainbow Dazzlers --}}
                <div class="flex flex-col items-center -mt-20" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                    <div class="text-center mb-4">
                        <h3 class="text-white font-bold text-lg">Rainbow Dazzlers</h3>
                        <p class="text-blue-200 text-sm">(I to V)</p>
                        <button class="mt-2 text-white text-sm underline hover:text-blue-200 transition-colors">
                            Know More
                        </button>
                    </div>
                    <div class="relative group">
                        <div class="w-32 h-32 rounded-full border-4 border-white p-1 bg-white shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                            <img src="{{ asset('gallery/std-5.avif') }}" 
                                 alt="Rainbow Dazzlers" 
                                 class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                </div>

                {{-- Center Bottom - Idea Igniters --}}
                <div class="flex flex-col items-center mt-20" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="relative group">
                        <div class="w-32 h-32 rounded-full border-4 border-white p-1 bg-white shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                            <img src="{{ asset('gallery/std-8.avif') }}" 
                                 alt="Idea Igniters" 
                                 class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <h3 class="text-white font-bold text-lg">Idea Igniters</h3>
                        <p class="text-blue-200 text-sm">(VI to VIII)</p>
                        <button class="mt-2 text-white text-sm underline hover:text-blue-200 transition-colors">
                            Know More
                        </button>
                    </div>
                </div>

                {{-- Right Side - Invincible --}}
                <div class="flex flex-col items-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="600">
                    <div class="text-center mb-4">
                        <h3 class="text-white font-bold text-lg">Invincible</h3>
                        <p class="text-blue-200 text-sm">(IX to XII)</p>
                        <button class="mt-2 text-white text-sm underline hover:text-blue-200 transition-colors">
                            Know More
                        </button>
                    </div>
                    <div class="relative group">
                        <div class="w-40 h-40 rounded-full border-4 border-white p-1 bg-white shadow-2xl transform transition-transform duration-300 group-hover:scale-105">
                            <img src="{{ asset('gallery/class-12.avif') }}" 
                                 alt="Invincible" 
                                 class="w-full h-full rounded-full object-cover">
                        </div>
                        {{-- Decorative stars --}}
                        <div class="absolute -right-4 top-1/2 text-white text-2xl">✨</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mobile View - Visible only on mobile --}}
        <div class="md:hidden flex flex-col items-center space-y-8 max-w-sm mx-auto">
            {{-- Giggling Grads --}}
            <div class="flex items-center gap-6 w-full" data-aos="fade-right" data-aos-duration="800">
                <div class="relative flex-shrink-0">
                    <div class="w-28 h-28 rounded-full border-4 border-white p-1 bg-white shadow-xl">
                        <img src="{{ asset('gallery/ukg-ips.avif') }}" 
                             alt="Giggling Grads" 
                             class="w-full h-full rounded-full object-cover">
                    </div>
                </div>
                <div class="text-left">
                    <h3 class="text-white font-bold text-base">Giggling Grads</h3>
                    <p class="text-blue-200 text-xs">(Nursery to UKG)</p>
                    <button class="mt-1 text-white text-xs underline hover:text-blue-200 transition-colors">
                        Know More
                    </button>
                </div>
            </div>

            {{-- Rainbow Dazzlers --}}
            <div class="flex items-center gap-6 w-full justify-end" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="text-right">
                    <h3 class="text-white font-bold text-base">Rainbow Dazzlers</h3>
                    <p class="text-blue-200 text-xs">(I to V)</p>
                    <button class="mt-1 text-white text-xs underline hover:text-blue-200 transition-colors">
                        Know More
                    </button>
                </div>
                <div class="relative flex-shrink-0">
                    <div class="w-28 h-28 rounded-full border-4 border-white p-1 bg-white shadow-xl">
                        <img src="{{ asset('gallery/std-5.avif') }}" 
                             alt="Rainbow Dazzlers" 
                             class="w-full h-full rounded-full object-cover">
                    </div>
                </div>
            </div>

            {{-- Idea Igniters --}}
            <div class="flex items-center gap-6 w-full" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
                <div class="relative flex-shrink-0">
                    <div class="w-28 h-28 rounded-full border-4 border-white p-1 bg-white shadow-xl">
                        <img src="{{ asset('gallery/std-8.avif') }}" 
                             alt="Idea Igniters" 
                             class="w-full h-full rounded-full object-cover">
                    </div>
                </div>
                <div class="text-left">
                    <h3 class="text-white font-bold text-base">Idea Igniters</h3>
                    <p class="text-blue-200 text-xs">(VI to VIII)</p>
                    <button class="mt-1 text-white text-xs underline hover:text-blue-200 transition-colors">
                        Know More
                    </button>
                </div>
            </div>

            {{-- Invincible --}}
            <div class="flex items-center gap-6 w-full justify-end" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                <div class="text-right">
                    <h3 class="text-white font-bold text-base">Invincible</h3>
                    <p class="text-blue-200 text-xs">(IX to XII)</p>
                    <button class="mt-1 text-white text-xs underline hover:text-blue-200 transition-colors">
                        Know More
                    </button>
                </div>
                <div class="relative flex-shrink-0">
                    <div class="w-28 h-28 rounded-full border-4 border-white p-1 bg-white shadow-xl">
                        <img src="{{ asset('gallery/class-12.avif') }}" 
                             alt="Invincible" 
                             class="w-full h-full rounded-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>