
<div id="loader" class="fixed inset-0 flex items-center justify-center z-[9999] bg-gradient-to-br from-amber-50 via-white to-amber-100">
    <!-- Animated background circles -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-20 w-64 h-64 bg-amber-200/30 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-amber-300/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div id="card"
        class="relative bg-white p-12 rounded-3xl shadow-2xl text-center max-w-lg w-11/12 opacity-0 translate-y-4 transition-all duration-700 border-2 border-amber-100">
        
        <!-- Decorative corner elements -->
        <div class="absolute top-0 left-0 w-20 h-20 border-t-4 border-l-4 border-amber-900 rounded-tl-3xl opacity-20"></div>
        <div class="absolute bottom-0 right-0 w-20 h-20 border-b-4 border-r-4 border-amber-900 rounded-br-3xl opacity-20"></div>
        
        <!-- Logo container with glow effect -->
        <div class="relative mb-6">
            <div class="absolute inset-0 bg-amber-400/30 blur-2xl rounded-full"></div>
            <div class="relative bg-gradient-to-br from-amber-900 to-amber-700 p-6 rounded-2xl inline-block shadow-xl">
                <img src="{{ asset('gallery/indian-public-school-new-logo.png') }}" class="w-16 h-16 mx-auto drop-shadow-2xl" />
            </div>
        </div>

        <!-- School name with gradient -->
        <div id="schoolName" class="text-transparent bg-clip-text bg-gradient-to-r from-amber-900 via-amber-800 to-amber-900 font-bold text-3xl mb-4 leading-relaxed"></div>

        <!-- Decorative divider -->
        <div class="flex items-center justify-center gap-2 mb-4 opacity-0" id="divider">
            <div class="w-12 h-0.5 bg-gradient-to-r from-transparent via-amber-900 to-transparent"></div>
            <div class="w-2 h-2 rounded-full bg-amber-900"></div>
            <div class="w-12 h-0.5 bg-gradient-to-r from-transparent via-amber-900 to-transparent"></div>
        </div>

        <!-- Quote text -->
        <div id="quote" class="text-amber-900/80 text-base italic font-medium opacity-0 translate-y-2 transition-all duration-700 leading-relaxed"></div>

        <!-- Animated dots -->
        <div class="flex gap-2 justify-center mt-6">
            <div class="w-3 h-3 rounded-full bg-amber-200 dot transition-all duration-500"></div>
            <div class="w-3 h-3 rounded-full bg-amber-200 dot transition-all duration-500" style="animation-delay: 0.1s;"></div>
            <div class="w-3 h-3 rounded-full bg-amber-200 dot transition-all duration-500" style="animation-delay: 0.2s;"></div>
        </div>
    </div>
</div>