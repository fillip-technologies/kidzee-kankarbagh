<section class="bg-white py-12">
    <div class="container mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- Left Side (Image + Circle) -->
            <div class="relative flex justify-center">
                <!-- Pink circle background -->
                <div class="absolute top-1/2 -translate-y-1/2 w-72 h-72 bg-pink-200 rounded-full -z-10"></div>

                <!-- Kid Image -->
                <img src="{{ asset('images/kidzee-school.jpg') }}"
                    alt="Happy Kid"
                    class="relative z-10 w-full rounded-lg">


                <!-- Decorative Elements -->
                <div class="absolute top-6 left-6 text-yellow-400 text-4xl">
                    ☀️
                </div>
                <div class="absolute bottom-8 right-10 text-orange-400 text-3xl">
                    ✨
                </div>
            </div>

            <!-- Right Side (Content) -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-orange-500 mb-6">Why Choose Us?</h2>

                <ul class="space-y-4">
                    <li class="flex items-center bg-blue-100 rounded-lg p-3 shadow-sm">
                        <i class="fas fa-check-circle text-blue-500 text-xl mr-3"></i>
                        <span class="text-gray-800 font-medium">Home-Like Secure & Nurturing Campus</span>
                    </li>

                    <li class="flex items-center bg-blue-100 rounded-lg p-3 shadow-sm">
                        <i class="fas fa-check-circle text-blue-500 text-xl mr-3"></i>
                        <span class="text-gray-800 font-medium">Creative Arts & Music Exploration</span>
                    </li>

                    <li class="flex items-center bg-blue-100 rounded-lg p-3 shadow-sm">
                        <i class="fas fa-check-circle text-blue-500 text-xl mr-3"></i>
                        <span class="text-gray-800 font-medium">Organic & Freshly Prepared Snacks</span>
                    </li>

                    <li class="flex items-center bg-blue-100 rounded-lg p-3 shadow-sm">
                        <i class="fas fa-check-circle text-blue-500 text-xl mr-3"></i>
                        <span class="text-gray-800 font-medium">Active Parent-Teacher Partnerships</span>
                    </li>

                    <li class="flex items-center bg-blue-100 rounded-lg p-3 shadow-sm">
                        <i class="fas fa-check-circle text-blue-500 text-xl mr-3"></i>
                        <span class="text-gray-800 font-medium">Enriching After-School Programs</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>