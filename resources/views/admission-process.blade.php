<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Process | Indian Public School Thakurpukur</title>
    @vite('resources/css/app.css')

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fonts css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>
<body class="font-[Cinzel]">
    @include('components.header')
    @include('components.floatingBtn')
    @include('components.e-brochure')
    @include('components.popup')
    @include('components.scrollToTop')
    @include('components.social-media-float')
    @include('components.innerpages-banner')

    {{-- Admission Process Section --}}
<section class="py-16 bg-[#fffaf3]">
    <div class="max-w-7xl mx-auto px-4 lg:px-8">

        {{-- Section Heading --}}
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-[#4b2e1f]">
                Admission Process – Academic Session 2026–27
            </h2>
            <p class="mt-4 max-w-3xl mx-auto text-gray-700 leading-relaxed">
                Welcome to <strong>Indian Public School, Howrah</strong>. We invite applications for admission from
                <strong>Nursery to Class XII</strong>. Our admission process is designed to be transparent,
                child-friendly, and supportive for parents.
            </p>
        </div>

        {{-- Why Choose IPS --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-6">Why Choose IPS Howrah?</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-gray-700">
                <li>✔ CBSE Curriculum with a focus on holistic development</li>
                <li>✔ Smart classrooms and experienced faculty</li>
                <li>✔ Well-equipped laboratories, library & digital resources</li>
                <li>✔ Sports, music, dance & co-curricular activities</li>
                <li>✔ Safe campus with CCTV surveillance & transport facility</li>
                <li>✔ Regular Parent–Teacher interaction and academic updates</li>
            </ul>
        </div>

        {{-- Classes Available --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-6">Classes Available for Admission</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700">
                <div>
                    <p><strong>Pre-Primary:</strong> Nursery, LKG, UKG</p>
                    <p class="mt-2"><strong>Primary:</strong> Class I to V</p>
                    <p class="mt-2"><strong>Middle School:</strong> Class VI to VIII</p>
                </div>
                <div>
                    <p><strong>Secondary:</strong> Class IX</p>
                    <p class="mt-2"><strong>Senior Secondary:</strong> Class XI</p>
                    <p class="mt-2"><strong>Streams Offered:</strong> Science, Commerce & Humanities</p>
                </div>
            </div>
        </div>

        {{-- Admission Steps --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-8">Admission Process</h3>

            <div class="space-y-6 text-gray-700">
                <div>
                    <h4 class="font-semibold text-lg text-[#4b2e1f]">Step 1: Collect the Admission Form</h4>
                    <p>Admission forms are available at the school office on all working days between
                        <strong>9:00 AM – 2:00 PM</strong>, or can be filled online through our official website.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg text-[#4b2e1f]">Step 2: Submit the Filled Form</h4>
                    <p>The completed form along with all required documents must be submitted before the
                        specified deadline.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold text-lg text-[#4b2e1f]">Step 3: Interaction / Written Test</h4>
                    <ul class="list-disc ml-6">
                        <li>Nursery to Class I: Child and Parent Interaction</li>
                        <li>Class II onwards: Written test in English, Mathematics & GK (as applicable)</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-lg text-[#4b2e1f]">Step 4: Admission Confirmation</h4>
                    <p>
                        Selected candidates will be informed via <strong>SMS, phone call, or email</strong>.
                        Parents must complete admission formalities within the given timeframe.
                    </p>
                </div>
            </div>
        </div>

        {{-- Documents Required --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-6">Documents Required at the Time of Admission</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-700">
                <li>✔ Duly filled Admission Form</li>
                <li>✔ 2 passport-size photographs of the child</li>
                <li>✔ 1 passport-size photograph of each parent</li>
                <li>✔ Birth Certificate (original & photocopy)</li>
                <li>✔ Aadhaar Card of the child (if available)</li>
                <li>✔ Previous class report card (Class II onwards)</li>
                <li>✔ Transfer Certificate (TC) from previous school</li>
                <li>✔ Caste Certificate (if applicable)</li>
                <li>✔ Address proof of parents</li>
            </ul>
        </div>

        {{-- Age Criteria --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-6">Age Criteria (As on 1st April 2026)</h3>
            <ul class="space-y-2 text-gray-700">
                <li>Nursery: 3 years and above</li>
                <li>LKG: 4 years and above</li>
                <li>UKG: 5 years and above</li>
                <li>Class I: 6 years and above</li>
            </ul>
        </div>

        {{-- Fee & Scholarship --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-6">Fee Details & Scholarships</h3>
            <p class="text-gray-700 mb-4">
                For detailed information regarding the fee structure, kindly visit our
                <strong>Fee Structure Page</strong>. Admissions are confirmed only after fee payment within
                the stipulated deadline.
            </p>
            <p class="text-gray-700">
                IPS Howrah offers limited scholarships and fee concessions based on academic performance,
                financial need, sibling enrollment, and special talents in sports or arts.
            </p>
        </div>

        {{-- Transport --}}
        <div class="mb-16">
            <h3 class="text-2xl font-semibold text-[#4b2e1f] mb-4">School Transport Facility</h3>
            <p class="text-gray-700">
                School transport is available on selected routes. Parents are advised to confirm availability
                at the time of admission. Separate transport charges apply.
            </p>
        </div>

        {{-- Contact --}}
        <div class="bg-[#4b2e1f] text-white rounded-xl p-8 text-center">
            <h3 class="text-2xl font-semibold mb-4">Contact Us for Admissions</h3>
            <p>Indian Public School, Howrah</p>
            <p class="mt-2">📞 +91 82828 57771 / +91 82828 57772</p>
            <p class="mt-1">📧 info@ipsthakurpukur.com</p>
            <p class="mt-1">🌐 <a href="https://ipsthakurpukur.com/" class="pointer">www.ipthakurpukur.com</a></p>
        </div>

    </div>
</section>




    @include('components.footer')
    @vite('resources/js/app.js')
    
</body>
</html>