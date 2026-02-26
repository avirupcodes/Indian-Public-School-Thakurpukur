<section class="relative bg-[#DB9956] py-20 overflow-hidden">

    <!-- Background diagonal shapes -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="w-full h-full bg-gradient-to-br from-transparent to-amber-900 rotate-6"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        <!-- LEFT CONTENT -->
        <div class="text-white space-y-6" data-aos="fade-right">

            <!-- Small Heading -->
            <p class="tracking-widest font-semibold text-amber-900 flex items-center gap-2">
                <span class="w-6 h-[2px] bg-amber-900 inline-block"></span>
                WHY CHOOSE US
            </p>

            <!-- Main Heading -->
            <h2 class="text-4xl md:text-5xl font-bold leading-tight">
                We Are Committed &  
                <span class="text-amber-900">Do Our Best</span>  
                For Your Child’s Future
            </h2>

            <!-- Sub Text -->
            <p class="text-gray-300 max-w-lg">
                At Indian Public School Thakurpukur, we focus on academic excellence, 
                strong values, and all-round development to ensure every child grows 
                confidently and successfully.
            </p>

            <!-- FEATURE BOXES -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">

                <!-- Box 1 -->
                <div class="bg-white text-[#0A1A2F] rounded-2xl shadow-xl p-6 flex gap-4">
                    <div class="bg-amber-900 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Expert Teachers</h3>
                        <p class="text-sm text-gray-600">Experienced & dedicated educators.</p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="bg-white text-[#0A1A2F] rounded-2xl shadow-xl p-6 flex gap-4">
                    <div class="bg-amber-900 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Rich Study Material</h3>
                        <p class="text-sm text-gray-600">High-quality learning resources.</p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="bg-white text-[#0A1A2F] rounded-2xl shadow-xl p-6 flex gap-4">
                    <div class="bg-amber-900 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Smart Classes</h3>
                        <p class="text-sm text-gray-600">Modern, digital learning environment.</p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="bg-white text-[#0A1A2F] rounded-2xl shadow-xl p-6 flex gap-4">
                    <div class="bg-amber-900 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg">Affordable Fees</h3>
                        <p class="text-sm text-gray-600">Quality education at the right cost.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative w-full flex justify-center" data-aos="fade-left">

            <div class="relative w-[90%] md:w-[85%] rounded-[40px] overflow-hidden">
                
                <!-- Curved amber outer border -->
                <div class="absolute inset-0 rounded-[40px] border-[6px] border-amber-900 z-10"></div>

                <!-- Main Image -->
                <img src="{{ asset('gallery/class-room1.webp') }}"
                     class="w-full h-full object-cover rounded-[40px]">

            </div>

        </div>
    </div>
</section>
