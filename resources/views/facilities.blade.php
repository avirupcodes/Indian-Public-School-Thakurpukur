<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facilities | Indian Public School, Thakurpukur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

</head>

<body class="bg-white font-[Cinzel]">

    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')


<!-- Header -->
<section class="bg-amber-600/30 h-[350px] py-10 flex flex-col justify-center items-center text-center mt-20 bg-center" style="background-image: url('{{ asset('gallery/facilities-back.webp') }}')">
    <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wide">
        Our Facilities
    </h1>
    <p class="text-amber-100 mt-2 text-xl">
        Indian Public School, Thakurpukur
    </p>
</section>

<!-- Facilities Grid -->
<section class="max-w-6xl mx-auto mt-20">

    @php
    $facilities = [
        ['no'=>1,'title'=>'Multidisciplinary Curriculum','desc'=>'A well-balanced curriculum integrating academics, arts, sports, and life skills.','img'=>'1.png'],
        ['no'=>2,'title'=>'Digital Transformation Technology','desc'=>'Smart digital tools enhancing teaching and learning outcomes.','img'=>'2.png'],
        ['no'=>3,'title'=>'Sports & Activities','desc'=>'Structured sports programs supporting physical and mental growth.','img'=>'3.png'],
        ['no'=>4,'title'=>'Learning Made Fun','desc'=>'Activity-based learning that sparks curiosity and creativity.','img'=>'4.png'],
        ['no'=>5,'title'=>'AI Classroom','desc'=>'Modern AI-powered classrooms for next-gen education.','img'=>'5.png'],
        ['no'=>6,'title'=>'Coding Classes','desc'=>'Early exposure to programming and computational thinking.','img'=>'6.png'],
        // add more as needed
    ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-3">

        @foreach($facilities as $item)
        <div class="relative group h-[260px] md:h-[300px] overflow-hidden">

            <!-- Image -->
            <img src="{{ asset('gallery/facilities/'.$item['img']) }}"
                 class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-110 transition-transform duration-700 ease-out">

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-amber-900/40"></div>

            <!-- Serial Number -->
            <div class="absolute top-0 left-0 bg-yellow-400 text-black font-bold text-sm px-3 py-1 z-10">
                {{ $item['no'] }}
            </div>

            <!-- Text Content -->
            <div class="absolute inset-x-0 bottom-0 p-4 text-white transition-all duration-500">

                <!-- Title -->
                <h3 class="text-lg font-semibold transform transition-all duration-500 group-hover:-translate-y-8">
                    {{ $item['title'] }}
                </h3>

                <!-- Description -->
                <p class="text-sm text-gray-200 opacity-0 transform translate-y-4
                           group-hover:opacity-100 group-hover:translate-y-0
                           transition-all duration-500 mt-2 leading-relaxed">
                    {{ $item['desc'] }}
                </p>

            </div>

        </div>
        @endforeach

    </div>

</section>


<!-- Footer Strip -->
@include('components.footer')

@vite("resources/js/app.js")

</body>
</html>
