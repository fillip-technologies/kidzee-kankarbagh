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
        $categories = [
            [
                'key' => ['holi', 'holicelebration', 'holi celebration'],
                'title' => 'Holi Celebration',
                'default_image' => 'gallery/holi-image.jpeg',
                'bg_color' => 'bg-pink-500',
                'hover_bg' => 'bg-yellow-300',
                'hover_text' => 'group-hover:text-sky-700',
                'btn_border' => 'group-hover:border-sky-700',
                'btn_text' => 'group-hover:text-sky-700',
            ],
            [
                'key' => ['independence', 'independenceday', 'independence day', 'republicday', 'republic'],
                'title' => 'Independence Day',
                'default_image' => 'gallery/republic-day.jpeg',
                'bg_color' => 'bg-orange-500',
                'hover_bg' => 'bg-green-400',
                'hover_text' => 'group-hover:text-blue-900',
                'btn_border' => 'group-hover:border-blue-900',
                'btn_text' => 'group-hover:text-blue-900',
            ],
            [
                'key' => ['christmas', 'christmasday', 'christmas day'],
                'title' => 'Christmas Carnival',
                'default_image' => 'gallery/christmas.jpeg',
                'bg_color' => 'bg-sky-500',
                'hover_bg' => 'bg-yellow-300',
                'hover_text' => 'group-hover:text-pink-600',
                'btn_border' => 'group-hover:border-pink-600',
                'btn_text' => 'group-hover:text-pink-600',
            ],
            [
                'key' => ['teachers', 'teacher', 'teachersday', 'teachers day'],
                'title' => 'Doctors Day Celebration',
                'default_image' => 'images/kidzee-6.jpeg',
                'bg_color' => 'bg-purple-600',
                'hover_bg' => 'bg-pink-300',
                'hover_text' => 'group-hover:text-purple-900',
                'btn_border' => 'group-hover:border-purple-900',
                'btn_text' => 'group-hover:text-purple-900',
            ],
        ];

        $galleryItems = [];

        foreach ($categories as $cat) {
            $foundImage = null;

            if (isset($galleryImg) && count($galleryImg) > 0) {
                foreach ($galleryImg as $g) {
                    $type = strtolower(trim($g->gallery_type ?? ''));
                    if (in_array($type, $cat['key'])) {
                        if (!empty($g->image_path) && is_array($g->image_path) && isset($g->image_path[0])) {
                            $imgPath = $g->image_path[0];
                            if (file_exists(public_path($imgPath))) {
                                $foundImage = $imgPath;
                                break;
                            }
                        }
                    }
                }
            }

            if (!$foundImage) {
                if (file_exists(public_path($cat['default_image']))) {
                    $foundImage = $cat['default_image'];
                } else {
                    $foundImage = 'gallery/kidzee-1.jpeg';
                }
            }

            $cat['image'] = $foundImage;
            $galleryItems[] = $cat;
        }
    @endphp

    <div class="max-w-6xl mx-auto py-12 px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($galleryItems as $item)
            <div
                class="flex flex-col md:flex-row bg-white overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300">
                <div class="w-full md:w-1/2 h-64 overflow-hidden group">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}"
                        class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out group-hover:scale-110" />
                </div>
                <div
                    class="relative group {{ $item['bg_color'] }} text-white p-6 flex flex-col items-center justify-between w-full md:w-1/2 overflow-hidden">
                    <div
                        class="absolute inset-0 {{ $item['hover_bg'] }} transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-0">
                    </div>
                    <div class="flex-1 flex items-center justify-center relative z-10 {{ $item['hover_text'] }}">
                        <h3 class="text-xl text-center font-bold">{{ $item['title'] }}</h3>
                    </div>
                    <div class="mt-4 relative z-10">
                        <a href="{{ route('gallerycollins') }}"
                            class="border border-white {{ $item['btn_border'] }} px-4 py-1.5 text-sm {{ $item['btn_text'] }} transition-all tracking-wide inline-block rounded-lg font-medium">
                            VIEW MORE <span class="text-xl">&rsaquo;</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>