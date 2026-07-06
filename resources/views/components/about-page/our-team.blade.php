@php
    // If the database returns no leadership team members, use high-quality default records
    if (!isset($leadershipTeam) || $leadershipTeam->isEmpty()) {
        $leadershipTeam = collect([
            (object) [
                'name' => 'Ms. Shalini Singh',
                'position' => 'Principal',
                'photo' => 'images/Principle.jpg',
                'bio' => '15+ years of experience in early education. Dedicated to fostering a happy and safe learning campus.'
            ],
            (object) [
                'name' => 'Mr. Rajeev Kumar',
                'position' => 'Director',
                'photo' => 'images/director-sir.jpg',
                'bio' => 'Focused on child developmental psychology and upgrading early learning infrastructure.'
            ]
        ]);
    }

    if (!isset($teacherTeams) || $teacherTeams->isEmpty()) {
        $teacherTeams = collect([
            (object) [
                'name' => 'Ms. Priya Sharma',
                'position' => 'Senior Playgroup Educator',
                'photo' => 'gallery/kidzee-10.jpeg',
                'bio' => 'Specializes in sensory play, motor skills coordination, and early language development.'
            ],
            (object) [
                'name' => 'Ms. Neha Gupta',
                'position' => 'Nursery Class Teacher',
                'photo' => 'gallery/kidzee-9.jpeg',
                'bio' => 'Focuses on child-friendly logic training, early counting, and creative storytelling.'
            ]
        ]);
    }

    if (!isset($specialists) || $specialists->isEmpty()) {
        $specialists = collect([
            (object) [
                'name' => 'Mr. Aman Verma',
                'position' => 'Creative Art Instructor',
                'photo' => 'gallery/kidzee-5.jpeg',
                'bio' => 'Inspires toddler imagination through hands-on finger painting, clay modelling, and paper crafts.'
            ],
            (object) [
                'name' => 'Ms. Ritu Sen',
                'position' => 'Music & Dance Specialist',
                'photo' => 'gallery/kidzee-6.jpeg',
                'bio' => 'Drives sensory development using rhythmic games, nursery singing, and interactive plays.'
            ]
        ]);
    }
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our team</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- ✅ Custom CSS --}}


</head>

