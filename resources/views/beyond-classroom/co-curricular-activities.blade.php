<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Co-Curricular Activities | Indian Public School Thakurpukur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-[#fff1e4] via-white to-[#fff1e4] text-gray-700 font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

    <section class="relative bg-cover bg-center w-full h-[50vh] md:h-screen lg:h-screen mt-10 " style="background-image: url('{{ asset('gallery/ips-thakurpukur-inner-pages.png') }}'); clip-path: ellipse(70% 50% at 50% 36%);">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-amber-600/30 to-amber-900/70"></div>
        

    </section>

<!-- Co-curricular Activities Page -->
<section class="font-semibold">

    <!-- Page Heading -->
    <div class="text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-bold text-amber-900">
            Co-curricular Activities
        </h1>
        <p class="text-base mt-2 text-gray-500">
            🏠 Home › Co-curricular Activities
        </p>
    </div>

    <!-- Intro -->
    <div class="max-w-7xl mx-auto px-4 text-gray-700 text-[17px] md:text-[18px] leading-[1.75] space-y-5 mb-16">
        <p>
            At Indian Public School, Thakurpukur, co-curricular activities form an integral
            part of our educational framework. These activities are thoughtfully designed
            to nurture leadership, creativity, teamwork, and personal confidence in students.
        </p>
        <p>
            From arts and music to sports and clubs, students are encouraged to explore
            their interests, develop new skills, and discover their passions beyond
            academics through structured engagement.
        </p>
        <p>
            Our holistic approach ensures that every child receives opportunities to grow
            intellectually, emotionally, socially, and physically in a vibrant learning
            environment.
        </p>
    </div>

    <!-- Why Section -->
    <div class="max-w-7xl mx-auto px-4 mb-20">
        <h2 class="text-2xl font-bold text-amber-900 mb-6">
            Why co-curricular activities matter?
        </h2>

        <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75] mb-10 max-w-5xl">
            Our CBSE-aligned curriculum emphasizes holistic development beyond academic
            excellence. Co-curricular activities complement classroom learning by nurturing
            essential life skills that help students succeed in the real world.
        </p>

        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <img src="{{ asset('gallery/beyond-classroom-images/ips-yoga.png') }}"
                     class="shadow-lg w-full max-w-[90%] md:max-w-[85%] mx-auto object-cover"
                     alt="">
            </div>

            <div class="space-y-4 text-gray-700 text-[17px] md:text-[18px] leading-[1.75]">
                <p><strong>▶ Develop Personality:</strong> Activities like debates, music,
                dance, and drama enhance communication skills and self-expression.</p>

                <p><strong>▶ Build Confidence:</strong> Performances and competitions help
                students overcome stage fear and hesitation.</p>

                <p><strong>▶ Encourage Teamwork:</strong> Sports and group activities promote
                cooperation, leadership, and respect.</p>

                <p><strong>▶ Instill Discipline and Time Management:</strong> Balancing studies
                with activities builds responsibility and focus.</p>

                <p><strong>▶ Promote Mental and Physical Wellness:</strong> Arts, games, and
                clubs support emotional health and fitness.</p>
            </div>
        </div>
    </div>

    <!-- Our Approach -->
    <div class="max-w-7xl mx-auto px-4 mb-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-2xl font-bold text-amber-900 mb-4">
                Our approach to co-curricular engagement
            </h2>
            <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75]">
                Indian Public School, Thakurpukur follows a structured and inclusive
                approach to co-curricular engagement. Activities are planned according
                to age groups and interests, ensuring meaningful participation for
                every student from primary to senior secondary levels.
                <br><br>
                Integrated within the academic timetable, these activities help students
                maintain balance while developing confidence, creativity, discipline,
                and a strong sense of school identity.
            </p>
        </div>

        <div>
            <img src="{{ asset('gallery/beyond-classroom-images/co-curricular-engagement.webp') }}"
                 class="rounded-xl shadow-lg w-full max-w-[90%] md:max-w-[85%] mx-auto object-cover"
                 alt="">
        </div>
    </div>

    <!-- Types -->
    <div class="max-w-7xl mx-auto px-4 mb-20">
        <h2 class="text-2xl font-bold text-amber-900 mb-6">
            Types of co-curricular activities we offer
        </h2>

        <div class="space-y-4 text-gray-700 text-[17px] md:text-[18px] leading-[1.75] max-w-5xl">
            <p>
                Our school offers a wide range of co-curricular activities designed
                to promote physical fitness, creativity, and intellectual growth.
                These activities align with CBSE guidelines and support holistic learning.
            </p>
            <p>
                Sports and physical education enhance stamina and teamwork, while
                performing and visual arts nurture cultural appreciation and creativity.
                STEM and club activities develop analytical thinking and innovation.
            </p>
            <p>
                Cultural programs and celebrations ensure exposure to traditions,
                values, and social awareness.
            </p>
        </div>
    </div>

    <!-- Annual Events -->
    <div class="max-w-7xl mx-auto px-4 mb-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <img src="{{ asset('gallery/beyond-classroom-images/sports-day.jpg') }}"
                 class="rounded-xl shadow-lg w-full max-w-[90%] md:max-w-[85%] mx-auto object-cover"
                 alt="">
        </div>

        <div>
            <h2 class="text-2xl font-bold text-amber-900 mb-4">
                Annual Events and Showcases
            </h2>
            <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75]">
                Indian Public School, Thakurpukur organizes annual events to celebrate
                student talent and achievements. Cultural programs, sports days,
                exhibitions, and theme-based activities provide platforms for expression
                and confidence-building.
            </p>
        </div>
    </div>

    <!-- Guidance -->
    <div class="max-w-7xl mx-auto px-4 mb-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-2xl font-bold text-amber-900 mb-4">
                Guidance and Mentorship
            </h2>
            <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75]">
                All activities are conducted under the guidance of trained educators
                and mentors who identify individual strengths and nurture talents.
                Continuous encouragement ensures personal growth and confidence.
            </p>
        </div>

        <div>
            <img src="{{ asset('gallery/beyond-classroom-images/guidance.avif') }}"
                 class="rounded-xl shadow-lg w-full max-w-[90%] md:max-w-[85%] mx-auto object-cover"
                 alt="">
        </div>
    </div>

    <!-- External -->
    <div class="max-w-7xl mx-auto px-4 mb-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <img src="{{ asset('gallery/beyond-classroom-images/crafting.avif') }}"
                 class="rounded-xl shadow-lg w-full max-w-[90%] md:max-w-[85%] mx-auto object-cover"
                 alt="">
        </div>

        <div>
            <h2 class="text-2xl font-bold text-amber-900 mb-4">
                Participation in External Competitions
            </h2>
            <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75]">
                Students actively participate in inter-school, district, state,
                and national competitions such as Olympiads, quizzes, sports,
                and cultural events, bringing pride and recognition to the school.
            </p>
        </div>
    </div>

    <!-- Why CBSE -->
    <div class="max-w-7xl mx-auto px-4 pb-24">
        <h2 class="text-2xl font-bold text-amber-900 mb-4">
            Why Co-Curricular Activities Matter in a CBSE School
        </h2>
        <p class="text-gray-700 text-[17px] md:text-[18px] leading-[1.75] max-w-5xl">
            CBSE emphasizes co-scholastic activities as a core component of education.
            These activities develop communication, decision-making, empathy, health,
            and environmental awareness.
            <br><br>
            At Indian Public School, Thakurpukur, co-curricular learning is not optional
            but essential to shaping confident, capable, and compassionate individuals
            ready to succeed in life.
        </p>
    </div>

</section>





@include('components.footer')

@vite('resources/js/app.js')

</body>
</html>
