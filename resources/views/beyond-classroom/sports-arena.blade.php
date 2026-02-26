<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports and Arena | Indian Public School Thakurpukur</title>

    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="font-[Cinzel] bg-[#FFF8F1]">

@include('components.header')
@include('components.floatingBtn')
@include('components.e-brochure')
@include('components.popup')
@include('components.scrollToTop')
@include('components.social-media-float')
@include('components.innerpages-banner')

<section class="font-semibold py-16">
<div class="max-w-7xl mx-auto px-4">

<!-- ================= PAGE TITLE ================= -->
<h1 class="text-center text-4xl font-extrabold text-[#4E342E] mb-2">
    Sports Arena
</h1>
<p class="text-center text-sm text-[#F9A825] mb-16">
    Home / Sports Arena
</p>

<!-- ================= INTRO (NO IMAGE) ================= -->
<div class="mb-24">
    <h2 class="text-2xl font-bold text-[#4E342E] mb-4">
        Sports Arena
    </h2>
    <p class="text-gray-700 leading-relaxed mb-4">
        Sports play a vital role in the overall development of students at Indian Public School, Thakurpukur. Along with academic excellence, we strongly believe in nurturing physical fitness, mental resilience, and team spirit. Our Sports Arena offers students a dynamic environment where learning extends beyond classrooms.
    </p>
    <p class="text-gray-700 leading-relaxed">
        The CBSE curriculum at IPS Thakurpukur encourages sports as an integral part of education. With access to modern facilities and guided training, students are motivated to explore their sporting interests, build confidence, and adopt a healthy lifestyle.
    </p>
</div>

<!-- ================= SECTION 1 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/tennis.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            A hub of energy, enthusiasm and excellence
        </h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            The Sports Arena at Indian Public School, Thakurpukur is always alive with energy and excitement. It serves as a space where students from all age groups actively participate in both indoor and outdoor sports, regardless of seasonal changes.
        </p>
        <p class="text-gray-700 leading-relaxed">
            From cricket and football to yoga and chess, our infrastructure is designed to support diverse sporting interests. Every facility reflects our commitment to holistic education, encouraging students to develop discipline, focus, and a lifelong passion for fitness.
        </p>
    </div>

</div>

<!-- ================= SECTION 2 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Outdoor sports facilities
        </h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Indian Public School, Thakurpukur provides excellent outdoor sports facilities that allow students to engage in physical activities in a safe and structured environment. Our spacious playground supports cricket, football, athletics, and various team sports.
        </p>
        <p class="text-gray-700 leading-relaxed">
            All outdoor activities are supervised by trained coaches and educators, ensuring safety, skill development, and sportsmanship while students enjoy active learning experiences.
        </p>
    </div>

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/basketball.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

</div>

<!-- ================= SECTION 3 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/table-tennis.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Indoor sports facilities
        </h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Our indoor sports facilities at IPS Thakurpukur provide students with opportunities to stay active throughout the year. Games like table tennis, badminton, and chess help students sharpen reflexes, improve concentration, and develop strategic thinking.
        </p>
        <p class="text-gray-700 leading-relaxed">
            Dedicated yoga and meditation sessions further support mental well-being, helping students manage stress, enhance focus, and maintain emotional balance.
        </p>
    </div>

</div>

<!-- ================= SECTION 4 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Professional coaching and mentorship
        </h3>
        <p class="text-gray-700 leading-relaxed">
            At Indian Public School, Thakurpukur, students receive professional coaching from experienced mentors who focus on skill enhancement, fitness, and sports ethics. Training programs are structured to suit different age groups and skill levels.
        </p>
    </div>

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/mentor.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

</div>

<!-- ================= SECTION 5 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/football.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Inter house and inter-school competitions
        </h3>
        <p class="text-gray-700 leading-relaxed">
            Competitive sports at IPS Thakurpukur instill values of teamwork, respect, and resilience. Students actively participate in inter-house and inter-school competitions, gaining exposure and confidence through healthy competition.
        </p>
    </div>

</div>

<!-- ================= SECTION 6 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start mb-24">

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Health, Fitness, and Well-Being
        </h3>
        <p class="text-gray-700 leading-relaxed">
            Indian Public School, Thakurpukur promotes physical fitness as a foundation for academic and personal success. Sports-integrated learning helps students develop endurance, time management, and emotional strength.
        </p>
    </div>

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/yoga.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

</div>

<!-- ================= SECTION 7 ================= -->
<div class="grid lg:grid-cols-12 gap-10 items-start">

    <div class="lg:col-span-4 rounded-xl overflow-hidden shadow-lg">
        <img src="{{ asset('gallery/beyond-classroom-images/football-win.png') }}"
             class="w-full h-[260px] object-cover"
             alt="">
    </div>

    <div class="lg:col-span-8">
        <h3 class="text-xl font-bold text-[#4E342E] mb-4">
            Building character through sports
        </h3>
        <p class="text-gray-700 leading-relaxed">
            Sports at IPS Thakurpukur go beyond winning medals. Every game teaches perseverance, discipline, humility, and leadership. Through sports, we nurture responsible individuals who carry strong values into every aspect of life.
        </p>
    </div>

</div>

</div>
</section>

@include('components.footer')
@vite('resources/js/app.js')

</body>
</html>
