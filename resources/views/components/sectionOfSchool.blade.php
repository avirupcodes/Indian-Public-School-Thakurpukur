<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- LEFT IMAGE -->
        <div class="relative">
            <img id="sectionImage" 
                 src="{{ asset('gallery/ips-new-junior.webp') }}" 
                 class="rounded-lg shadow-lg w-full h-auto transition-all duration-500">

            <!-- Amber Border -->
            <div class="absolute -bottom-3 -left-3 w-40 h-40 border-b-8 border-l-8 border-amber-600"></div>
        </div>

        <!-- RIGHT SECTION MENU -->
        <div class="space-y-4">

            <!-- Item -->
            <a href="#primary"
               data-img="{{ asset('gallery/ips-image5.webp') }}"
               class="flex items-center justify-between w-full bg-gray-100 hover:bg-amber-600 transition duration-300 group p-5 rounded-md shadow">
                <span class="text-xl font-semibold text-amber-700 group-hover:text-white">
                    Primary Section
                </span>
                <div class="bg-amber-700 group-hover:bg-white p-4 flex items-center justify-center">
                    <span class="text-white group-hover:text-amber-700 text-xl">›</span>
                </div>
            </a>

            <!-- Item -->
            <a href="#junior"
               data-img="{{ asset('gallery/ips-new-junior.webp') }}"
               class="flex items-center justify-between w-full bg-gray-100 hover:bg-amber-600 transition duration-300 group p-5 rounded-md shadow">
                <span class="text-xl font-semibold text-amber-700 group-hover:text-white">
                    Junior Section
                </span>
                <div class="bg-amber-700 group-hover:bg-white p-4 flex items-center justify-center">
                    <span class="text-white group-hover:text-amber-700 text-xl">›</span>
                </div>
            </a>

            <!-- Item -->
            <a href="#middle"
               data-img="{{ asset('gallery/ips-image3.webp') }}"
               class="flex items-center justify-between w-full bg-gray-100 hover:bg-amber-600 transition duration-300 group p-5 rounded-md shadow">
                <span class="text-xl font-semibold text-amber-700 group-hover:text-white">
                    Middle Section
                </span>
                <div class="bg-amber-700 group-hover:bg-white p-4 flex items-center justify-center">
                    <span class="text-white group-hover:text-amber-700 text-xl">›</span>
                </div>
            </a>

            <!-- Item -->
            <a href="#senior"
               data-img="{{ asset('gallery/ips-image4.webp') }}"
               class="flex items-center justify-between w-full bg-gray-100 hover:bg-amber-600 transition duration-300 group p-5 rounded-md shadow">
                <span class="text-xl font-semibold text-amber-700 group-hover:text-white">
                    Senior Section
                </span>
                <div class="bg-amber-700 group-hover:bg-white p-4 flex items-center justify-center">
                    <span class="text-white group-hover:text-amber-700 text-xl">›</span>
                </div>
            </a>

            <!-- Item -->
            <!-- <a href="#ib"
               data-img="{{ asset('gallery/ips-image6.webp') }}"
               class="flex items-center justify-between w-full bg-gray-100 hover:bg-amber-600 transition duration-300 group p-5 rounded-md shadow">
                <span class="text-xl font-semibold text-amber-700 group-hover:text-white">
                    IB / A Levels
                </span>
                <div class="bg-amber-700 group-hover:bg-white p-4 flex items-center justify-center">
                    <span class="text-white group-hover:text-amber-700 text-xl">›</span>
                </div>
            </a> -->

        </div>
    </div>
</section>


