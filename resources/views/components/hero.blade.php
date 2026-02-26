<!-- <section class="relative w-full h-screen overflow-hidden hero-wave mt-20 z-5">

    <div id="carousel" class="absolute inset-0" style="clip-path: url(#wave-clip);">

        <svg width="0" height="0">
            <defs>
                <clipPath id="wave-clip" clipPathUnits="objectBoundingBox">
                    <path d="M0,0 L1,0 L1,0.88 C0.875,0.95 0.708,0.95 0.5,0.92 C0.292,0.89 0.125,0.89 0,0.92 Z"/>
                </clipPath>
            </defs>
        </svg>

        <!-- SLIDE 1 
        <div class="carousel-slide active absolute inset-0 bg-cover bg-top"
             style="background-image:url('{{ asset('gallery/school-3d-model.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/100"></div>
            <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 md:top-1/3 md:translate-y-0 hero-text-box z-20">
                <div class="hero-text-inner">
                    <h5 class="text-4xl">
                        <span class="highlight">PROGRAMMING</span> THE NEXT<br>
                        GENERATION OF PROBLEM-<br>
                        SOLVERS
                    </h5>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 
        <div class="carousel-slide absolute inset-0 bg-cover bg-center"
             style="background-image:url('{{ asset('gallery/ips_home_banner5.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/100"></div>
            <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 md:top-1/3 md:translate-y-0 hero-text-box z-20">
                <div class="hero-text-inner">
                    <h5 class="text-4xl text-shadow">
                        <span class="highlight">SMART</span> LEARNING
                        SPACES FOR FUTURE
                        READY STUDENTS
                    </h5>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 
        <div class="carousel-slide absolute inset-0 bg-cover bg-center"
             style="background-image:url('{{ asset('gallery/ips_home_banner3.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/100"></div>
            <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 md:top-1/3 md:translate-y-0 hero-text-box z-20">
                <div class="hero-text-inner">
                    <h5 class="text-4xl">
                        <span class="highlight">EXPERT</span> EDUCATORS
                        SHAPING YOUNG MINDS
                        FOR EXCELLENCE
                    </h5>
                </div>
            </div>
        </div>

        <!-- SLIDE 4 
        <div class="carousel-slide absolute inset-0 bg-cover bg-center"
             style="background-image:url('{{ asset('gallery/ips_home_banner4.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/100"></div>
            <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 md:top-1/3 md:translate-y-0 hero-text-box z-20">
                <div class="hero-text-inner">
                    <h5 class="text-4xl">
                        BEYOND <span class="highlight">ACADEMICS</span>
                        BUILDING CONFIDENT
                        FUTURE LEADERS
                    </h5>
                </div>
            </div>
        </div>

        <!-- SLIDE 5 
        <div class="carousel-slide absolute inset-0 bg-cover bg-center"
             style="background-image:url('{{ asset('gallery/ips_home_banner1.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-black/100"></div>
            <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 md:top-1/3 md:translate-y-0 hero-text-box z-20">
                <div class="hero-text-inner">
                    <h5 class="text-4xl">
                        A <span class="highlight">SAFE</span> CAMPUS
                        WHERE CHILDREN
                        THRIVE & GROW
                    </h5>
                </div>
            </div>
        </div>


        <!-- Wave Bottom Cut 
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none pointer-events-none" style="display: none;">
        <svg class="relative block w-full h-24 md:h-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <defs>
                <mask id="wave-mask">
                    <rect width="1200" height="120" fill="white"/>
                    <path d="M0,0 C150,80 350,80 600,50 C850,20 1050,20 1200,50 L1200,0 L0,0 Z" fill="black"/>
                </mask>
            </defs>
            <rect width="1200" height="120" fill="white" mask="url(#wave-mask)"/>
        </svg>
    </div>

    <!-- Scroll Down Arrow 
    <div class="absolute bottom-30 left-1/2 transform -translate-x-1/2 z-30 animate-bounce">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>

    </div>
</section> -->


<section class="relative w-full h-[250px] lg:h-[150vh] overflow-hidden hero-wave mt-20 z-5">

    <div class="absolute inset-0" style="clip-path: url(#wave-clip);">

        <!-- Wave Clip Definition -->
        <svg width="0" height="0">
            <defs>
                <clipPath id="wave-clip" clipPathUnits="objectBoundingBox">
                    <path d="M0,0 L1,0 L1,0.88 C0.875,0.95 0.708,0.95 0.5,0.92 C0.292,0.89 0.125,0.89 0,0.92 Z"/>
                </clipPath>
            </defs>
        </svg>

        <!-- VIDEO BACKGROUND -->
        <video
            class="w-full h-auto md:h-full object-contain lg:object-cover"
            autoplay
            muted
            loop
            playsinline
        >
            <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
        </video>

        <!-- Scroll Down Arrow -->
        <div class="absolute bottom-20 md:bottom-30 left-1/2 transform -translate-x-1/2 z-30 animate-bounce">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>

    </div>
</section>
