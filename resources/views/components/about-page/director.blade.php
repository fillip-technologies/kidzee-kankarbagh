<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director's Message</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<section class="bg-white text-[#0E2245]">
    <div class="max-w-6xl mx-auto px-4 py-16">
        <!-- Section Heading -->
        <div class="text-center mb-12 relative">
            <h2 class="text-3xl font-serif font-light relative inline-block z-10 bg-white px-6">
                Director's Message
            </h2>
            <div class="absolute top-1/2 left-0 right-0 h-[1px] bg-gray-300 z-0"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 items-center py-4 px-4">
            <!-- Director Photo -->
            <div class="w-full lg:w-1/2 flex justify-center py-4">
                <div class="relative w-full max-w-md group">
                    <!-- Background Backdrop Accent -->
                    <div
                        class="absolute -inset-3 bg-gradient-to-tr from-[#0E2245]/15 to-amber-200/40 rounded-3xl blur-md group-hover:blur-lg transition-all duration-300 opacity-80">
                    </div>

                    <!-- Main Image Frame -->
                    <div
                        class="relative overflow-hidden rounded-2xl bg-white shadow-2xl border-4 border-white ring-1 ring-gray-200/80 aspect-[3/4] max-h-[480px]">
                        <img src="{{ asset('images/director.jpeg') }}" alt="Director"
                            class="w-full h-full object-cover object-top transform group-hover:scale-105 transition-transform duration-500 ease-out" />
                    </div>
                </div>
            </div>

            <!-- Director Message -->
            <div class="space-y-8 w-full lg:w-1/2">
                <!-- Quote & Intro -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-quote-left text-3xl text-[#0E2245]"></i>
                        <p class="text-xl font-semibold text-[#0E2245]">Dear Parents,</p>
                    </div>

                    <div class="text-justify leading-relaxed space-y-4 text-gray-700 text-base sm:text-lg">
                        <p>
                            Our Respected Director Ma'am is inspiring our children to dream big, study with dedication,
                            and always walk on the right path. Through her encouraging words, she is motivating every
                            child to work hard, build good values, and strive for a bright and successful future. We are
                            grateful for her constant guidance and blessings.
                        </p>
                        <p>
                            Our team is passionate about creating an environment where learning is not
                            a task, but a joyous adventure. We look forward to partnering with you
                            in your child’s educational journey.
                        </p>
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="border-l-4 border-[#0E2245] pl-4 py-1">
                    <h3 class="text-xl font-bold text-[#0E2245]">Director</h3>
                    <div class="text-xs text-gray-500 uppercase tracking-widest font-medium">Kidzee Kids</div>
                </div>
            </div>
        </div>
    </div>
</section>