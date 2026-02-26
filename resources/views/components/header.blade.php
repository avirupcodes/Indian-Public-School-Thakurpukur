<header class="fixed top-0 left-0 right-0 bg-white z-50 border-b">
    <div class="mx-auto px-3 py-1">
        <div class="flex items-center justify-between h-24">

            <!-- LOGO -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('gallery/indian-public-school-new-logo.png') }}" class="w-18 lg:w-24">
                <div class="font-bold leading-tight">
                    <div class="uppercase text-lg text-amber-900">Indian Public School</div>
                    <div class="text-sm text-amber-900">CBSE (10+2)</div>
                    <div class="text-lg text-blue-800">Thakurpukur</div>
                </div>
            </div>

            <!-- DESKTOP MENU -->
            <nav
                class="hidden lg:flex lg:flex-nowrap items-center font-semibold text-gray-800 text-[14px]
                       gap-5 xl:gap-6 2xl:gap-7">

                <a href="/" class="nav-item hover:text-amber-900">Home</a>

                <!-- ABOUT US -->
                <div class="relative group flex items-center">
                    <a class="nav-item cursor-pointer hover:text-amber-900">About Us</a>
                    <div class="absolute left-0 top-full h-3 w-full"></div>

                    <div class="absolute left-0 top-full mt-3 w-52 bg-white border shadow-xl rounded-md
                                opacity-0 invisible pointer-events-none
                                translate-y-3 scale-95
                                transition-all duration-300 ease-out
                                group-hover:opacity-100 group-hover:visible
                                group-hover:pointer-events-auto
                                group-hover:translate-y-0 group-hover:scale-100">
                        <a href="{{ url('about-us') }}" class="block px-4 py-2 hover:bg-amber-50">About School</a>
                        <a class="block px-4 py-2 hover:bg-amber-50">Chairman’s Message</a>
                        <a class="block px-4 py-2 hover:bg-amber-50">Principal’s Desk</a>
                    </div>
                </div>

                <!-- ADMISSION -->
                <div class="relative group flex items-center">
                    <a class="nav-item cursor-pointer hover:text-amber-900">Admission</a>
                    <div class="absolute left-0 top-full h-3 w-full"></div>

                    <div class="absolute left-0 top-full mt-3 w-52 bg-white border shadow-xl rounded-md
                                opacity-0 invisible pointer-events-none
                                translate-y-3 scale-95
                                transition-all duration-300 ease-out
                                group-hover:opacity-100 group-hover:visible
                                group-hover:pointer-events-auto
                                group-hover:translate-y-0 group-hover:scale-100">
                        <a href="{{ url('admission-process') }}" class="block px-4 py-2 hover:bg-amber-50">Admission Process</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Fee Structure</a>
                        <a href="{{ url('admission') }}" class="block px-4 py-2 hover:bg-amber-50">Apply Online</a>
                    </div>
                </div>

                <a href="{{ url('facilities') }}" class="nav-item hover:text-amber-900">Facilities</a>

                <!-- ACADEMICS -->
                <div class="relative group flex items-center">
                    <a class="nav-item cursor-pointer hover:text-amber-900">Academics</a>
                    <div class="absolute left-0 top-full h-3 w-full"></div>

                    <div class="absolute left-0 top-full mt-3 w-52 bg-white border shadow-xl rounded-md
                                opacity-0 invisible pointer-events-none
                                translate-y-3 scale-95
                                transition-all duration-300 ease-out
                                group-hover:opacity-100 group-hover:visible
                                group-hover:pointer-events-auto
                                group-hover:translate-y-0 group-hover:scale-100">
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Curriculum</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Faculty</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Result</a>
                    </div>
                </div>

                <a href="{{ url('our-gallery') }}" class="nav-item hover:text-amber-900">Gallery</a>

                <!-- BEYOND CLASSROOM -->
                <div class="relative group flex items-center">
                    <a class="nav-item cursor-pointer hover:text-amber-900">Beyond Classroom</a>
                    <div class="absolute left-0 top-full h-3 w-full"></div>

                    <div class="absolute left-0 top-full mt-3 w-64 bg-white border shadow-xl rounded-md
                                opacity-0 invisible pointer-events-none
                                translate-y-3 scale-95
                                transition-all duration-300 ease-out
                                group-hover:opacity-100 group-hover:visible
                                group-hover:pointer-events-auto
                                group-hover:translate-y-0 group-hover:scale-100">
                        <a href="{{ url('co-curricular-activities') }}" class="block px-4 py-2 hover:bg-amber-50">Co-Curricular Activities</a>
                        <a href="{{ url('scholastic-activities') }}" class="block px-4 py-2 hover:bg-amber-50">Scholastic Activities</a>
                        <a href="{{ url('/') }}" class="block px-4 py-2 hover:bg-amber-50">Co-Scholastic Activities</a>
                        <a href="{{ url('sports-arena') }}" class="block px-4 py-2 hover:bg-amber-50">Sports Arena</a>
                        <a href="{{ url('scout-and-ncc') }}" class="block px-4 py-2 hover:bg-amber-50">Scout & NCC</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Studio & Clubs</a>
                        <a href="{{ url('events-and-celebrations') }}" class="block px-4 py-2 hover:bg-amber-50">Events & Celebrations</a>
                        <a href="#" class="block px-4 py-2 hover:bg-amber-50">Tours & Excursions</a>
                    </div>
                </div>

                <a href="#" class="nav-item hover:text-amber-900">Testimonial</a>
                <a href="{{ url('notice-board') }}" class="nav-item hover:text-amber-900">Notice Board</a>
                <a href="{{ url('contact-us') }}" class="nav-item hover:text-amber-900">Contact</a>
            </nav>

            <!-- HAMBURGER -->
            <button id="menuBtn" class="lg:hidden">
                <div class="space-y-1.5">
                    <span class="block w-8 h-0.5 bg-amber-900"></span>
                    <span class="block w-8 h-0.5 bg-amber-900"></span>
                    <span class="block w-8 h-0.5 bg-amber-900"></span>
                </div>
            </button>

        </div>
    </div>
