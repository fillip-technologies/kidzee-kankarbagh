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
                    <p class="text-gray-700 italic">“Our big thank you to each and every teacher, administration and
                        support staff for running such a wonderful school.”</p>
                    <h4 class="mt-3 font-bold text-pink-600">- Naincy Priya</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Giraffe">
                    <p class="text-gray-700 italic">“This school is really great for development of kids.”</p>
                    <h4 class="mt-3 font-bold text-blue-600">–
                        Sonam Rathore</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Balloon">
                    <p class="text-gray-700 italic">“Very good and helpfull”</p>
                    <h4 class="mt-3 font-bold text-yellow-600">– Jayanti</h4>
                </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                    <img src="{{ asset('images/panda.png') }}" class="w-12 h-12 mx-auto mb-3" alt="Elephant">
                    <p class="text-gray-700 italic">“This is the best play school of Kankarbagh, its specialty is that
                        there are many schools in Kankarbagh but no one has ground near it. There is 4000 square feet
                        ground near the F sector branch which is the best among all.”</p>
                    <h4 class="mt-3 font-bold text-pink-600">– Srcs Patna</h4>
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