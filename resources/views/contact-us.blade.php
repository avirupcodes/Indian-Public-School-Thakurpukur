<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Indian Public School Thakurpukur</title>
    @vite('resources/css/app.css')
   <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <style>
        .wave-bottom {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50 font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

<!-- ================= CONTACT HERO ================= -->
<section class="relative overflow-hidden bg-amber-900 bg-center py-30" style="background-image: url('{{ asset('gallery/contact-background.png') }}')">
    <div class="max-w-7xl mx-auto px-6 py-16 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white text-center mb-2">
            Contact Us
        </h1>
        <p class="text-center text-blue-200 text-sm">
            Home / Contact Us
        </p>
    </div>

    <!-- Curved Bottom Wave -->
    <div class="wave-bottom">
        <svg viewBox="0 0 1440 120" class="w-full" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,48C840,43,960,53,1080,58.7C1200,64,1320,64,1380,64L1440,64L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z"></path>
        </svg>
    </div>
</section>

<!-- ================= GET IN TOUCH ================= -->
<section class="bg-white pt-12 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Left Content -->
            <div class="lg:pt-8">
                <h2 class="text-3xl font-bold mb-8" style="color: #6D412A;">
                    Get in Touch
                </h2>

                <!-- Lottie Animation -->
                <div class="mb-8 flex justify-center lg:justify-start">
                    <dotlottie-player 
                        src="{{ asset('gallery/Welcome.lottie') }}"
                        background="transparent" 
                        speed="1" 
                        style="width: 280px; height: 280px;" 
                        loop 
                        autoplay>
                    </dotlottie-player>
                </div>

                <!-- Contact Details -->
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #FCD34D;">
                            <svg class="w-5 h-5" style="color: #6D412A;" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 leading-relaxed">
                                Indian Public School<br>
                                104, M. G. Road, Joka, Kabar Danga, Thakurpukur,<br>
                                Kolkata, West Bengal 700104
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #FCD34D;">
                            <svg class="w-5 h-5" style="color: #6D412A;" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">+91 82828 57771 / +91 82828 57772</p>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: #FCD34D;">
                            <svg class="w-5 h-5" style="color: #6D412A;" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <p class="text-gray-700">info@ipsthakurpukur.com</p>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
                <form class="space-y-5">
                    <div>
                        <input 
                            type="text" 
                            name="name" 
                            required
                            placeholder="Name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent text-gray-700 placeholder-gray-400"
                            style="focus:ring-color: #FCD34D;">
                    </div>

                    <div>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            placeholder="Email Id"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent text-gray-700 placeholder-gray-400"
                            style="focus:ring-color: #FCD34D;">
                    </div>

                    <div>
                        <input 
                            type="tel" 
                            name="phone"
                            placeholder="Phone No"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent text-gray-700 placeholder-gray-400"
                            style="focus:ring-color: #FCD34D;">
                    </div>

                    <div>
                        <textarea 
                            name="message" 
                            rows="4" 
                            required
                            placeholder="Leave us a Message"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:border-transparent text-gray-700 placeholder-gray-400 resize-none"
                            style="focus:ring-color: #FCD34D;"></textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full text-white font-semibold py-3 rounded-lg transition-all duration-300 hover:opacity-90"
                        style="background-color: #b95310ff;">
                        SEND MESSAGE
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ================= MAP ================= -->
<section class="w-full bg-gray-50">
    <iframe
        class="w-full h-[450px] border-0"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.131010895914!2d88.32860497529722!3d22.461710579570877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027118726d346d%3A0x227d546ebd568813!2sindian%20public%20school!5e0!3m2!1sen!2sin!4v1766419852589!5m2!1sen!2sin">
    </iframe>
</section>

@include('components.footer')




@vite('resources/js/app.js')

</body>
</html>