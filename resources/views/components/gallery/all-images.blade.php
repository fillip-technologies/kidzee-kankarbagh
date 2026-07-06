<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidzee School</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- ✅ Custom CSS --}}


</head>
<section class="py-20  relative overflow-hidden">
    <!-- Decorative Background Circles -->
    <div class="absolute -top-10 -left-10 w-40 h-40 bg-[#FFD93D] opacity-30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-60 h-60 bg-[#FF6B81] opacity-20 rounded-full blur-2xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <!-- Title -->
        <h2
            class="text-5xl font-extrabold mb-4 bg-gradient-to-r from-[#FF6B81] to-[#FFD93D] bg-clip-text text-transparent">
            Our Lovely Moments
        </h2>
        <p class="text-gray-700 text-lg mb-12 max-w-2xl mx-auto">
            Peek into the playful, joyful, and creative world of our little learners at Kidzee School!
        </p>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            @foreach ($allgallery as $images)
                @foreach ($images->image_path as $img)
                    <div
                        class="group relative overflow-hidden rounded-3xl shadow-lg bg-white transform hover:-translate-y-2 transition-all duration-500">
                        <img src="{{ asset($img) }}" alt="Kidzee Kids Gallery"
                            class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out">
                        <div
                            class="absolute inset-0 bg-[#FF6B81]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                            <span class="text-white font-semibold text-base">Kidzee Kids ❤️</span>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>