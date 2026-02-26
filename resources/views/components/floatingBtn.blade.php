<!-- Floating Admission Wrapper -->
<div id="admissionWrapper" class="fixed right-2 bottom-14 z-50">

    <!-- Floating Button -->
    <a href="javascript:void(0)"
       id="admissionBtn"
       class="block transition-all duration-500 ease-out hover:scale-105">
        <img src="{{ asset('gallery/admission-open.webp') }}"
             class="w-24 h-24 md:w-36 md:h-36 object-contain drop-shadow-lg"
             alt="Admission">
    </a>

    <!-- Admission Form -->
    <div id="admissionForm"
         class="absolute right-full bottom-0 mr-3
                w-[340px] max-w-[95vw]
                bg-gradient-to-br from-[#F39D00] to-[#E88D00] shadow-2xl
                transform translate-x-[120%] opacity-0 pointer-events-none scale-95
                transition-all duration-500 ease-out
                overflow-hidden">

        <!-- Header -->
        <div class="text-white text-center font-bold py-4 text-lg bg-black/10">
            Admission Enquiry
        </div>

        <!-- Form -->
        <form action="{{ route('send.admission.enquiry') }}" method="POST"
              class="p-5 space-y-3.5">
            @csrf

            <div>
                    <label class="block text-sm font-semibold mb-1">Name Of Student *</label>
                    <input type="text" name="student_name" required
                        placeholder="Full Name"
                        class="w-full bg-[#6B3A00] text-white placeholder-white/70 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Guardian’s Name *</label>
                    <input type="text" name="guardian_name" placeholder="Full Name of Guardian" required
                        class="w-full bg-[#6B3A00] text-white rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Select Class *</label>
                    <select name="grade" required
                        class="w-full bg-[#6B3A00] text-white rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        <option value="">– Select Class –</option>
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

                <div>
                    <label class="block text-sm font-semibold mb-1">Phone Number *</label>
                    <input type="text" name="phone" required placeholder="Phone No"
                        class="w-full bg-[#6B3A00] text-white placeholder-white/70 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-1">Email *</label>
                    <input type="email" name="email" required placeholder="Email"
                        class="w-full bg-[#6B3A00] text-white placeholder-white/70 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <div class="flex items-start gap-2 text-sm text-red-700 font-bold">
                    <input type="checkbox" name="consent" required class="mt-1">
                    <label>Consent for Admission Related Updates *</label>
                </div>

                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded-md w-40 mx-auto block transition">
                    Submit
                </button>
        </form>
    </div>
</div>