{{-- Footer Component for Indian Public School Thakurpukur --}}
<footer class="relative text-amber-50 py-16 pt-20 px-6 bg-cover bg-top bg-fixed" style="background-image: url('{{ asset('gallery/school-3d-model.webp') }}'); clip-path: ellipse(137% 59% at 50% 60%);">
    <div class="absolute inset-0 z-0 bg-[#3E2723]/90"></div>
    <div class="relative max-w-9xl mx-auto z-10">
        {{-- Main Footer Content --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            
            {{-- Logo and School Description --}}
            <div class="lg:col-span-1">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-16 h-16 flex-shrink-0">
                        <img src="{{ asset('gallery/indian-public-school-new-logo.png') }}" alt="Indian Public School Logo" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-amber-400 leading-tight uppercase">
                            INDIAN PUBLIC SCHOOL
                        </h2>
                        <p>CBSE (10+2)</p>
                        <p>Thakurpukur</p>
                    </div>
                </div>
                <p class="text-sm text-amber-100 leading-relaxed mb-6">
                    The Indian Public School(Thakurpukur), is one of the best CBSE schools in Liluah, Howrah, with premium lush green campus and high quality Education. It is a private institution run by the S.N.B. Memorial Trust.
                </p>
                
                {{-- Social Media Icons --}}
                <div class="mb-6">
                    <h3 class="text-base font-semibold text-white mb-4">Follow Us On</h3>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white rounded-md flex items-center justify-center hover:bg-amber-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3E2723]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-md flex items-center justify-center hover:bg-amber-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3E2723]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-md flex items-center justify-center hover:bg-amber-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3E2723]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-md flex items-center justify-center hover:bg-amber-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#3E2723]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.917 16.083c-2.258 0-4.083-1.825-4.083-4.083s1.825-4.083 4.083-4.083c1.103 0 2.024.402 2.735 1.067l-1.107 1.068c-.304-.292-.834-.63-1.628-.63-1.394 0-2.531 1.155-2.531 2.579 0 1.424 1.138 2.579 2.531 2.579 1.616 0 2.224-1.162 2.316-1.762h-2.316v-1.4h3.855c.036.204.064.408.064.677.001 2.332-1.563 3.988-3.919 3.988zm9.917-3.5h-1.75v1.75h-1.167v-1.75h-1.75v-1.166h1.75v-1.75h1.167v1.75h1.75v1.166z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Quick Link Column --}}
            <div>
                <h3 class="text-lg font-semibold text-white mb-6 border-b-2 border-amber-500 pb-2 inline-block">Quick Link</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('about-us') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> About us
                    </a></li>
                    <li><a href="{{ url('admission') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Admission Enquiry
                    </a></li>
                    <li><a href="{{ url('contact-us') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Contact us
                    </a></li>
                    <li><a href="#" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Career
                    </a></li>
                    <li><a href="{{ url('blogs') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Blogs
                    </a></li>
                    <li><a href="#" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Privacy Policy
                    </a></li>
                </ul>
            </div>

            {{-- Connect with us Column --}}
            <div>
                <h3 class="text-lg font-semibold text-white mb-6 border-b-2 border-amber-500 pb-2 inline-block">Connect with us</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <p class="text-sm text-amber-100">104, M. G. Road, Joka, Kabar Danga, Thakurpukur, Kolkata, West Bengal 700104</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <p class="text-sm text-amber-100">info@ipsthakurpukur.com</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-500 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="text-sm text-amber-100">
                            <p>+91 82828 57771 / +91 82828 57772</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Additional Links Column --}}
            <div>
                <ul class="space-y-3 mb-6">
                    <li><a href="{{ url('parent.portal') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Parent Portal
                    </a></li>
                    <li><a href="{{ url('faculty.portal') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Faculty Portal
                    </a></li>
                    <li><a href="{{ url('pay.fee') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Pay Fee
                    </a></li>
                    <li><a href="{{ url('alumni.registration') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Alumni Registration
                    </a></li>
                    <li><a href="{{ url('media') }}" class="text-amber-100 hover:text-amber-300 transition-colors flex items-center gap-2">
                        <span class="text-amber-500">▸</span> Media
                    </a></li>
                </ul>
                
                <a href="{{ url('contact') }}" class="inline-block bg-amber-500 text-white px-6 py-2.5 rounded-md font-semibold hover:bg-amber-600 transition-colors">
                    Contact Us
                </a>
            </div>
        </div>

        {{-- Keywords Section --}}
        <!-- <div class="bg-[#2C1810] rounded-lg p-6 mb-8">
            <div class="text-xs text-amber-200 leading-relaxed">
                <span class="inline-block mr-2 mb-2">Best CBSE School In Howrah</span> |
                <span class="inline-block mx-2 mb-2">Admission open in Howrah</span> |
                <span class="inline-block mx-2 mb-2">CBSE school admission open in Howrah</span> |
                <span class="inline-block mx-2 mb-2">IPS Thakurpukur</span> |
                <span class="inline-block mx-2 mb-2">Top 5 best english medium school in howrah</span> |
                <span class="inline-block mx-2 mb-2">Top CBSE School In Howrah</span> |
                <span class="inline-block mx-2 mb-2">Top 5 best CBSE school in howrah</span> |
                <span class="inline-block mx-2 mb-2">Best english medium school in howrah</span> |
                <span class="inline-block mx-2 mb-2">CBSE School Near Shrirampur</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Komnagar</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Hindmotor</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Uttarpara</span> |
                <span class="inline-block mx-2 mb-2">CBSE School Near Tiklapara</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Shibpur</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Chatterjee Para</span> |
                <span class="inline-block mx-2 mb-2">CBSE School Near Chatterjee Para</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Kadamtala</span> |
                <span class="inline-block mx-2 mb-2">CBSE School Near Kadamtala</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Rishara</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Rabindra Sarani</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Guha Park</span> |
                <span class="inline-block mx-2 mb-2">Top CBSE School in Belur</span> |
                <span class="inline-block mx-2 mb-2">Top CBSE School in Ramrajatala</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Rishara</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Golabari</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Chakpara</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Ghuari</span> |
                <span class="inline-block mx-2 mb-2">Best CBSE School in Howrah AC</span>
            </div>
        </div> -->
        @include('partials.seo-keywords')

        {{-- Copyright Section --}}
        <div class="border-t border-amber-900/50 pt-6">
            <p class="text-center text-sm text-amber-200">
                ©{{ date('Y') }} Indian Public School Thakurpukur. All rights reserved | School website by 
                <a href="https://ranklays.com" target="_blank" class="font-semibold text-white hover:text-amber-300 transition-colors">RANKLAYS</a>
            </p>
        </div>
    </div>
</footer>