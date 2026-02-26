<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Public School - Thakurpukur</title>
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest"> -->
    @vite('resources/css/app.css')
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .carousel-track {
        animation: scroll 30s linear infinite;
    }

    .carousel-track:hover {
        animation-play-state: paused;
    }
    </style>
    <style>
    /* Hide body content until loader is done */
    body.loading {
        overflow: hidden;
    }
    
    body.loading > *:not(#loader) {
        opacity: 0;
    }

    /* Pulse animation for dots */
    @keyframes dotPulse {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.3);
            opacity: 0.7;
        }
    }

    .dot {
        animation: dotPulse 1.5s ease-in-out infinite;
    }

    /* Smooth gradient animation */
    @keyframes gradientShift {
        0%, 100% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
    }
</style>
</head>
<body class="font-[Cinzel]">
    @include('components.header')
    @include('components.scrollToTop')
    @include('components.popup')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.social-media-float')
    @include('components.hero')
    @include('components.our-journey')
    @include('components.ourPrograms')
    @include('components.futureisticLearning')
    @include('components.whatMakesUsApart')
    @include('components.academics-and-beyond')
    <x-digital-diaries :blogs="$blogs" />
    @include('components.contact-us')
    @include('components.footer')
    
    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        AOS.init({
            duration: 800,
            once: false,
        });
    </script>

    <!-- sectionOfSchool blades js -->
    <script>
    document.querySelectorAll("a[data-img]").forEach(item => {
        item.addEventListener("mouseover", function () {
            document.getElementById("sectionImage").src = this.getAttribute("data-img");
        });
    });
    </script>
    <script>
// Optional: Add JavaScript for manual control or pause on hover
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('universityCarousel');
    
    carousel.addEventListener('mouseenter', function() {
        this.style.animationPlayState = 'paused';
    });
    
    carousel.addEventListener('mouseleave', function() {
        this.style.animationPlayState = 'running';
    });
});
</script>
<script>
AOS.init();

const slides = document.querySelectorAll(".carousel-slide");
let index = 0;

function showSlide() {
    slides.forEach((slide, i) => {
        slide.classList.toggle("opacity-100", i === index);
        slide.classList.toggle("opacity-0", i !== index);
    });

    index = (index + 1) % slides.length;
}

// Initial load
showSlide();

// Change every 5 seconds
setInterval(showSlide, 5000);
</script>


</body>
</html>