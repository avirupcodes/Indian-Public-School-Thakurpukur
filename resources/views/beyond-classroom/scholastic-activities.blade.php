<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">


</head>
<body class="font-[Cinzel] bg-amber-200/30">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

    <section class="relative bg-cover bg-center w-full h-[50vh] md:h-screen lg:h-screen mt-10" style="background-image: url('{{ asset('gallery/ips-thakurpukur-inner-pages.png') }}'); clip-path: ellipse(70% 50% at 50% 36%);">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-amber-600/30 to-amber-900/70"></div>
        

    </section>

    <!-- Scholastic Activities Section -->
<section class="relative w-full overflow-hidden">

    <!-- Decorative Circles (same feel as reference) -->
    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-[420px] h-[420px] rounded-full 
                bg-gradient-to-br from-yellow-200/40 to-transparent"></div>

    <div class="absolute right-0 top-1/3 w-[380px] h-[380px] rounded-full 
                bg-gradient-to-br from-indigo-200/40 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-6 pb-20">

        <!-- Page Title -->
        <h1 class="text-center text-5xl md:text-6xl font-extrabold text-amber-900 mb-6">
            Scholastic Activities
        </h1>

        <!-- Breadcrumb -->
        <div class="flex justify-center items-center gap-2 text-lg font-medium mb-16">
            <span class="text-orange-500">🏠</span>
            <span class="text-orange-500">Home</span>
            <span class="text-gray-500">›</span>
            <span class="text-gray-800">Scholastic Activities</span>
        </div>

        <!-- Main Content -->
        <div class="max-w-5xl">

            <h2 class="text-4xl md:text-5xl font-extrabold text-amber-900 leading-tight mb-8">
                Inspiring Young Minds Through Scholastic Activities <br>
                at The Kolkata International School
            </h2>

            <p class="text-xl md:text-2xl text-gray-800 leading-relaxed max-w-4xl">
                At The Kolkata International School, we believe that academic excellence
                forms the foundation of a successful and fulfilling life. As one of the
                best CBSE schools in Howrah, our scholastic programs are carefully designed
                to align with the curriculum guidelines while nurturing critical thinking,
                creativity, and a lifelong love for learning.
            </p>

        </div>
    </div>
</section>

@include('components.footer')




    @vite('resources/js/app.js')
</body>
</html>