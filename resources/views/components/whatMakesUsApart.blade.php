{{-- Distinctive Features Section --}}
<section class="py-12 md:py-16 bg-center bg-cover bg-fixed"
    style="background-image: url('{{ asset('gallery/bg02.webp') }}')">

    <div class="container mx-auto px-4">

        {{-- Heading --}}
        <div class="text-center mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2">
                <span class="text-gray-800">What Makes </span>
                <span class="text-orange-500">The Indian Public School</span>
            </h2>
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-2">
                <span class="text-orange-500">Thakurpukur</span>
            </h3>
            <p class="text-lg md:text-xl lg:text-2xl font-semibold text-amber-900">
                Distinctive?
            </p>
        </div>

        {{-- ================= MOBILE VIEW ================= --}}
        <div class="md:hidden flex flex-col items-center">

            {{-- Center Circle --}}
            <div
                class="w-56 h-56 rounded-full bg-gradient-to-br from-amber-800 to-amber-900 flex items-center justify-center shadow-lg mb-8">
                <div class="text-center text-white px-6">
                    <p class="text-xl font-serif italic mb-1">Unique</p>
                    <p class="text-xl font-serif italic mb-1">features of</p>
                    <p class="text-sm font-bold mb-1">The Indian Public</p>
                    <p class="text-sm font-bold">School</p>
                </div>
            </div>

            {{-- Feature Grid --}}
            <div class="w-full max-w-md px-4">

                {{-- Row 1 --}}
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/ips-home-banner2.webp') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            International Standard<br>Infrastructure
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/digital-classroom.jpg') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            Digital Classroom
                        </p>
                    </div>
                </div>

                {{-- Row 2 --}}
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/painting.avif') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            STEM Based Curriculum
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/lab-image.jpg') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            Well Equipped Science Labs
                        </p>
                    </div>
                </div>

                {{-- Row 3 --}}
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/career.avif') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            Career Counselling &<br>Placement
                        </p>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/sports-arena.jpeg') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            Sports Arena
                        </p>
                    </div>
                </div>

                {{-- Row 4 --}}
                <div class="flex justify-center">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden shadow-md mb-2">
                            <img src="{{ asset('gallery/school-park1.jpg') }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">
                            Kids Park
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- ================= DESKTOP VIEW ================= --}}
        <div class="hidden md:flex justify-center items-center relative mx-auto"
            style="max-width: 900px; height: 550px;">

            {{-- Center Circle --}}
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
                w-[420px] h-[420px] rounded-full flex items-center justify-center shadow-2xl z-10 bg-cover bg-center"
                style="background-image: url('{{ asset('gallery/class-room4.webp') }}');">

                <div
                    class="absolute inset-0 bg-gradient-to-br from-amber-800/70 to-amber-900/70 rounded-full"></div>

                <div class="relative text-center text-white px-8">
                    <p class="text-3xl font-serif italic mb-1">Unique</p>
                    <p class="text-3xl font-serif italic mb-2">features of</p>
                    <p class="text-lg font-bold mb-1">The Indian Public</p>
                    <p class="text-lg font-bold">School</p>
                </div>
            </div>

            {{-- Feature Items --}}
            <div class="relative w-full h-full">

                @php
                    $features = [
                        ['top:3%;left:8%', 'ips_home_banner2.webp', 'International Standard<br>Infrastructure'],
                        ['top:5%;right:8%', 'school-park1.jpg', 'Kids Park'],
                        ['top:37%;left:1%', 'digital-classroom.jpg', 'Digital Classroom'],
                        ['top:32%;right:1%', 'sports-arena.jpeg', 'Sports Arena'],
                        ['bottom:3%;left:8%', 'painting.avif', 'STEM Based Curriculum'],
                        ['bottom:-25%;left:50%;transform:translateX(-50%)', 'lab-image.jpg', 'Well Equipped Science Labs'],
                        ['bottom:3%;right:8%', 'career.avif', 'Career Counselling &<br>Placement'],
                    ];
                @endphp

                @foreach($features as $item)
                <div class="absolute" style="{{ $item[0] }}">
                    <div class="flex flex-col items-center text-center" style="width:160px;">
                        <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg mb-3">
                            <img src="{{ asset('gallery/'.$item[1]) }}"
                                class="w-full h-full object-cover">
                        </div>
                        <p class="text-xs font-semibold text-gray-700">{!! $item[2] !!}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