<body class="min-h-screen py-12 px-4">

    <x-banner title="Our Team"
        para1="Meet the passionate educators and staff who make Kidzee a nurturing place for young minds to flourish"
        secondImage="teachers.png" />
    <div class="max-w-6xl mx-auto">


        <!-- Carousel Section -->
        <div class="mb-16">
            <div class="relative carousel-container max-w-6xl mx-auto">
                <div class="carousel-track">

                    <!-- Slide 1 - Leadership Team -->
                    <div class="carousel-slide p-4">
                        <div
                            class="bg-white rounded-3xl border-4 border-[#883cb3] shadow-[10px_10px_0px_#ebe1ff] py-12 px-12 md:px-20">
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-center mb-10 text-[#883cb3]">Leadership
                                Team</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach ($leadershipTeam as $leade)
                                    @php
                                        $leadePhoto = !empty($leade->photo) && file_exists(public_path($leade->photo)) ? $leade->photo : 'gallery/kidzee-logo.png';
                                    @endphp
                                    <div
                                        class="team-card rounded-3xl p-7 shadow-sm border-2 border-purple-100 flex flex-col sm:flex-row items-center sm:items-start bg-purple-50/40 hover:bg-purple-50 transition-all duration-300">
                                        <div
                                            class="rounded-full w-28 h-28 flex-shrink-0 overflow-hidden flex items-center justify-center mb-4 sm:mb-0 sm:mr-6 border-4 border-purple-200 shadow-md bg-white">
                                            <img src="{{ asset($leadePhoto) }}" alt="{{ $leade->name }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div class="text-center sm:text-left">
                                            <h3 class="text-2xl font-extrabold mb-1 text-slate-800">
                                                {{ $leade->name }}
                                            </h3>
                                            <p class="mb-3 font-bold text-sm text-[#883cb3] uppercase tracking-wider">
                                                {{ $leade->position }}
                                            </p>
                                            <p class="text-sm text-slate-600 leading-relaxed">{{ $leade->bio }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 - Teaching Team -->
                    <div class="carousel-slide p-4">
                        <div
                            class="bg-white rounded-3xl border-4 border-yellow-400 shadow-[10px_10px_0px_#fefcbd] py-12 px-12 md:px-20">
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-center mb-10 text-yellow-600">Teaching
                                Team</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach ($teacherTeams as $teacher)
                                    @php
                                        $teacherPhoto = !empty($teacher->photo) && file_exists(public_path($teacher->photo)) ? $teacher->photo : 'gallery/kidzee-logo.png';
                                    @endphp
                                    <div
                                        class="team-card rounded-3xl p-7 shadow-sm border-2 border-yellow-100 flex flex-col sm:flex-row items-center sm:items-start bg-yellow-50/40 hover:bg-yellow-50 transition-all duration-300">
                                        <div
                                            class="rounded-full w-28 h-28 flex-shrink-0 overflow-hidden flex items-center justify-center mb-4 sm:mb-0 sm:mr-6 border-4 border-yellow-200 shadow-md bg-white">
                                            <img src="{{ asset($teacherPhoto) }}" alt="{{ $teacher->name }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div class="text-center sm:text-left">
                                            <h3 class="text-2xl font-extrabold mb-1 text-slate-800">
                                                {{ $teacher->name }}
                                            </h3>
                                            <p class="mb-3 font-bold text-sm text-yellow-600 uppercase tracking-wider">
                                                {{ $teacher->position }}
                                            </p>
                                            <p class="text-sm text-slate-600 leading-relaxed">{{ $teacher->bio }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 - Specialists -->
                    <div class="carousel-slide p-4">
                        <div
                            class="bg-white rounded-3xl border-4 border-blue-400 shadow-[10px_10px_0px_#bfdbfe] py-12 px-12 md:px-20">
                            <h2 class="text-3xl sm:text-4xl font-extrabold text-center mb-10 text-blue-600">Specialists
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                @foreach ($specialists as $spec)
                                    @php
                                        $specPhoto = !empty($spec->photo) && file_exists(public_path($spec->photo)) ? $spec->photo : 'gallery/kidzee-logo.png';
                                    @endphp
                                    <div
                                        class="team-card rounded-3xl p-7 shadow-sm border-2 border-blue-100 flex flex-col sm:flex-row items-center sm:items-start bg-blue-50/40 hover:bg-blue-50 transition-all duration-300">
                                        <div
                                            class="rounded-full w-28 h-28 flex-shrink-0 overflow-hidden flex items-center justify-center mb-4 sm:mb-0 sm:mr-6 border-4 border-blue-200 shadow-md bg-white">
                                            <img src="{{ asset($specPhoto) }}" alt="{{ $spec->name }}"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div class="text-center sm:text-left">
                                            <h3 class="text-2xl font-extrabold mb-1 text-slate-800">
                                                {{ $spec->name }}
                                            </h3>
                                            <p class="mb-3 font-bold text-sm text-blue-600 uppercase tracking-wider">
                                                {{ $spec->position }}</p>
                                            <p class="text-sm text-slate-600 leading-relaxed">{{ $spec->bio }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Carousel Buttons -->
                <button class="carousel-btn absolute left-4 top-1/2 transform -translate-y-1/2 z-10" id="prevBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="carousel-btn absolute right-4 top-1/2 transform -translate-y-1/2 z-10" id="nextBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <span class="carousel-indicator active" data-index="0"></span>
                    <span class="carousel-indicator" data-index="1"></span>
                    <span class="carousel-indicator" data-index="2"></span>
                </div>
            </div>
        </div>

        <!-- Team Values Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-12" style="color: var(--primary);">Our Team Values</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4"
                        style="background-color: var(--secondary);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2" style="color: var(--accent2);">Collaboration</h3>
                    <p style="color: var(--dark);">We work together to create the best learning environment for every
                        child.</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4"
                        style="background-color: var(--accent1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2" style="color: var(--accent2);">Innovation</h3>
                    <p style="color: var(--dark);">We continuously develop new approaches to engage and inspire young
                        learners.</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4"
                        style="background-color: var(--accent3);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2" style="color: var(--accent2);">Compassion</h3>
                    <p style="color: var(--dark);">We approach each child with empathy, understanding, and genuine care.
                    </p>
                </div>
            </div>
        </div>


    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const nextButton = document.getElementById('nextBtn');
            const prevButton = document.getElementById('prevBtn');
            const indicators = document.querySelectorAll('.carousel-indicator');

            let currentSlide = 0;
            let autoPlayInterval;

            // Move to slide function based on percentage
            const moveToSlide = (index) => {
                if (index < 0 || index >= slides.length) return;

                track.style.transform = 'translateX(-' + (index * 100) + '%)';
                currentSlide = index;

                // Update indicators
                indicators.forEach((indicator, idx) => {
                    if (idx === index) {
                        indicator.classList.add('active');
                    } else {
                        indicator.classList.remove('active');
                    }
                });
            };

            // Set up next slide transition
            const nextSlide = () => {
                const nextIndex = (currentSlide + 1) % slides.length;
                moveToSlide(nextIndex);
            };

            // Set up prev slide transition
            const prevSlide = () => {
                const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
                moveToSlide(prevIndex);
            };

            // Reset auto play timer on user interaction
            const resetAutoPlay = () => {
                clearInterval(autoPlayInterval);
                autoPlayInterval = setInterval(nextSlide, 6000);
            };

            // Add event listeners for buttons
            nextButton.addEventListener('click', () => {
                nextSlide();
                resetAutoPlay();
            });

            prevButton.addEventListener('click', () => {
                prevSlide();
                resetAutoPlay();
            });

            // Add event listeners for indicators
            indicators.forEach(indicator => {
                indicator.addEventListener('click', e => {
                    const targetIndex = parseInt(e.target.getAttribute('data-index'));
                    moveToSlide(targetIndex);
                    resetAutoPlay();
                });
            });

            // Start auto play
            autoPlayInterval = setInterval(nextSlide, 6000);

            // Add hover effect to the CTA button
            const ctaButton = document.querySelector('button[style*="background-color: var(--primary)"]');
            if (ctaButton) {
                ctaButton.addEventListener('mouseenter', function () {
                    this.style.transform = 'scale(1.05)';
                });

                ctaButton.addEventListener('mouseleave', function () {
                    this.style.transform = 'scale(1)';
                });
            }
        });
    </script>
</body>

</html>