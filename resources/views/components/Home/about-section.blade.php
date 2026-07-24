<style>
    .comic-font {
        font-family: 'Comic Neue', cursive;
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .bounce {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .cursive-border {
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    }
</style>

<body class="bg-white">
    <section class=" shadow-md overflow-hidden w-full py-10 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="md:flex">

                <!-- Left side with images -->
                <div
                    class="md:w-2/5 relative p-6 bg-gradient-to-b from-blue-100 to-purple-100 flex flex-col justify-center rounded-xl">

                    <section class="w-full">
                        <img src="{{ asset('gallery/kidzee-4.jpeg') }}" alt="Happy Kid"
                            class="w-full h-[400px] object-cover rounded-xl floating mb-2">
                    </section>

                    <div class="text-center mb-6">
                        <h3 class="comic-font text-2xl text-purple-600 mb-3">Learning Through Play</h3>
                        <p class="text-gray-700">Nurturing Curiosity, Inspiring a Love for Learning.</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center bounce">
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                        <div class="w-12 h-12 bg-pink-200 rounded-full flex items-center justify-center bounce"
                            style="animation-delay: 0.5s;">
                            <i class="fas fa-heart text-red-500"></i>
                        </div>
                        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center bounce"
                            style="animation-delay: 1s;">
                            <i class="fas fa-smile text-green-600"></i>
                        </div>
                    </div>
                </div>

                <!-- Right side with content -->
                <div class="md:w-3/5 p-8">
                    <div class="mb-6">
                        <h2
                            class="comic-font text-4xl text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600 mb-4">
                            Welcome to Kidzee Kankarbagh!
                        </h2>

                    </div>

                    <p class="text-gray-700 mb-6 text-lg">
                        At Kidzee Kankarbagh, we nurture young minds through a perfect blend of love, care, creativity,
                        and experiential learning. Our child-friendly campus, engaging activities, and dedicated
                        educators create a happy environment where every child learns, explores, and grows with
                        confidence.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start">
                            <div class="bg-yellow-100 p-3 rounded-full mr-4">
                                <i class="fas fa-child text-2xl text-yellow-600"></i>
                            </div>
                            <div>
                                <h4 class="comic-font text-lg text-purple-700 mb-1">Fully Air-Conditioned Classrooms:
                                </h4>
                                <p class="text-gray-600 text-sm">Comfortable and stimulating learning spaces for your
                                    child.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-seedling text-2xl text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="comic-font text-lg text-purple-700 mb-1">Well-Trained & Caring Teachers:
                                </h4>
                                <p class="text-gray-600 text-sm">Our educators are experts in early childhood
                                    development</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-pink-100 p-3 rounded-full mr-4">
                                <i class="fas fa-palette text-2xl text-pink-600"></i>
                            </div>
                            <div>
                                <h4 class="comic-font text-lg text-purple-700 mb-1">Modern Play Equipment: </h4>
                                <p class="text-gray-600 text-sm">Safe and engaging indoor and outdoor play areas.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <i class="fas fa-users text-2xl text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="comic-font text-lg text-purple-700 mb-1">Child-Centric Curriculum:</h4>
                                <p class="text-gray-600 text-sm"> Learning through play, exploration, and fun
                                    activities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-5 rounded-2xl border border-blue-200">
                        <div class="flex items-center">
                            <div class="bg-white p-3 rounded-full shadow-md mr-4">
                                <i class="fas fa-quote-left text-2xl text-blue-500"></i>
                            </div>
                            <p class="comic-font text-blue-800 text-lg">
                                Every child is a different kind of flower, and all together make this world a beautiful
                                garden.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<!--  -->
<section class="py-16">
    <div class="max-w-6xl mx-auto bg-pink-100 rounded-3xl p-10 relative">

        <!-- Top Animal Decoration -->
        <img src="{{ asset('images/panda.png') }}" alt="Panda" class="absolute -top-12 right-10 w-28">

        <!-- Bottom Left Decoration -->
        <img src="{{ asset('images/tiger.png') }}" alt="Tiger" class="absolute -bottom-6 left-6 w-20">

        <div class="grid md:grid-cols-3 gap-10 text-center relative z-10">

            <!-- Stat 1: Happy Children -->
            <div class="border-r border-gray-300 last:border-none">
                <h3 class="text-sky-600 text-5xl font-extrabold mb-4">10,000+</h3>
                <h4 class="text-gray-800 font-semibold text-lg mb-2">Happy Children</h4>
                <p class="text-gray-600 text-sm">
                    Over 1,0000 children have blossomed in a joyful, safe, and creative learning environment.
                </p>
            </div>

            <!-- Stat 2: Hours of Learning -->
            <div class="border-r border-gray-300 last:border-none">
                <h3 class="text-yellow-500 text-5xl font-extrabold mb-4">80,000+</h3>
                <h4 class="text-gray-800 font-semibold text-lg mb-2">Hours of Learning</h4>
                <p class="text-gray-600 text-sm">
                    We have delivered over 80,000 hours of interactive and play-based learning experiences.
                </p>
            </div>

            <!-- Stat 3: Awards Received -->
            <div>
                <h3 class="text-pink-500 text-5xl font-extrabold mb-4">25</h3>
                <h4 class="text-gray-800 font-semibold text-lg mb-2">Awards Received</h4>
                <p class="text-gray-600 text-sm">
                    Recognized nationally for excellence in early childhood education and innovative programs.
                </p>
            </div>

        </div>
    </div>
</section>