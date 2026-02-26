<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $blog->meta_title ?? $blog->title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    @vite('resources/css/app.css')
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">


</head>
<body class="bg-gray-50 font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')

<!-- Hero Section with Title -->
<div class="bg-gradient-to-br from-amber-900 via-amber-800 to-amber-900 text-white py-20 relative overflow-hidden mt-10" style="clip-path: ellipse(70% 50% at 50% 36%);">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-white rounded-t-full transform scale-150"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Blog Details</h1>
        <!-- Breadcrumb -->
        <div class="flex items-center justify-center space-x-2 text-sm">
            <a href="{{ route('home') }}" class="hover:text-yellow-400 transition">Home</a>
            <span>></span>
            <span class="text-yellow-400">Blog</span>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 -mt-10 pb-16 relative z-20">
    
    <!-- Main Card Container -->
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
        
        <!-- Featured Image -->
        <div class="w-full">
            <img src="{{ asset('storage/'.$blog->image) }}" 
                 alt="{{ $blog->title }}" 
                 class="w-full h-auto object-cover max-h-[500px]">
        </div>

        <!-- Content Section -->
        <div class="grid lg:grid-cols-3 gap-8 p-8 lg:p-12">
            
            <!-- Left Section - Blog Content -->
            <div class="lg:col-span-2">
                <!-- Date Badge -->
                <div class="flex items-center text-sm text-gray-600 mb-4">
                    <svg class="w-4 h-4 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                    </svg>
                    {{ $blog->created_at->format('d M, Y') }}
                </div>

                <!-- Blog Title -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $blog->title }}
                </h2>

                <!-- Blog Content -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-4">
                    {!! $blog->content !!}
                </div>

                <!-- Key Points Section (if applicable) -->
                @if(!empty($blog->key_points))
                <div class="mt-8 bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Key Points of this report include the following:</h3>
                    <ul class="space-y-2 text-gray-700">
                        @foreach($blog->key_points as $point)
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $point }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Back Button -->
                <div class="mt-10">
                    <a href="{{ route('blog.index') }}" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Back to Blogs
                    </a>
                </div>
            </div>

            <!-- Right Section - Enquiry Form & Recent Posts -->
            <div class="lg:col-span-1">
                <!-- Enquiry Form -->
                <div class="mb-8">
                    @include('components.enquiry-form')
                </div>

                <!-- Recent Posts Section -->
                @if($recentBlogs && $recentBlogs->count() > 0)
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Recent Posts</h2>
                    
                    <div class="space-y-6">
                        @foreach($recentBlogs as $recent)
                        <a href="{{ route('blog.show', $recent->slug) }}" 
                           class="group block bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100">
                            
                            <!-- Recent Blog Image -->
                            <div class="relative overflow-hidden h-40">
                                <img src="{{ asset('storage/'.$recent->image) }}" 
                                     alt="{{ $recent->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                <div class="absolute top-3 left-3 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $recent->category ?? 'Blog' }}
                                </div>
                            </div>

                            <!-- Recent Blog Content -->
                            <div class="p-4">
                                <div class="flex items-center text-xs text-gray-500 mb-2">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $recent->created_at->format('d M, Y') }}
                                </div>
                                
                                <h3 class="text-base font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition">
                                    {{ $recent->title }}
                                </h3>
                                
                                <p class="text-sm text-gray-600 line-clamp-2 mb-3">
                                    {{ $recent->excerpt ?? Str::limit(strip_tags($recent->content), 80) }}
                                </p>
                                
                                <div class="flex items-center text-blue-600 font-semibold text-sm group-hover:text-blue-800">
                                    Read More
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>

</div>


@include('components.footer')

@vite('resources/js/app.js')

</body>
</html>