<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our team</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<footer class="relative w-full mt-10 rounded-t-3xl overflow-hidden shadow-lg">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 animate-gradient bg-gradient-to-r from-pink-200 via-dark-pink-200 to-blue-200"></div>

    <!-- Content -->
    <div class="relative z-10 px-6 sm:px-10 md:px-14 lg:px-20 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center md:text-left">

            <!-- About -->
            <div>
                <h2 class="text-2xl font-bold text-pink-600">Kidzee Kankarbagh</h2>
                <p class="mt-3 text-sm leading-6 max-w-xs mx-auto md:mx-0">
                    A joyful place for early education, creativity, and growth.
                    Learning through play, fun, and imagination!
                </p>
                <div class="mt-4 space-y-1 text-sm">
                    <p>📍 Little Angel English School, Kidzee Kankarbagh, A-56, Beside Biryani Mahal, Patna, Bihar 800020</p>
                    <p>📞 +91 9693743658, 9955294333</p>
                    <p>✉️ kidzee206@kidzee.com</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-blue-600 mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('ourstory') }}" class="hover:text-pink-600 transition">About Us</a></li>
                    <li><a href="{{ route('playgroup') }}" class="hover:text-pink-600 transition">Programs</a></li>
                    <li><a href="{{ route('facilitiescollinskids') }}#"
                            class="hover:text-pink-600 transition">Facilities</a></li>
                    <li><a href="{{route('gallerycollins')}}" class="hover:text-pink-600 transition">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-pink-600 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold text-yellow-600 mb-3">Follow Us</h3>
                <div class="flex justify-center md:justify-start space-x-5">
                    <a href="https://www.facebook.com/share/19HPiaeaSw/" target="_blank" class="text-blue-600 hover:scale-110 transition transform"><i
                            class="fab fa-facebook-f text-xl"></i></a>
                    <a href="https://wa.me/919693743658" target="_blank" class="text-green-500 hover:scale-110 transition transform"><i
                            class="fab fa-whatsapp text-xl"></i></a>
                </div>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold text-purple-600 mb-3">Subscribe</h3>
                <p class="text-sm mb-3">Get updates on events, programs, and activities!</p>
                <form class="flex">
                    <input type="email" placeholder="Enter your email"
                        class="w-full px-3 py-2 rounded-l-lg border border-gray-300 focus:outline-none">
                    <button type="submit" class="bg-pink-500 text-white px-4 rounded-r-lg hover:bg-pink-600 transition">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom -->
        <div class="mt-10 border-t border-gray-300 pt-4 text-center text-sm text-gray-700">
            © 2026 kidzee Kankarbagh. All Rights Reserved. | Privacy Policy | Design & Develop by
            <a href="https://www.filliptechnologies.com" target="_blank"
                class="text-blue-600 hover:underline font-medium">
                Fillip Technologies
            </a>
        </div>
    </div>
</footer>

<!-- Gradient Animation CSS -->
<style>
    @keyframes gradientWave {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-gradient {
        background-size: 400% 400%;
        animation: gradientWave 18s ease-in-out infinite;
    }
</style>

<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>