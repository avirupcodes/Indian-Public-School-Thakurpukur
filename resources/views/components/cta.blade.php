<section class="relative w-full h-48 overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('gallery/ips_home_banner5.webp') }}" 
             alt="Indian Public School Thakurpukur"
             class="w-full h-full object-cover object-center">
        <!-- Dark gradient overlay -->
        <div class="absolute inset-0 bg-amber-200/60"></div>
    </div>

    <!-- Content -->
    <div class="relative h-full max-w-7xl mx-auto px-6 lg:px-12 flex items-center">
        <div class="w-full flex flex-col lg:flex-row items-center justify-between gap-6">
            
            <!-- Text -->
            <div class="text-center lg:text-left space-y-2 flex-1">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold leading-tight text-white">
                    Register for an Open House to explore<br class="hidden lg:block">
                    <span class="text-amber-900 font-bold">Indian Public School, Thakurpukur</span>
                </h2>
            </div>

            <!-- Button -->
            <div class="flex-shrink-0">
                <a href="{{ url('admission') }}"
                   class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-semibold text-lg px-8 py-3.5 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                    Register Now
                </a>
            </div>

        </div>
    </div>

</section>