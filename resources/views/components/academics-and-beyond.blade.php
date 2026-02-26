<section class="w-full py-20 bg-white mt-10">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Heading -->
    <h2 class="text-center text-5xl font-extrabold mb-16 text-amber-900">
      Academics & Beyond
    </h2>

    <!-- Main Wrapper -->
    <div class="grid grid-cols-12 w-full overflow-hidden rounded-xl">

      <!-- LEFT COLUMN -->
      <div class="col-span-12 lg:col-span-4 flex flex-col">

        <!-- Top -->
        <div class="relative h-[260px]">
          <img src="{{ asset('gallery/academic.png') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 right-0 bg-blue-600 text-white px-6 py-4 flex justify-between items-center">
            <span class="font-semibold text-lg">Unparalleled Academic Success</span>
            <span class="text-2xl">→</span>
          </div>
        </div>

        <!-- Bottom -->
        <div class="relative h-[260px]">
          <img src="{{ asset('gallery/teaching-method.png') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 right-0 bg-amber-600 text-white px-6 py-4 flex justify-between items-center">
            <span class="font-semibold text-lg">Highly Experienced Educators</span>
            <span class="text-2xl">→</span>
          </div>
        </div>

      </div>

      <!-- CENTER COLUMN -->
      <div class="col-span-12 lg:col-span-4 relative bg-yellow-400 flex items-center justify-center text-center px-10">

        <!-- Left Triangle -->
        <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-full
                    w-0 h-0 border-t-[60px] border-b-[60px] border-r-[60px]
                    border-t-transparent border-b-transparent border-r-yellow-400">
        </div>

        <!-- Right Triangle -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-full
                    w-0 h-0 border-t-[60px] border-b-[60px] border-l-[60px]
                    border-t-transparent border-b-transparent border-l-yellow-400 z-10">
        </div>

        <!-- Content -->
        <div>
          <p class="text-gray-900 text-base leading-relaxed mb-8">
            Indian Public School, Thakurpukur stands on the ethos of nurturing
            every child’s potential by transforming education into a purposeful
            and engaging journey. We prepare students with academic excellence,
            values, and global exposure to pursue higher education confidently.
          </p>

          <a href="#"
             class="inline-block bg-amber-900 hover:bg-amber-700 transition ease pointer text-white px-8 py-3 rounded-lg font-semibold">
            View More
          </a>
        </div>

      </div>

      <!-- RIGHT COLUMN -->
      <div class="col-span-12 lg:col-span-4 flex flex-col">

        <!-- Top -->
        <div class="relative h-[260px]">
          <img src="{{ asset('gallery/student-archive.png') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 right-0 bg-green-600 text-white px-6 py-4 flex justify-between items-center">
            <span class="font-semibold text-lg">Awards & Accolades</span>
            <span class="text-2xl">→</span>
          </div>
        </div>

        <!-- Bottom -->
        <div class="relative h-[260px]">
          <img src="{{ asset('gallery/infrastructure.png') }}"
               class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 right-0 bg-red-600 text-white px-6 py-4 flex justify-between items-center">
            <span class="font-semibold text-lg">Neuropsychological Evaluation Cell</span>
            <span class="text-2xl">→</span>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
