<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal's Message</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<section class="bg-white text-[#0E2245]">
    <div class="max-w-6xl mx-auto px-4 py-16">
        <!-- Section Heading -->
        <div class="text-center mb-12 relative">
            <h2 class="text-3xl font-serif font-light relative inline-block z-10 bg-white px-6">
                Principal's Message
            </h2>
            <div class="absolute top-1/2 left-0 right-0 h-[1px] bg-gray-300 z-0"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 items-center py-4 px-4">
            <!-- Principal Photo -->
            <div class="w-full lg:w-1/2 flex justify-center py-4">
                <div class="relative w-full max-w-md group">
                    <!-- Background Backdrop Accent -->
                    <div class="absolute -inset-3 bg-gradient-to-tr from-pink-400/20 to-purple-200/40 rounded-3xl blur-md group-hover:blur-lg transition-all duration-300 opacity-80"></div>
                    
                    <!-- Main Image Frame -->
                    <div class="relative overflow-hidden rounded-2xl bg-white shadow-2xl border-4 border-white ring-1 ring-gray-200/80 aspect-[3/4] max-h-[480px]">
                        <img 
                            src="{{ asset('images/kidze.png') }}" 
                            alt="Principal" 
                            class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-500 ease-out" 
                        />
                    </div>
                </div>
            </div>

            <!-- Principal Message -->
            <div class="space-y-8 w-full lg:w-1/2">
                <!-- Quote & Intro -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-quote-left text-3xl text-[#0E2245]"></i>
                        <p class="text-xl font-semibold text-[#0E2245]">Dear Parents,</p>
                    </div>

                    <div class="text-justify leading-relaxed space-y-4 text-gray-700 text-base sm:text-lg">
                        <p>
                            It is my privilege to lead a team of dedicated and well-trained educators at Kidzee Kids.
                            As the Principal, my focus is on the day-to-day happiness and developmental progress of each student.
                            We have created a curriculum that is both fun and educational, preparing children for the
                            challenges of primary school and beyond.
                        </p>
                        <p>
                            Our teachers are not just instructors; they are mentors and caregivers who are committed to understanding and nurturing the unique potential of every child. I invite you to visit us and experience the vibrant learning community we have built.
                        </p>
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="border-l-4 border-pink-500 pl-4 py-1">
                    <h3 class="text-xl font-bold text-[#0E2245]">Principal</h3>
                    <div class="text-xs text-gray-500 uppercase tracking-widest font-medium">Kidzee Kids</div>
                </div>
            </div>
        </div>
    </div>
</section>