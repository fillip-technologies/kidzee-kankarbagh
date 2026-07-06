<section class="relative bg-gradient-to-b from-pink-100  py-16 px-4 overflow-hidden">
    <!-- Decorative Clouds -->
    <div class="absolute top-5 left-10 w-24 h-16 bg-white rounded-full opacity-70"></div>
    <div class="absolute top-10 left-20 w-32 h-20 bg-white rounded-full opacity-70"></div>
    <div class="absolute top-20 right-10 w-28 h-18 bg-white rounded-full opacity-70"></div>

    <!-- Section Title -->
    <h2 class="text-center text-4xl font-bold text-pink-600 mb-12">💬 Parents’ Love for Kidzee 💕</h2>

    <!-- Reviews Carousel -->
    <div class="relative max-w-6xl mx-auto overflow-hidden">
        <div id="reviewSlider" class="flex transition-transform duration-500">
            <!-- Review Cards -->
            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Panda">
                    <p class="text-gray-700 italic">“Amazing teachers and playful learning environment!”</p>
                    <h4 class="mt-3 font-bold text-pink-600">– Mrs. Sharma</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Giraffe">
                    <p class="text-gray-700 italic">“Safe, colorful, and fun classrooms. My child loves it.”</p>
                    <h4 class="mt-3 font-bold text-blue-600">– Mr. Khan</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Balloon">
                    <p class="text-gray-700 italic">“The staff is so caring and helpful every day.”</p>
                    <h4 class="mt-3 font-bold text-yellow-600">– Mrs. Verma</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Elephant">
                    <p class="text-gray-700 italic">“My daughter feels excited to go to school daily.”</p>
                    <h4 class="mt-3 font-bold text-pink-600">– Mrs. Gupta</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Lion">
                    <p class="text-gray-700 italic">“Kidzee has boosted my child’s confidence a lot.”</p>
                    <h4 class="mt-3 font-bold text-blue-600">– Mr. Ramesh</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Monkey">
                    <p class="text-gray-700 italic">“Very safe transport and excellent supervision.”</p>
                    <h4 class="mt-3 font-bold text-yellow-600">– Mrs. Singh</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Penguin">
                    <p class="text-gray-700 italic">“The creativity workshops are my son’s favorite!”</p>
                    <h4 class="mt-3 font-bold text-pink-600">– Mr. Kumar</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Tiger">
                    <p class="text-gray-700 italic">“My child is learning with fun and joy every day.”</p>
                    <h4 class="mt-3 font-bold text-blue-600">– Mrs. Yadav</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Fox">
                    <p class="text-gray-700 italic">“Teachers focus on every child personally. Great school!”</p>
                    <h4 class="mt-3 font-bold text-yellow-600">– Mr. Ali</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Bunny">
                    <p class="text-gray-700 italic">“Best early education experience for my little one.”</p>
                    <h4 class="mt-3 font-bold text-pink-600">– Mrs. Das</h4>
                </div>
            </div>
        </div>

        <!-- Slider Buttons -->
        <div class="flex justify-center gap-4 mt-8">
            <button onclick="prevReview()"
                class="bg-pink-400 hover:bg-pink-500 text-white px-4 py-2 rounded-full">←</button>
            <button onclick="nextReview()"
                class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-full">→</button>
        </div>
    </div>
</section>