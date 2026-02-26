<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blogs | Your Website</title>
    <meta name="description" content="Latest blogs and articles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

    

<!-- ================= HERO SECTION ================= -->
<section class="relative bg-amber-900 overflow-hidden mt-15">
    <div class="max-w-7xl mx-auto px-4 py-20 text-center text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Blogs</h1>
        <p class="text-sm text-yellow-400">
            <a href="/" class="hover:underline">Home</a> &nbsp;›&nbsp; Blogs
        </p>
    </div>

    <!-- Curve -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg viewBox="0 0 500 60" preserveAspectRatio="none" class="w-full h-[70px]">
            <path d="M0,0 C150,60 350,60 500,0 L500,60 L0,60 Z" fill="#F9FAFB"></path>
        </svg>
    </div>
</section>

<!-- ================= BLOG LIST ================= -->
<section class="max-w-7xl mx-auto px-4 py-14">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($blogs as $blog)
        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">

            <!-- Blog Image -->
            <div class="relative">
                <img src="{{ asset('storage/'.$blog->image) }}"
                     alt="{{ $blog->title }}"
                     class="w-full h-48 object-cover">

                <!-- Date Badge -->
                <span class="absolute bottom-3 left-3 bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $blog->created_at->format('d F, Y') }}
                </span>
            </div>

            <!-- Content -->
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-3 leading-snug">
                    {{ $blog->title }}
                </h3>

                <p class="text-sm text-gray-600 leading-relaxed mb-5">
                    {{ Str::limit($blog->short_description, 130) }}
                </p>

                <a href="{{ route('blog.show', $blog->slug) }}"
                   class="inline-block bg-[#0B3AA4] text-white text-sm px-6 py-2 rounded-full hover:bg-blue-900 transition">
                    Read More
                </a>
            </div>

        </div>
        @endforeach

    </div>

    <!-- ================= PAGINATION ================= -->
    <div class="mt-14 flex justify-center">
        {{ $blogs->links('pagination::tailwind') }}
    </div>

</section>


@include('components.footer')
@vite('resources/js/app.js')

</body>
</html>
