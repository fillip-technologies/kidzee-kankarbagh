<section class="relative min-h-[60vh] sm:min-h-[70vh] md:min-h-[80vh] flex flex-col justify-center items-center sm:items-start overflow-hidden px-4 sm:px-8 md:px-20 py-10 sm:py-0">

    <!-- Left Content -->
    <div class="relative z-30 max-w-xl text-center sm:text-left">
        <h2 class="text-2xl sm:text-4xl md:text-5xl font-bold text-pink-600 mb-4 sm:mb-6">
            {{ $title }}
        </h2>
        <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-3 sm:mb-4">
            {{ $para1 }}
        </p>
        <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
            {{ $para2 }}
        </p>
    </div>

    <!-- First Corner Shape (Background) -->
    <img src="{{ asset('images/images.png') }}" alt="Corner Shape 1"
        class="absolute top-0 right-0 w-[250px] sm:w-[500px] md:w-[700px] lg:w-[900px] h-auto pointer-events-none select-none z-10">

    <!-- Second Corner Shape (Dynamic Image) -->
    @php
        if (!empty($secondImage) && file_exists(public_path('gallery/' . $secondImage))) {
            $secondImagePath = 'gallery/' . $secondImage;
        } else {
            $secondImagePath = 'images/' . $secondImage;
        }
    @endphp
    <img src="{{ asset($secondImagePath) }}" alt="Corner Shape 2"
        class="absolute top-10 sm:top-28 md:top-32 right-0 w-[120px] sm:w-[250px] md:w-[350px] lg:w-[500px] h-auto pointer-events-none select-none z-20">

</section>
