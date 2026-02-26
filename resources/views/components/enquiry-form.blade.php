<!-- Header -->
        <div class="bg-[#6B3A00] text-center py-8" style="clip-path: polygon(100% 0px, 100% 90%, 9% 70%, 0px 100%, 0px 0px);">
            <h2 class="text-yellow-400 font-bold tracking-wide uppercase text-2xl">
                Admission Enquiry
            </h2>
        </div>

        <!-- Form Body -->
        <div class="p-6 font-semibold">

            <form action="{{ route('send.admission.enquiry') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-[#6B3A00] mb-1">
                        Student’s Name *
                    </label>
                    <input type="text" name="student_name" required
                        class="w-full bg-gray-100 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#6B3A00] mb-1">
                        Guardian’s Name *
                    </label>
                    <input type="text" name="guardian_name" required
                        class="w-full bg-gray-100 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#6B3A00] mb-1">
                        Phone Number *
                    </label>
                    <input type="tel" name="phone" placeholder="+91" required
                        class="w-full bg-gray-100 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#6B3A00] mb-1">
                        Email *
                    </label>
                    <input type="email" name="email" required
                        class="w-full bg-gray-100 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div>
                    <label class="block text-sm font-medium text-[#6B3A00] mb-1">
                        Grade for Admission *
                    </label>
                    <select name="grade" required
                        class="w-full bg-gray-100 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <option value="">Select Class</option>
                        <option>Nursery</option>
                        <option>KG</option>
                        <option>Class I</option>
                        <option>Class II</option>
                        <option>Class III</option>
                        <option>Class IV</option>
                        <option>Class V</option>
                        <option>Class VI</option>
                        <option>Class VII</option>
                        <option>Class VIII</option>
                        <option>Class IX</option>
                        <option>Class X</option>
                        <option>Class XI</option>
                        <option>Class XII</option>
                    </select>
                </div>

                <div class="flex items-start gap-2 text-sm text-[#6B3A00]">
                    <input type="checkbox" name="consent" required class="mt-1">
                    <label>Consent for Admission Related Updates *</label>
                </div>

                <button type="submit"
                    class="w-full bg-yellow-400 hover:bg-yellow-500 text-[#6B3A00] font-semibold py-2 rounded transition">
                    SUBMIT
                </button>

            </form>

        </div>
        <div class="bg-amber-900 h-2 w-full"></div>