<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board | Indian Public School Thakurpukur</title>

    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

    <!-- Banner Section -->
    <section class="relative bg-gradient-to-r from-amber-700 to-amber-500 mt-20 bg-cover bg-center" style="background-image: url('{{ asset('gallery/notice-board-bg.jpeg') }}')">
        <div class="max-w-7xl mx-auto px-4 py-20 flex items-center justify-between">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-white">
                    Notice & Announcement
                </h1>
                <p class="mt-2 text-amber-100 text-sm">
                    Home / Notice & Announcement
                </p>
            </div>

            <!-- Decorative Icon -->
            <!-- <div class="hidden md:block">
                <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M11 5h2m-1 0v14m7-7H5"/>
                    </svg>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Notice Content -->
    <section class="py-16">
        <div class="max-w-5xl mx-auto px-4">

            <!-- Notice Card -->
            <div class="bg-white shadow-xl rounded-lg p-8 md:p-10 border border-gray-100">

                <h2 class="text-xl md:text-2xl font-bold text-amber-700 mb-6">
                    Admissions Open for the Session 2026–27
                </h2>

                <p class="text-sm text-gray-600 mb-4">
                    Date of Notice: <span class="font-medium">15th December 2025</span>
                </p>

                <ul class="space-y-3 text-gray-700 text-[15px] leading-relaxed list-decimal list-inside">
                    <li>Registration forms are available from the school office on all working days.</li>
                    <li>Classes available for admission: Nursery to Class IX.</li>
                    <li>Age criteria must be fulfilled as per the school norms.</li>
                    <li>Photocopy of Birth Certificate issued by competent authority is mandatory.</li>
                    <li>Two passport size photographs of the student are required.</li>
                    <li>Transfer Certificate is required for admission to Class II and above.</li>
                    <li>Previous year’s report card must be submitted at the time of admission.</li>
                    <li>Admission will be confirmed only after verification of documents.</li>
                    <li>Seats are limited and will be allotted on a first-come, first-served basis.</li>
                    <li>The school authority reserves the right to grant or reject admission.</li>
                </ul>

                <div class="mt-8 p-4 bg-amber-50 border-l-4 border-amber-600 rounded">
                    <p class="text-sm text-gray-700">
                        For further details, parents are requested to contact the school office during working hours.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
     @include('components.footer')


     @vite('resources/js/app.js')
</body>
</html>
