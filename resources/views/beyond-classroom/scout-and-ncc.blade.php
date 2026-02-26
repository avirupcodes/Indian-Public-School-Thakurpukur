<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scout and NCC | Indian Public School Thakurpukur</title>

    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="font-[Cinzel] bg-[#FFF6DB]">

@include('components.header')
@include('components.floatingBtn')
@include('components.e-brochure')
@include('components.popup')
@include('components.scrollToTop')
@include('components.social-media-float')
@include('components.innerpages-banner')

<section class="py-14 md:py-20">
<div class="max-w-7xl mx-auto px-4">

    <!-- Page Title -->
    <div class="text-center mb-14" data-aos="fade-up">
        <h1 class="text-4xl md:text-5xl font-bold text-[#5A2D0C]">
            Scout and NCC
        </h1>
        <p class="text-base md:text-lg mt-3 text-[#3B1C08]">
            <span class="text-[#F2C94C]">🏠 Home</span> › Scout and NCC
        </p>
    </div>

    <!-- Intro -->
    <div class="space-y-6 text-[#3B1C08] text-lg md:text-xl leading-relaxed mb-16"
         data-aos="fade-up" data-aos-delay="100">
        <p>
            Indian Public School, Thakurpukur proudly integrates Scout and NCC as an essential part of its holistic education framework.
            These programs are designed to instill discipline, responsibility, and leadership among students while nurturing confidence
            and self-esteem through structured training and real-life learning experiences.
        </p>
        <p>
            Through active participation in Scout and NCC activities, students of Indian Public School, Thakurpukur acquire practical
            life skills, teamwork abilities, and a deep sense of social responsibility that extends well beyond classroom learning.
        </p>
    </div>

    <!-- Section -->
    <div class="mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
            The spirit of scouting: learning by doing
        </h2>
        <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
            At Indian Public School, Thakurpukur, scouting is a way of life that emphasizes experiential learning.
            Students grow through hands-on activities that promote character building, citizenship, and personal growth
            under the guidance of trained Scout and NCC instructors.
        </p>
    </div>

    <!-- Section -->
    <div class="mb-16" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
            Nurturing character and community spirit
        </h2>
        <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
            The Scout Program at Indian Public School, Thakurpukur goes beyond extracurricular engagement.
            It fosters compassion, unity, self-reliance, and moral strength while encouraging students to serve their community with pride.
        </p>
        <p class="mt-4 text-lg md:text-xl text-[#3B1C08] leading-relaxed">
            Inspired by the values of Lord Baden-Powell, our students participate in meaningful activities that strengthen
            their ethical foundations and social awareness.
        </p>
    </div>

    <!-- Image + Content -->
    <div class="grid md:grid-cols-5 gap-10 items-center mb-20">

        <div class="md:col-span-2" data-aos="zoom-in">
            <img src="{{ asset('gallery/beyond-classroom-images/table-tennis.png') }}"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto"
                 alt="IPS Activity">
        </div>

        <div class="md:col-span-3" data-aos="fade-left">
            <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-6">
                Core Objectives of the Scout Program
            </h2>
            <ul class="space-y-4 text-lg md:text-xl text-[#3B1C08] leading-relaxed">
                <li><strong>Character Building:</strong> Encouraging honesty, discipline, respect, and perseverance.</li>
                <li><strong>Teamwork and Leadership:</strong> Developing cooperation, initiative, and confidence.</li>
                <li><strong>Social Responsibility:</strong> Active involvement in cleanliness drives and community service.</li>
                <li><strong>Self-Reliance:</strong> Training in camping, first aid, and survival skills.</li>
                <li><strong>Environmental Awareness:</strong> Promoting eco-friendly practices and nature conservation.</li>
            </ul>
        </div>
    </div>

    <!-- Coaching -->
    <div class="grid md:grid-cols-5 gap-10 items-center mb-20">

        <div class="md:col-span-3" data-aos="fade-right">
            <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
                Professional coaching and mentorship
            </h2>
            <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
                Indian Public School, Thakurpukur provides structured coaching and mentorship through experienced trainers.
                Students receive guidance that helps them refine skills, build discipline, and achieve personal excellence.
            </p>
        </div>

        <div class="md:col-span-2" data-aos="zoom-in">
            <img src="{{ asset('gallery/beyond-classroom-images/mentor.png') }}"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto"
                 alt="Coaching">
        </div>
    </div>

    <!-- Competitions -->
    <div class="grid md:grid-cols-5 gap-10 items-center mb-20">

        <div class="md:col-span-2" data-aos="zoom-in">
            <img src="{{ asset('gallery/beyond-classroom-images/football.png') }}"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto"
                 alt="Competition">
        </div>

        <div class="md:col-span-3" data-aos="fade-left">
            <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
                Inter house and inter-school competitions
            </h2>
            <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
                Competitive events at Indian Public School, Thakurpukur nurture resilience, sportsmanship, and confidence.
                Students proudly represent the school at district and state-level events.
            </p>
        </div>
    </div>

    <!-- Health -->
    <div class="grid md:grid-cols-5 gap-10 items-center mb-20">

        <div class="md:col-span-3" data-aos="fade-right">
            <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
                Health, Fitness, and Well-Being
            </h2>
            <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
                Indian Public School, Thakurpukur emphasizes physical fitness as a foundation for academic and emotional well-being.
            </p>
        </div>

        <div class="md:col-span-2" data-aos="zoom-in">
            <img src="{{ asset('gallery/beyond-classroom-images/yoga.png') }}"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto"
                 alt="Fitness">
        </div>
    </div>

    <!-- Final -->
    <div class="grid md:grid-cols-5 gap-10 items-center">

        <div class="md:col-span-2" data-aos="zoom-in">
            <img src="{{ asset('gallery/beyond-classroom-images/football-win.png') }}"
                 class="rounded-xl shadow-lg w-full max-w-md mx-auto"
                 alt="Sports">
        </div>

        <div class="md:col-span-3" data-aos="fade-left">
            <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-4">
                Building character through sports
            </h2>
            <p class="text-lg md:text-xl text-[#3B1C08] leading-relaxed">
                Sports at Indian Public School, Thakurpukur cultivate perseverance, humility, teamwork, and integrity.
            </p>
        </div>
    </div>

</div>
</section>

@include('components.footer')

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-in-out'
  });
</script>

@vite('resources/js/app.js')
</body>
</html>
