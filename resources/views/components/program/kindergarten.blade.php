<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our team</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- ✅ Custom CSS --}}



    <style>
        .hero-section {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--accent2) 100%);
            border-radius: 0 0 2rem 2rem;
        }

        .program-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-8px);
        }

        .floating-shape {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .age-group-indicator {
            transition: all 0.3s ease;
        }

        .age-group-indicator.active {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .activity-icon {
            transition: transform 0.3s ease;
        }

        .activity-card:hover .activity-icon {
            transform: scale(1.2);
        }

        .enrollment-cta {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent3) 100%);
        }

        .play-card-neobrutal {
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .play-card-neobrutal:hover {
            transform: translate(-4px, -4px);
        }

        .play-card-pink:hover {
            box-shadow: 12px 12px 0px #ebe1ff;
        }

        .play-card-yellow:hover {
            box-shadow: 12px 12px 0px #fefcbd;
        }

        .play-card-blue:hover {
            box-shadow: 12px 12px 0px #bfdbfe;
        }

        .play-card-green:hover {
            box-shadow: 12px 12px 0px #d1fae5;
        }

        .animate-spin-slow {
            animation: spin 10s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body class="min-h-screen">




    <section
        class="relative h-auto sm:h-[80vh] flex items-start sm:items-center overflow-hidden px-4 sm:px-8 md:px-20 pt-16 sm:pt-0">

        <!-- Left Content -->
        <div class="relative z-30 max-w-xl text-center sm:text-left mt-12 sm:mt-0 mb-10 sm:mb-0">

            <h2 class="text-2xl sm:text-4xl md:text-7xl font-bold text-pink-600 mb-4 sm:mb-6">
                Kindergarten
            </h2>
            <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-3 sm:mb-4">
                Our kindergarten program fosters early academic skills, creativity, and social-emotional growth in a
                nurturing environment.
            </p>
            <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                Children develop language, numeracy, problem-solving, and teamwork abilities while building confidence
                and independence.
            </p>
        </div>

        <!-- Right Corner Images -->
        <img src="{{ asset('images/clss-back.png') }}" alt="Right Corner Shape"
            class="absolute top-0 right-0 w-[250px] sm:w-[400px] md:w-[500px] lg:w-[800px] h-auto pointer-events-none select-none z-10">

        <img src="{{ asset('images/kinder.png') }}" alt="Corner Shape 2"
            class="absolute top-10 right-0 w-[180px] sm:w-[250px] md:w-[350px] lg:w-[640px] h-auto pointer-events-none select-none z-20">

    </section>

    <!-- Program Highlights -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-blue-800">Kindergarten Program Highlights</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">

                <div class="relative w-[300px]">
                    <img src="{{ asset('images/paper-clips.png') }}" alt="Learning"
                        class="w-full h-auto object-contain">
                    <ul class="absolute top-[60px] left-[35px] text-blue-900 text-[20px] font-medium leading-[3rem]">
                        <li>Language Development</li>
                        <li>Math & Logic Skills</li>
                        <li>Story & Music Time</li>
                    </ul>
                </div>

                <div class="relative w-[300px]">
                    <img src="{{ asset('images/paper-clips.png') }}" alt="Activity"
                        class="w-full h-auto object-contain">
                    <ul class="absolute top-[60px] left-[35px] text-blue-900 text-[20px] font-medium leading-[3rem]">
                        <li>Art & Craft Activities</li>
                        <li>Outdoor Exploration</li>
                        <li>Hands-on Learning</li>
                    </ul>
                </div>

                <div class="relative w-[300px]">
                    <img src="{{ asset('images/paper-clips.png') }}" alt="Social" class="w-full h-auto object-contain">
                    <ul class="absolute top-[60px] left-[35px] text-blue-900 text-[20px] font-medium leading-[3rem]">
                        <li>Social Skills & Teamwork</li>
                        <li>Leadership Skills</li>
                        <li>Sharing & Cooperation</li>
                    </ul>
                </div>

                <div class="relative w-[300px]">
                    <img src="{{ asset('images/paper-clips.png') }}" alt="Healthy Habits"
                        class="w-full h-auto object-contain">
                    <ul class="absolute top-[60px] left-[35px] text-blue-900 text-[20px] font-medium leading-[3rem]">
                        <li>Healthy Habits</li>
                        <li>Problem-Solving Skills</li>
                        <li>Curiosity & Exploration</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- A Day in Kindergarten -->
    <section class="py-16 bg-gradient-to-b from-white to-[#fdf4ff] overflow-hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <span
                    class="bg-[#ebe1ff] text-pink-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">Daily
                    Routine</span>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-blue-900 mt-4 mb-4 title-shadow">A Day in
                    Kindergarten</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    A structured routine that balances classroom academics, interactive laboratories, physical
                    development, and social bonding.
                </p>
            </div>

            <!-- Timeline wrapper -->
            <div class="relative grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Connected Dashed Line (Visible on Desktop) -->
                <div
                    class="hidden md:block absolute top-[90px] left-[10%] right-[10%] border-t-4 border-dashed border-pink-200 -z-10">
                </div>

                <!-- Step 1 -->
                <div
                    class="bg-white border-4 border-pink-400 rounded-3xl p-6 shadow-[8px_8px_0px_#ebe1ff] play-card-neobrutal play-card-pink flex flex-col items-center text-center relative mt-4 md:mt-0">
                    <div
                        class="absolute -top-7 bg-[#ebe1ff] border-4 border-pink-400 w-14 h-14 rounded-2xl flex items-center justify-center shadow-sm">
                        <i class="fas fa-sun text-pink-700 text-2xl animate-spin-slow"></i>
                    </div>
                    <span
                        class="bg-pink-500 text-white font-extrabold text-xs px-3 py-1 rounded-full uppercase tracking-wider mt-8 z-10"></span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Assembly & Phonics</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Morning prayer, updates, calendar charting, and
                        reading circle exercises to build language and phonics bases.</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="bg-white border-4 border-yellow-400 rounded-3xl p-6 shadow-[8px_8px_0px_#fefcbd] play-card-neobrutal play-card-yellow flex flex-col items-center text-center relative mt-4 md:mt-0">
                    <div
                        class="absolute -top-7 bg-[#fefcbd] border-4 border-yellow-400 w-14 h-14 rounded-2xl flex items-center justify-center shadow-sm">
                        <i class="fas fa-calculator text-yellow-600 text-2xl"></i>
                    </div>
                    <span
                        class="bg-yellow-400 text-blue-950 font-extrabold text-xs px-3 py-1 rounded-full uppercase tracking-wider mt-8 z-10"></span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Math & Language</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Writing routines, logic training, number games, and
                        interactive worksheets customized for school readiness.</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="bg-white border-4 border-blue-400 rounded-3xl p-6 shadow-[8px_8px_0px_#bfdbfe] play-card-neobrutal play-card-blue flex flex-col items-center text-center relative mt-4 md:mt-0">
                    <div
                        class="absolute -top-7 bg-blue-100 border-4 border-blue-400 w-14 h-14 rounded-2xl flex items-center justify-center shadow-sm">
                        <i class="fas fa-utensils text-blue-600 text-2xl"></i>
                    </div>
                    <span
                        class="bg-blue-600 text-white font-extrabold text-xs px-3 py-1 rounded-full uppercase tracking-wider mt-8 z-10"></span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Play & Movement</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Indoor and outdoor games help children stay active,
                        build coordination, and enjoy learning with friends.</p>
                </div>

                <!-- Step 4 -->
                <div
                    class="bg-white border-4 border-green-400 rounded-3xl p-6 shadow-[8px_8px_0px_#d1fae5] play-card-neobrutal play-card-green flex flex-col items-center text-center relative mt-4 md:mt-0">
                    <div
                        class="absolute -top-7 bg-green-100 border-4 border-green-400 w-14 h-14 rounded-2xl flex items-center justify-center shadow-sm">
                        <i class="fas fa-flask text-green-600 text-2xl"></i>
                    </div>
                    <span
                        class="bg-green-500 text-white font-extrabold text-xs px-3 py-1 rounded-full uppercase tracking-wider mt-8 z-10"></span>
                    <h3 class="text-xl font-bold text-blue-900 mt-4 mb-2">Science & Projects</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Simple hands-on experiments, creative craftwork,
                        outdoor peer bonding, and dismissal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Outcomes -->
    <section class="py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-4" style="color: var(--primary);">Learning Outcomes</h2>
            <p class="text-center text-lg max-w-3xl mx-auto mb-12" style="color: var(--dark);">
                By the end of our kindergarten program, children will develop key academic, social, and emotional
                skills.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-2xl p-6 shadow-lg" style="background-color: white;">
                    <h3 class="text-xl font-bold mb-4" style="color: var(--accent2);">Academic Skills</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: var(--secondary);"></i>
                            <span style="color: var(--dark);">Early literacy and language comprehension</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: var(--secondary);"></i>
                            <span style="color: var(--dark);">Basic numeracy and logical thinking</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle mt-1 mr-3" style="color: var(--secondary);"></i>
                            <span style="color: var(--dark);">Hands-on learning with creative activities</span>
                        </li>
                    </ul>
                </div>

                <div class="rounded-2xl p-6 shadow-lg" style="background-color: white;">
                    <h3 class="text-xl font-bold mb-4" style="color: var(--accent2);">Social & Emotional Skills</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-star mt-1 mr-3" style="color: var(--accent1);"></i>
                            <span style="color: var(--dark);">Teamwork and collaboration with peers</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star mt-1 mr-3" style="color: var(--accent1);"></i>
                            <span style="color: var(--dark);">Confidence and self-expression</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star mt-1 mr-3" style="color: var(--accent1);"></i>
                            <span style="color: var(--dark);">Independence in daily activities</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star mt-1 mr-3" style="color: var(--accent1);"></i>
                            <span style="color: var(--dark);">Curiosity and love for learning</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Parent Corner -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <span
                    class="bg-[#ebe1ff] text-pink-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">For
                    Parents</span>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-blue-900 mt-4 mb-4">Parent Corner: What to Expect
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Setting strong foundations requires teamwork. Here is how we prepare kids and support families in
                    Kindergarten.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Expectation 1 -->
                <div
                    class="relative bg-pink-50 border-4 border-pink-200 rounded-3xl p-8 hover:bg-[#ebe1ff]/40 transition-all duration-300">
                    <div
                        class="absolute right-4 top-2 w-16 h-16 text-pink-200 opacity-20 font-black text-6xl select-none">
                        01</div>
                    <div
                        class="bg-pink-500 text-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-md mb-6">
                        <i class="fas fa-graduation-cap text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-pink-700 mb-3">Primary School Prep</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our academic syllabus is structured to ensure that kids confidently clear admissions for leading
                        primary schools.
                    </p>
                </div>

                <!-- Expectation 2 -->
                <div
                    class="relative bg-yellow-50 border-4 border-yellow-200 rounded-3xl p-8 hover:bg-[#fefcbd]/40 transition-all duration-300">
                    <div
                        class="absolute right-4 top-2 w-16 h-16 text-yellow-200 opacity-30 font-black text-6xl select-none">
                        02</div>
                    <div
                        class="bg-yellow-400 text-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-md mb-6">
                        <i class="fas fa-pencil-ruler text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-yellow-800 mb-3">1:12 Focused Ratio</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sufficient individual guidance allows child development specialists to track writing, basic
                        calculations, and social traits.
                    </p>
                </div>

                <!-- Expectation 3 -->
                <div
                    class="relative bg-blue-50 border-4 border-blue-200 rounded-3xl p-8 hover:bg-[#bfdbfe]/40 transition-all duration-300">
                    <div
                        class="absolute right-4 top-2 w-16 h-16 text-blue-200 opacity-20 font-black text-6xl select-none">
                        03</div>
                    <div
                        class="bg-blue-500 text-white w-12 h-12 rounded-2xl flex items-center justify-center shadow-md mb-6">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-700 mb-3">Weekly Goal Reports</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Stay thoroughly updated on academic and developmental milestones through detailed weekly
                        tracking charts sent home.
                    </p>
                </div>
            </div>
        </div>
    </section>









    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Age group indicator interaction
            const ageIndicators = document.querySelectorAll('.age-group-indicator');

            ageIndicators.forEach(indicator => {
                indicator.addEventListener('click', function () {
                    ageIndicators.forEach(ind => ind.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Animation for program cards
            const programCards = document.querySelectorAll('.program-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });

            programCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Add hover effect to buttons
            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function () {
                    this.style.transform = 'scale(1.05)';
                });

                button.addEventListener('mouseleave', function () {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>

</html>