{{-- Custom styling for Facilities --}}
<style>
    .facility-card-neobrutal {
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .facility-card-neobrutal:hover {
        transform: translate(-6px, -6px);
    }

    .facility-card-pink:hover {
        box-shadow: 12px 12px 0px #ebe1ff;
    }

    .facility-card-yellow:hover {
        box-shadow: 12px 12px 0px #fefcbd;
    }

    .facility-card-blue:hover {
        box-shadow: 12px 12px 0px #bfdbfe;
    }

    .facility-card-green:hover {
        box-shadow: 12px 12px 0px #d1fae5;
    }

    .facility-card-purple:hover {
        box-shadow: 12px 12px 0px #ebd9fc;
    }

    .facility-card-red:hover {
        box-shadow: 12px 12px 0px #fee2e2;
    }
</style>

<!-- Facilities Section -->
<section class="relative py-24 px-6 md:px-20 overflow-hidden bg-gradient-to-b from-[#fdf4ff]/50 to-white">

    <!-- Background Shapes -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-yellow-200 opacity-35 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-pink-200 opacity-30 rounded-full blur-3xl -z-10"></div>

    <!-- Title -->
    <div class="text-center mb-20">
        <span class="bg-[#ebe1ff] text-pink-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">Our
            Campus</span>
        <h2 class="text-4xl md:text-6xl font-extrabold text-blue-900 mt-4 mb-4 title-shadow">Our Facilities</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            A World-Class, Safe, and Stimulating Environment Tailored for Early Learners
        </p>
    </div>

    <!-- Facilities Grid -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-6xl mx-auto">

        <!-- Card 1: Play Equipment -->
        <div
            class="bg-white border-4 border-pink-400 rounded-3xl p-5 shadow-[8px_8px_0px_#ebe1ff] facility-card-neobrutal facility-card-pink flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-pink-100">
                <img src="{{ asset('gallery/kidzee-8.jpeg') }}" alt="Play Equipment" class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-[#ebe1ff] border-2 border-pink-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-pink-600 text-lg">
                    <i class="fas fa-shapes"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">Play Equipment</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                A wide variety of indoor and outdoor play structures, including slides, swings, and soft-play zones, to
                help children develop motor skills safely.
            </p>
        </div>

        <!-- Card 2: AC Classrooms -->
        <div
            class="bg-white border-4 border-yellow-400 rounded-3xl p-5 shadow-[8px_8px_0px_#fefcbd] facility-card-neobrutal facility-card-yellow flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-yellow-100">
                <img src="{{ asset('gallery/kidzee-4.jpeg') }}" alt="AC Classrooms" class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-[#fefcbd] border-2 border-yellow-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-yellow-600 text-lg">
                    <i class="fas fa-school"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">AC Classrooms</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Spacious, cheerful, and fully air-conditioned spaces equipped with modern teaching aids and comfortable,
                child-safe furniture.
            </p>
        </div>

        <!-- Card 3: Activity Room -->
        <div
            class="bg-white border-4 border-blue-400 rounded-3xl p-5 shadow-[8px_8px_0px_#bfdbfe] facility-card-neobrutal facility-card-blue flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-blue-100">
                <img src="{{ asset('gallery/kidzee-5.jpeg') }}" alt="Activity Room" class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-blue-100 border-2 border-blue-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-blue-600 text-lg">
                    <i class="fas fa-palette"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">Activity Room</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                A vibrant, dedicated space for art, craft, music, and dance sessions, allowing children to freely
                express their creative imaginations.
            </p>
        </div>

        <!-- Card 4: Safe & Secure Campus -->
        <div
            class="bg-white border-4 border-green-400 rounded-3xl p-5 shadow-[8px_8px_0px_#d1fae5] facility-card-neobrutal facility-card-green flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-green-100">
                <img src="{{ asset('gallery/kidzee-7.jpeg') }}" alt="Safe & Secure Campus"
                    class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-green-100 border-2 border-green-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-green-600 text-lg">
                    <i class="fas fa-shield-alt"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">Safe & Secure Campus</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                CCTV monitoring throughout the school campus and alert security personnel to ensure the safety and
                well-being of your children.
            </p>
        </div>

        <!-- Card 5: Hygienic Campus -->
        <div
            class="bg-white border-4 border-purple-400 rounded-3xl p-5 shadow-[8px_8px_0px_#ebe1ff] facility-card-neobrutal facility-card-purple flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-purple-100">
                <img src="{{ asset('gallery/kidzee-9.jpeg') }}" alt="Hygienic Campus"
                    class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-[#ebe1ff] border-2 border-purple-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-purple-600 text-lg">
                    <i class="fas fa-hands-wash"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">Hygienic Campus</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Rigorous sanitization protocols, clean toilets, and safe drinking water to protect our children and
                staff from health hazards.
            </p>
        </div>

        <!-- Card 6: Medical Care -->
        <div
            class="bg-white border-4 border-red-400 rounded-3xl p-5 shadow-[8px_8px_0px_#fee2e2] facility-card-neobrutal facility-card-red flex flex-col">
            <div class="relative w-full h-48 mb-4 rounded-2xl overflow-hidden border-2 border-red-100">
                <img src="{{ asset('gallery/kidzee-3.jpeg') }}" alt="Medical Care" class="w-full h-full object-cover">
                <div
                    class="absolute top-3 left-3 bg-red-100 border-2 border-red-400 w-10 h-10 rounded-xl flex items-center justify-center shadow-sm text-red-600 text-lg">
                    <i class="fas fa-briefcase-medical"></i>
                </div>
            </div>
            <h3 class="text-xl font-extrabold text-blue-900 mb-2">Medical Care</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                A fully equipped medical room staffed with a certified nurse to provide immediate medical attention,
                aid, and care when needed.
            </p>
        </div>

    </div>
</section>