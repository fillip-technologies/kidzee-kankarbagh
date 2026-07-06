<section class="bg-white pt-20 px-4">
    <div class="text-center mb-8">
        <p class="text-sm text-pink-500 tracking-wider uppercase mb-2">
            SEE AND FEEL IT
        </p>
        <h1 class="text-4xl md:text-5xl text-sky-600 font-bold">
            Gallery Highlights
        </h1>
    </div>
@php
    // Initialize arrays
    $republicImages = [];
    $christmasImages = [];
    $republicTitle = "Republic Day Celebration";
    $christmasTitle = "Christmas Carnival";

    // Separate Republic Day and Christmas images
    foreach ($galleryImg as $all) {
        if ($all->gallery_type == 'republicday') {
            $republicImages = array_slice($all->image_path, 0, 2);
        } elseif ($all->gallery_type == 'christmas') {
            $christmasImages = array_slice($all->image_path, 0, 2);
        }
    }

    // Fallback if no specific categories are uploaded
    if (empty($republicImages) && empty($christmasImages)) {
        $allImagesList = [];
        foreach ($galleryImg as $all) {
            if ($all->image_path && is_array($all->image_path)) {
                $allImagesList = array_merge($allImagesList, $all->image_path);
            }
        }
        $republicImages = array_slice($allImagesList, 0, 2);
        $christmasImages = array_slice($allImagesList, 2, 2);
        
        $republicTitle = "Fun Activities";
        $christmasTitle = "Joyful Learning";
    }

    // Define default fallback images
    $defaultRepublic = ['gallery/kidzee-1.jpeg', 'gallery/kidzee-2.jpeg'];
    $defaultChristmas = ['gallery/kidzee-3.jpeg', 'gallery/kidzee-4.jpeg'];

    // Ensure we have at least 2 images for each section (fallback if missing/broken on disk)
    $finalRepublicImages = [];
    for ($i = 0; $i < 2; $i++) {
        $path = isset($republicImages[$i]) ? $republicImages[$i] : null;
        if ($path && file_exists(public_path($path))) {
            $finalRepublicImages[] = $path;
        } else {
            $finalRepublicImages[] = $defaultRepublic[$i];
        }
    }

    $finalChristmasImages = [];
    for ($i = 0; $i < 2; $i++) {
        $path = isset($christmasImages[$i]) ? $christmasImages[$i] : null;
        if ($path && file_exists(public_path($path))) {
            $finalChristmasImages[] = $path;
        } else {
            $finalChristmasImages[] = $defaultChristmas[$i];
        }
    }

    $maxCount = 2;
@endphp

<div class="max-w-6xl mx-auto py-12 px-4 grid grid-cols-1 md:grid-cols-2 gap-4">

    @for ($i = 0; $i < $maxCount; $i++)

        {{-- Republic Day Section --}}
        @if (isset($finalRepublicImages[$i]))
            <div class="flex flex-col md:flex-row bg-white overflow-hidden rounded-xl shadow-md">
                <div class="w-full md:w-1/2 h-64 overflow-hidden group">
                    <img src="{{ asset($finalRepublicImages[$i]) }}" alt="Republic Day Celebration"
                        class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110" />
                </div>
                <div
                    class="relative group bg-pink-500 text-white p-6 flex flex-col items-center justify-between w-full md:w-1/2 overflow-hidden">
                    <div
                        class="absolute inset-0 bg-yellow-300 transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-0">
                    </div>
                    <div class="flex-1 flex items-center justify-center relative z-10 group-hover:text-sky-700">
                        <h3 class="text-lg text-center font-semibold">{{ $republicTitle }}</h3>
                    </div>
                    <div class="mt-4 relative z-10">
                        <a href="{{ route('gallerycollins') }}"
                            class="border border-white group-hover:border-sky-700 px-3 py-1 text-sm group-hover:text-sky-700 transition-all tracking-wide inline-block rounded-lg">
                            VIEW MORE <span class="text-xl">&rsaquo;</span>
                        </a>
                    </div>
                </div>
            </div>
        @endif

        {{-- Christmas Section --}}
        @if (isset($finalChristmasImages[$i]))
            <div class="flex flex-col md:flex-row bg-white overflow-hidden rounded-xl shadow-md">
                <div class="w-full md:w-1/2 h-64 overflow-hidden group">
                    <img src="{{ asset($finalChristmasImages[$i]) }}" alt="Christmas Carnival"
                        class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110" />
                </div>
                <div
                    class="relative group bg-sky-500 text-white p-6 flex flex-col items-center justify-between w-full md:w-1/2 overflow-hidden">
                    <div
                        class="absolute inset-0 bg-yellow-300 transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-0">
                    </div>
                    <div class="flex-1 flex items-center justify-center relative z-10 group-hover:text-pink-600">
                        <h3 class="text-lg text-center font-semibold">{{ $christmasTitle }}</h3>
                    </div>
                    <div class="mt-4 relative z-10">
                        <a href="{{ route('gallerycollins') }}"
                            class="border border-white group-hover:border-pink-600 px-3 py-1 text-sm group-hover:text-pink-600 transition-all tracking-wide inline-block rounded-lg">
                            VIEW MORE <span class="text-xl">&rsaquo;</span>
                        </a>
                    </div>
                </div>
            </div>
        @endif

    @endfor

</div>

</section>