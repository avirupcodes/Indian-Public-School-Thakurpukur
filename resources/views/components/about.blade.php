<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- LEFT AND RIGHT IMAGES LAYOUT -->
<div class="relative flex flex-col lg:flex-row md:flex-row gap-8">
    
    <!-- LEFT COLUMN -->
    <div class="relative flex flex-col gap-6">
        
        <!-- Top Left Image -->
        <div class="relative z-10 w-[280px]">
            <img src="{{ asset('gallery/school-3d-model.webp') }}" 
                 class="w-full h-[380px] object-cover rounded-tl-[120px] rounded-br-[120px] shadow-2xl" 
                 alt="Student studying">
        </div>

        <!-- 30 Years Badge (Below the image) -->
        <div class="relative z-20 bg-gradient-to-r from-amber-700 to-amber-900 text-white pl-8 pr-12 py-6 rounded-r-full shadow-2xl -ml-4 w-[280px]">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-graduation-cap text-3xl text-amber-900"></i>
                </div>
                <div>
                    <p class="font-bold text-xl leading-tight">30 Years Of</p>
                    <p class="text-base font-medium opacity-90">Quality Service</p>
                </div>
            </div>
        </div>

    </div>

    <!-- RIGHT COLUMN -->
    <div class="relative flex flex-col gap-6 pt-12">
        
        <!-- Top Right Circular Image with Dashed Border -->
        <div class="relative w-[240px] h-[240px] mx-auto">
            <!-- Outer dashed border circle -->
            <div class="absolute inset-0 rounded-full border-[3px] border-dashed border-amber-900"></div>
            <!-- Inner solid circle with image -->
            <div class="absolute inset-4 rounded-full overflow-hidden border-[6px] border-white shadow-xl">
                <img src="{{ asset('gallery/class-room4.webp') }}" 
                     class="w-full h-full object-cover object-left" 
                     alt="Group discussion">
            </div>
        </div>

        <!-- Bottom Right Image -->
        <div class="relative z-10 w-[280px]">
            <img src="{{ asset('gallery/class-room3.webp') }}" 
                 class="w-full h-[340px] object-cover rounded-tr-[100px] rounded-bl-[100px] shadow-2xl object-right" 
                 alt="Students learning">
        </div>

    </div>

</div>

            <!-- RIGHT CONTENT -->
            <div class="space-y-6">

                <!-- Title -->
                <div>
                    <p class="text-amber-900 font-semibold flex items-center space-x-2 tracking-wider uppercase text-sm mb-4">
                        <i class="fa-solid fa-school"></i>
                        <span>ABOUT US</span>
                    </p>

                    <h2 class="text-5xl font-black leading-tight text-gray-900">
                        Our Education System
                        <br>
                        <span class="text-amber-900">Inspires</span> You More.
                    </h2>

                    <p class="text-gray-600 mt-6 leading-relaxed">
                        At Indian Public School, Thakurpukur, we believe in nurturing future leaders 
                        through value-based learning, modern classrooms, and dedicated educators. 
                        Our mission is to inspire excellence and build strong academic foundations.
                    </p>
                </div>

                <!-- Service Cards -->
                <div class="space-y-6 pt-4">
                    
                    <!-- Edukation Services -->
                    <div class="flex items-start space-x-4 service-card">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-800 to-amber-900 flex items-center justify-center text-white text-2xl flex-shrink-0 shadow-lg">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2">Holistic Learning</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                We focus on academics, values, sports, and creativity to develop well-rounded individuals.
                            </p>
                        </div>
                    </div>

                    <!-- International Hubs -->
                    <div class="flex items-start space-x-4 service-card">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-800 to-amber-900 flex items-center justify-center text-white text-2xl flex-shrink-0 shadow-lg">
                            <i class="fa-solid fa-earth-asia"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl text-gray-900 mb-2">Modern Facilities</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Smart classrooms, labs, library, and activity zones for comprehensive learning.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Quote Box -->
                <div class="relative bg-amber-900 p-8 rounded-2xl mt-8">
                    <p class="text-white leading-relaxed mb-4">
                        "A great education shapes not just future careers but future citizens who contribute meaningfully to society."
                    </p>
                    <div class="absolute bottom-6 right-8">
                        <p class="text-white font-black text-6xl opacity-80">"</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col lg:flex-row md:flex-row items-center space-x-6 pt-6 gap-5 md:gap-0 lg:gap-0">
                    <a href="#" 
                       class="bg-gradient-to-r from-amber-700 to-amber-900 hover:from-amber-900 hover:to-amber-800 text-white px-8 py-4 rounded-full font-bold shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 uppercase text-sm tracking-wide flex items-center space-x-2">
                        <span>DISCOVER MORE</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <div class="flex items-center space-x-3">
                        <div class="w-14 h-14 rounded-full bg-gray-200 text-amber-900 flex items-center justify-center text-xl shadow-lg">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-amber-900 font-semibold text-xs uppercase">Call Now</p>
                            <p class="font-bold text-gray-900 text-lg">+91 82828 57771 / +91 82828 57772</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
