<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery | Indian Public School Thakurpukur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 font-[Cinzel]">

@include('components.header')
 @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')


<!-- ================= GALLERY HEADER ================= -->
<section class="relative bg-amber-900 mt-20 h-auto lg:h-[350px]" style="clip-path: ellipse(70% 50% at 50% 36%);">
    <div class="absolute inset-0">
        <img src="{{ asset('gallery/class-room2.webp') }}" class="w-full h-full object-cover opacity-25 object-center">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-14 pt-14 lg:pt-30 text-center text-white">
        <h1 class="text-4xl font-bold">Gallery</h1>
        <p class="mt-2 text-sm tracking-wide">Home / Gallery</p>
    </div>
</section>

<!-- ================= YEAR FILTER ================= -->
<section class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex justify-center gap-4 mb-10">
        <button class="px-6 py-2 text-sm font-semibold bg-yellow-500 text-black border border-yellow-500">
            2025
        </button>
        <!-- <button class="px-6 py-2 text-sm font-semibold border border-gray-300 text-gray-700 hover:bg-gray-100">
            2024
        </button> -->
    </div>

    <!-- ================= GALLERY GRID ================= -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- CARD 1 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/quiz1.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Inter House Quiz Competition – Junior Team
                </h3>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/quiz2.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Inter House Quiz Competition – Senior Team
                </h3>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/ptm.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    PTM and Diwali Mela
                </h3>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/prediwali.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Pre Diwali Craft Activities (Classes 6 onwards)
                </h3>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/beyond-classroom-images/football-win.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Sports Activities (Class 5)
                </h3>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/beyond-classroom-images/tennis.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Sports Activities (Classes 11)
                </h3>
            </div>
        </div>

        <!-- CARD 7 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/beyond-classroom-images/ips-yoga.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Co-curricula Activities
                </h3>
            </div>
        </div>

        <!-- CARD 8 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/agomoni-utsav.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Agomoni Utsav Celebration
                </h3>
            </div>
        </div>

        <!-- CARD 9 -->
        <div class="group relative overflow-hidden rounded shadow bg-white">
            <img src="{{ asset('gallery/new-images/durga-puja.png') }}"
                 class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">

            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

            <div class="absolute bottom-0 w-full p-4 bg-black/70">
                <h3 class="text-white text-sm font-semibold">
                    Durga Puja Special Craft Activities
                </h3>
            </div>
        </div>

    </div>
</section>

@include('components.footer')

@vite('resources/js/app.js')

</body>
</html>