</header>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>

<!-- Sidebar -->
<div id="sidebar"
    class="fixed top-0 right-0 h-full w-[85%] bg-white z-50 translate-x-full transition-transform duration-300 shadow-xl">

    <div class="p-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-amber-900">Menu</h2>
            <button id="closeBtn" class="text-3xl">&times;</button>
        </div>

        <nav class="space-y-4 font-medium text-gray-800 flex flex-col">

            <a href="/" class="block">Home</a>

            <div>
                <button class="toggleSub w-full text-left">About Us</button>
                <div class="toggleSub hidden pl-4 mt-2 space-y-2 flex flex-col">
                    <a href="{{ url('about-us') }}">About School</a>
                    <a>Chairman’s Message</a>
                    <a>Principal’s Desk</a>
                </div>
            </div>

            <div>
                <button class="toggleSub w-full text-left">Admission</button>
                <div class="toggleSub hidden pl-4 mt-2 space-y-2 flex flex-col">
                    <a href="{{ url('admission') }}">Admission Process</a>
                    <a>Fee Structure</a>
                    <a>Apply Online</a>
                </div>
            </div>

            <a href="{{ url('facilities') }}">Facilities</a>

            <div>
                <button class="toggleSub w-full text-left">Academics</button>
                <div class="toggleSub hidden pl-4 mt-2 space-y-2 flex flex-col">
                    <a>Curriculum</a>
                    <a>Faculty</a>
                    <a>Result</a>
                </div>
            </div>

            <a href="{{ url('our-gallery') }}">Gallery</a>
            <div>
                <button class="toggleSub w-full text-left">Beyond Classroom</button>
                <div class="toggleSub hidden pl-4 mt-2 space-y-2 flex flex-col">
                    <a href="{{ url('co-curricular-activities') }}">Co-Curricular Activites</a>
                    <a href="{{ url('scholatstic-activities') }}">Scholastic Activities</a>
                    <a>Co-Scholastic Activities</a>
                    <a href="{{ url('sports-arena') }}">Sports Arena</a>
                    <a href="{{ url('scout-and-ncc') }}">Scout & NCC</a>
                    <a href="{{ url('studio-and-club') }}">Studio & Clubs</a>
                    <a href="{{ url('events-and-celebration') }}">Evetns & Celebrations</a>
                    <a href="tours-and-excurtions">Tours & Excursions</a>
                </div>
            </div>
            <a href="#">Testimonial</a>
            <a href="{{ url('notice-board') }}">Notice Board</a>
            <a href="{{ url('contact-us') }}">Contact</a>
        </nav>
    </div>
</div>
