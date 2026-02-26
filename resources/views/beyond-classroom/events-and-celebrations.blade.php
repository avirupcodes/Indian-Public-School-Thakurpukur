<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events and Celebrations | Indian Public School Thakurpukur</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    

    @vite('resources/css/app.css')
</head>
<body class="font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')
    @include('components.innerpages-banner')

    <!-- Page Heading -->
    <div class="text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-bold text-amber-900">
            Events & Celebrations
        </h1>
        <p class="text-base mt-2 text-gray-500">
            🏠 Home › Events & Celebrations
        </p>
    </div>

    <section class="bg-[#F4F7FF] py-12 md:py-16 relative overflow-hidden">

  <!-- Decorative Circles (same placement logic) -->
  <div class="absolute left-0 top-24 w-40 h-40 rounded-full border-[18px] border-[#F2C94C]/40"></div>
  <div class="absolute right-0 top-32 w-44 h-44 rounded-full border-[18px] border-[#5A2D0C]/30"></div>

  <div class="max-w-7xl mx-auto px-4 relative z-10">

    <!-- Section Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-[#5A2D0C] mb-6">
      Events and Celebrations
    </h2>

    <!-- Intro Paragraph -->
    <p class="text-[#3B1C08] leading-relaxed max-w-4xl mb-6">
      Indian Public School, Thakurpukur believes in nurturing academic excellence alongside the holistic
      development of every student. Our school calendar is enriched with a wide range of events and
      celebrations that promote creativity, confidence, cultural awareness, and joyful learning.
    </p>

    <!-- Sub Heading -->
    <h3 class="text-lg font-bold text-[#F2C94C] mb-3">
      Annual highlights
    </h3>

    <!-- Content List -->
    <div class="space-y-4 text-[#3B1C08] leading-relaxed max-w-5xl">

      <p>
        <strong>Annual Day and Sports Meet –</strong>
        Indian Public School, Thakurpukur proudly organizes Annual Day and Sports Meet every year.
        These grand occasions showcase students’ talents, discipline, teamwork, and sportsmanship,
        creating unforgettable experiences for students and parents alike.
      </p>

      <p>
        <strong>Independence Day and Republic Day –</strong>
        National festivals are celebrated with great enthusiasm through patriotic assemblies,
        cultural performances, and inspiring activities that instill a deep sense of national pride
        and responsibility among students.
      </p>

      <p>
        <strong>Festival and cultural days –</strong>
        Festivals such as Diwali, Christmas, Eid, Holi, and other cultural occasions are celebrated
        with joy and inclusivity, helping students appreciate India’s rich diversity and traditions.
      </p>

      <p>
        <strong>Biggest Winter Carnival –</strong>
        The Winter Carnival at Indian Public School, Thakurpukur provides a vibrant platform for students
        to showcase their creativity, innovation, research skills, and collaborative spirit through
        exhibitions, performances, and interactive activities.
      </p>

      <p>
        These celebrations not only enrich the school environment but also encourage students to express
        themselves confidently, work collaboratively, and develop a deeper understanding of the world
        around them.
      </p>

      <p class="font-medium">
        Join us in celebrating every moment that shapes young minds and builds lasting memories at
        Indian Public School, Thakurpukur.
      </p>

    </div>
  </div>
</section>




    @include('components.footer')
    @vite('resources/js/app.js')
    
</body>
</html>