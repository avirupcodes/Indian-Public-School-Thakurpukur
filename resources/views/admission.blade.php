<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admission Enquiry | IPS Thakurpukur</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { scrollbar-width: none; }
    </style>
</head>

<body class="bg-[#fffaf3] font-[Cinzel]">

@include('components.header')
@include('components.floatingBtn')
@include('components.e-brochure')
@include('components.popup')
@include('components.scrollToTop')
@include('components.social-media-float')

<section class="relative bg-cover bg-center w-full h-[50vh] md:h-screen lg:h-screen mt-10 " style="background-image: url('{{ asset('gallery/ips-thakurpukur-inner-pages.png') }}'); clip-path: ellipse(70% 50% at 50% 36%);">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-amber-600/30 to-amber-900/70"></div>
        

    </section>

<!-- ================= PAGE TITLE ================= -->
<section class="py-6 border-b text-center border-yellow-300">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-[#5a2d0c]">
            Admission Open For CBSE School in Howrah
        </h1>
        <p class="text-sm text-[#7a4a2a] mt-1">
            Home › Admission Open For CBSE School in Howrah
        </p>
    </div>
</section>

<!-- ================= MAIN LAYOUT ================= -->
<section class="max-w-7xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-8">

    <!-- ============ LEFT CONTENT ============ -->
    <div class="lg:col-span-2 text-[#5a2d0c] text-xl font-semibold leading-7 space-y-4">

        <p>
            <strong>Indian Public School, Thakurpukur</strong> is a reputed English medium CBSE school
            committed to academic excellence and holistic student development.
        </p>

        <p>
            The school follows the <strong>CBSE curriculum</strong>, encouraging conceptual learning,
            creativity, critical thinking, and preparation for competitive examinations.
        </p>

        <p>
            IPS offers modern infrastructure including smart classrooms, science and computer labs,
            a rich library, and safe campus facilities.
        </p>

        <p>
            Co-curricular activities such as sports, music, dance, art, and cultural programs help
            nurture confident, disciplined, and responsible individuals.
        </p>

        <p>
            Special emphasis is placed on moral values, leadership skills, and strong English
            communication from an early age.
        </p>

        <p class="font-semibold text-[#c28a00]">
            Admission Open for CBSE School in Howrah — Limited Seats Available!
        </p>

    </div>

    <!-- ============ RIGHT FORM ============ -->
    <!-- ============ RIGHT FORM ============ -->
<div class="lg:col-span-1">
    <div class="sticky top-28 bg-white shadow-xl rounded-lg overflow-hidden border border-yellow-300">

        <!-- Header -->
        <div class="bg-[#5a2d0c] text-yellow-300 text-center py-3 font-semibold tracking-wide">
            Admission Enquiry
        </div>

        <!-- FORM -->
        <form action="{{ route('send.admission.enquiry') }}"
              method="POST"
              class="p-5 space-y-4 text-sm">
            @csrf

            <!-- Student Name -->
            <div>
                <label class="block mb-1 text-[#5a2d0c] font-medium">
                    Student’s Name *
                </label>
                <input type="text" name="student_name" required
                       class="w-full px-3 py-2 rounded bg-gray-100 focus:bg-gray-200 outline-none">
            </div>

            <!-- Guardian Name -->
            <div>
                <label class="block mb-1 text-[#5a2d0c] font-medium">
                    Guardian’s Name *
                </label>
                <input type="text" name="guardian_name" required
                       class="w-full px-3 py-2 rounded bg-gray-100 focus:bg-gray-200 outline-none">
            </div>

            <!-- Phone -->
            <div>
                <label class="block mb-1 text-[#5a2d0c] font-medium">
                    Phone Number *
                </label>
                <input type="text" name="phone" required placeholder="+91"
                       class="w-full px-3 py-2 rounded bg-gray-100 focus:bg-gray-200 outline-none">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 text-[#5a2d0c] font-medium">
                    Email *
                </label>
                <input type="email" name="email" required
                       class="w-full px-3 py-2 rounded bg-gray-100 focus:bg-gray-200 outline-none">
            </div>

            <!-- Grade -->
            <div>
                <label class="block mb-1 text-[#5a2d0c] font-medium">
                    Grade for Admission *
                </label>
                <select name="grade" required
                        class="w-full px-3 py-2 rounded bg-gray-100 focus:bg-gray-200 outline-none">
                    <option value="">Select Class</option>
                    <option>Nursery</option>
                    <option>KG</option>
                    <option>Class 1</option>
                    <option>Class 2</option>
                    <option>Class 3</option>
                    <option>Class 4</option>
                    <option>Class 5</option>
                    <option>Class 6</option>
                    <option>Class 7</option>
                    <option>Class 8</option>
                    <option>Class 9</option>
                    <option>Class 11</option>
                </select>
            </div>

            <!-- Consent -->
            <div class="flex items-start gap-2 text-xs text-[#5a2d0c]">
                <input type="checkbox" name="consent" required class="mt-1">
                <span>Consent for Admission Related Updates *</span>
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-[#5a2d0c] font-semibold py-2 rounded transition">
                Submit
            </button>

        </form>
    </div>
</div>


</section>

@include('components.footer')
@vite('resources/js/app.js')

</body>
</html>
