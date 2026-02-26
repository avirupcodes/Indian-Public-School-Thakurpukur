<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | Indian Public School Thakurpukur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
          crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-gray-700 font-[Cinzel]">

@include('components.header')
@include('components.floatingBtn')
@include('components.e-brochure')
@include('components.popup')
@include('components.scrollToTop')
@include('components.social-media-float')

<!-- Page Header -->
<section class="relative h-[320px] flex items-center justify-center text-center overflow-hidden mt-20">
    <div class="absolute inset-0">
        <img src="{{ asset('gallery/school-3d-model.webp') }}"
             class="w-full h-full object-cover"
             alt="Indian Public School Thakurpukur">
    </div>
    <div class="absolute inset-0 bg-amber-900/80"></div>

    <div class="relative z-10 px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-amber-100">About Us</h1>
        <nav class="mt-4 flex justify-center text-sm text-amber-200">
            <a href="{{ url('/') }}" class="hover:text-white">Home</a>
            <span class="mx-2">›</span>
            <span class="font-semibold text-amber-100">About Us</span>
        </nav>
        <p class="mt-2 text-xs tracking-widest uppercase text-amber-300">
            Indian Public School • Thakurpukur
        </p>
    </div>
</section>

<section class="bg-slate-50 py-24">
    <div class="max-w-6xl mx-auto px-6 space-y-32">

        <!-- 1. Image Left / Text Right -->
        <div class="grid md:grid-cols-[320px_1fr] gap-16 items-center">
            <img src="{{ asset('gallery/class-room3.webp') }}"
                 class="w-full h-[360px] object-cover rounded-xl shadow-md"
                 alt="Quality Education">

            <div>
                <h3 class="text-2xl font-semibold text-brand mb-4">
                    Quality education and holistic development
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-2xl">
                    Indian Public School, Thakurpukur provides quality education that
                    goes beyond textbooks. We follow the CBSE curriculum which promotes
                    conceptual understanding, critical thinking, creativity and
                    practical application of knowledge.
                </p>
                <p class="text-gray-600 leading-relaxed max-w-2xl mt-4">
                    Co-curricular activities such as sports, music, drama, debates and
                    art are integrated into learning to nurture talent and ensure
                    holistic development of every student.
                </p>
            </div>
        </div>

        <!-- 2. Text Left / Image Right -->
        <div class="grid md:grid-cols-[1fr_320px] gap-16 items-center">
            <div class="md:pl-10">
                <h3 class="text-2xl font-semibold text-brand mb-4">
                    Promotion of national integration and national values
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-2xl">
                    Indian Public School fosters unity in diversity by celebrating
                    India’s rich cultural heritage. Students from different backgrounds
                    actively participate in national and cultural events.
                </p>
                <p class="text-gray-600 leading-relaxed max-w-2xl mt-4">
                    This inclusive environment helps develop respect, empathy, national
                    pride and social harmony among students.
                </p>
            </div>

            <img src="{{ asset('gallery/about-img2.png') }}"
                 class="w-full h-[360px] object-cover rounded-xl shadow-md"
                 alt="National Integration">
        </div>

        <!-- 3. Image Left / Text Right -->
        <div class="grid md:grid-cols-[320px_1fr] gap-16 items-center">
            <img src="{{ asset('gallery/about-img3.png') }}"
                 class="w-full h-[360px] object-cover rounded-xl shadow-md"
                 alt="Value Education">

            <div>
                <h3 class="text-2xl font-semibold text-brand mb-4">
                    Character building and value education
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-2xl">
                    Character building is central to the philosophy of Indian Public
                    School. We emphasize moral values, discipline, honesty and
                    responsibility through structured value-based education.
                </p>
                <p class="text-gray-600 leading-relaxed max-w-2xl mt-4">
                    Leadership opportunities, ethical discussions and community
                    initiatives help students develop integrity and confidence.
                </p>
            </div>
        </div>

        <!-- 4. Text Left / Image Right -->
        <div class="grid md:grid-cols-[1fr_320px] gap-16 items-center">
            <div class="md:pl-10">
                <h3 class="text-2xl font-semibold text-brand mb-4">
                    Leadership and innovation
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-2xl">
                    Indian Public School encourages leadership and innovation through
                    project-based learning, teamwork and creative problem-solving
                    activities.
                </p>
                <p class="text-gray-600 leading-relaxed max-w-2xl mt-4">
                    Students are empowered to express ideas, take initiative and develop
                    skills essential for academic and personal success.
                </p>
            </div>

            <img src="{{ asset('gallery/about-img4.png') }}"
                 class="w-full h-[360px] object-cover rounded-xl shadow-md"
                 alt="Leadership">
        </div>

        <!-- 5. Image Left / Text Right -->
        <div class="grid md:grid-cols-[320px_1fr] gap-16 items-center">
            <img src="{{ asset('gallery/about-img5.png') }}"
                 class="w-full h-[360px] object-cover rounded-xl shadow-md"
                 alt="Environmental Education">

            <div>
                <h3 class="text-2xl font-semibold text-brand mb-4">
                    Environmentally conscious education
                </h3>
                <p class="text-gray-600 leading-relaxed max-w-2xl">
                    Environmental awareness is an integral part of education at Indian
                    Public School. Students participate in eco-friendly initiatives,
                    plantation drives and sustainability programs.
                </p>
                <p class="text-gray-600 leading-relaxed max-w-2xl mt-4">
                    These activities instill responsibility towards nature and help
                    students grow into environmentally conscious citizens.
                </p>
            </div>
        </div>

    </div>
</section>



<!-- Footer Accent -->
<div class="h-2 bg-gradient-to-r from-amber-400 via-brand to-amber-400"></div>

@include('components.footer')

@vite('resources/js/app.js')

</body>
</html>