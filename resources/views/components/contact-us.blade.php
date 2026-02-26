<div class="w-full bg-[#fff1e4] py-16 px-6 md:px-20 font-[Cinzel]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 text-amber-900">

        <!-- Left Section -->
        <div class="space-y-10">
            <!-- Title -->
            <h1 class="text-3xl font-bold tracking-wide uppercase">Contact Us</h1>

            <!-- Address -->
            <div class="space-y-3">
                <div class="flex items-start gap-3 text-amber-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-1 text-amber-900" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 11c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 22s8-4.5 8-12a8 8 0 10-16 0c0 7.5 8 12 8 12z" />
                    </svg>
                    <div>
                        <h2 class="font-bold text-lg">Address</h2>
                        <p class="text-md leading-relaxed mt-1 font-semibold">
                            104, M. G. Road, Joka, Kabar Danga, Thakurpukur, Kolkata - 700104 Opposite to Thakurpukur Prantik Phase - II
                        </p>
                    </div>
                </div>
            </div>

            <hr class="border-gray-300">

            <!-- Message Info -->
            <div class="space-y-4">
                <h2 class="font-semibold text-lg">Send Us a Message</h2>
                <p class="text-md font-semibold leading-relaxed text-amber-900">
                    Here’s how you can contact us for any questions or concerns
                    related to admissions or the curriculum:
                </p>

                <!-- Email -->
                <div class="flex items-center gap-3 text-amber-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-900" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 4h16v16H4V4zm8 7l8-5m-16 0l8 5m0 0l8 5m-8-5l-8 5" />
                    </svg>
                    <span class="text-md font-semibold">info@ipsthakurpukur.com</span>
                </div>

                <!-- Phone -->
                <div class="flex items-center gap-3 text-amber-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-900" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 5l2-2c.6-.6 1.4-.6 2 0l3 3c.6.6.6 1.4 0 2L8 10c1 4 4 7 8 8l2-2c.6-.6 1.4-.6 2 0l3 3c.6.6.6 1.4 0 2l-2 2c-.6.6-1.4.6-2 0C11 23 1 13 1 4c0-.6.4-1 1-1z" />
                    </svg>
                    <span class="text-md font-semibold">+91 82828 57771 / +91 82828 57772</span>
                </div>

                <!-- Time -->
                <div class="flex items-center gap-3 text-amber-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-900" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 8v4l2 2m6-2a8 8 0 11-16 0 8 8 0 0116 0z" />
                    </svg>
                    <span class="text-md font-semibold">08.00am — 05.00pm</span>
                </div>
            </div>

            <!-- Instagram -->
            <p class="text-md mt-6 font-semibold">
                Follow us on Instagram
                <a href="#" class="text-blue-700 underline">@ipsthakurpukur</a>
            </p>
        </div>

        <!-- Right Section: Form -->
        <div class="space-y-8">
            <form action="" method="POST" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium mb-1">Name <span class="text-red-600">*</span></label>
                    <input type="text"
                           name="name"
                           class="w-full border border-amber-400 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-400 text-sm">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium mb-1">Email <span class="text-red-600">*</span></label>
                    <input type="email"
                           name="email"
                           class="w-full border border-amber-400 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-400 text-sm">
                </div>

                <!-- Message -->
                <div>
                    <label class="block text-sm font-medium mb-1">Message <span class="text-red-600">*</span></label>
                    <textarea name="message" rows="6"
                        class="w-full border border-amber-400 rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-400 text-sm"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-amber-900 text-white hover:bg-amber-400 text-sm px-5 py-2 rounded shadow-sm transition">
                    Submit Form
                </button>
            </form>
        </div>

    </div>
</div>
