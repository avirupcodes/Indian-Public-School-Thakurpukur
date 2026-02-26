<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $pages[$slug]['title'] }}</title>
    <meta name="description" content="{{ $pages[$slug]['content'] }}">
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
    @include('components.innerpages-banner')
    

<section class="py-16">

    <div class="container mx-auto px-4 max-w-7xl flex flex-col lg:flex-row justy-center items-center lg:items-start lg:justify-between gap-5 lg:gap-0">
        <div class="text-box w-2/3">
            <h1 class="text-3xl md:text-4xl font-bold text-[#2C1810] mb-6">
                {{ $pages[$slug]['heading'] }}
            </h1>

            <p class="text-gray-700 leading-relaxed mb-4">
                {{ $pages[$slug]['content'] }}
            </p>

            <p class="text-gray-700 leading-relaxed">
                Indian Public School Thakurpukur follows the CBSE curriculum and focuses on
                academic excellence, discipline, co-curricular activities, and character development.
            </p>
        </div>

        <div class="w-1/2 lg:w-auto">
            @include('components.enquiry-form')
        </div>
    </div>
    
</section>



@include('components.footer')

@vite('resources/js/app.js')

</body>
</html>
