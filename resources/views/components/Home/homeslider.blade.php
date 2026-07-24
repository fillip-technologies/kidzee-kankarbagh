<style>
    .carousel-container {
        width: 100%;
        height: 100vh;
        position: relative;
        overflow: hidden;
        margin-top: 0;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
    }

    .carousel-slide {
        min-width: 100%;
        height: 100%;
        position: relative;
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.8);
        border: none;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 2rem;
        color: #4a6fa5;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
        z-index: 10;
    }

    .carousel-btn:hover {
        background: white;
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-btn.prev {
        left: 30px;
    }

    .carousel-btn.next {
        right: 30px;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 15px;
        z-index: 10;
    }

    .indicator {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .indicator.active {
        background: white;
        transform: scale(1.3);
    }



    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {


        .carousel-container {
            width: 100%;
            height: 350px;
            position: relative;
            overflow: hidden;
            margin-top: 0;
        }

        .carousel-btn {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
        }

        .carousel-btn.prev {
            left: 15px;
        }

        .carousel-btn.next {
            right: 15px;
        }
    }

    @media (max-width: 480px) {
        .carousel-container {
            height: 280px;
        }

        .carousel-indicators {
            bottom: 20px;
        }
    }
</style>

<body>

    <div class="carousel-container">
        <div class="carousel-track">
            @foreach ($slideImage as $img)
                <div class="carousel-slide">
                    <img src="{{ asset($img->slider_img) }}" alt="{{ $img->title }}" class="carousel-image">
                </div>
            @endforeach
        </div>

        <button class="carousel-btn prev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-btn next">
            <i class="fas fa-chevron-right"></i>
        </button>

        <div class="carousel-indicators">
            @foreach ($slideImage as $index => $img)
                <div class="indicator {{ $index === 0 ? 'active' : '' }}"></div>
            @endforeach
        </div>
    </div>


    <!-- card section -->
    <!-- card section -->
    <section class="py-16 px-6 text-center">
        <!-- Title -->
        <h2 class="comic-font text-4xl text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600 mb-6">
            Discover Our Educational Programs
        </h2>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            <!-- Card 1 -->
            <div class="bg-pink-300 rounded-2xl p-8 shadow-lg flex flex-col items-center">
                <img src="{{asset('images/tiger.png')}}" alt="Play Group Program" class="w-32 h-32 mb-6">
                <h3 class="text-white font-bold text-xl mb-2">Play Group</h3>
                <p class="text-white text-sm mb-6">A fun-filled space where little ones make their first friends, sing
                    songs, explore sensory games, and build a love for learning!</p>
                <a href="{{ route('playgroup') }}" class="text-white font-semibold flex items-center gap-2">Read More
                    <span>➜</span></a>
            </div>



            <!-- Card 2 -->
            <div class="bg-sky-400 rounded-2xl p-8 shadow-lg flex flex-col items-center">
                <img src="{{asset('images/panda.png')}}" alt="Nursery Program" class="w-32 h-32 mb-6">
                <h3 class="text-white font-bold text-xl mb-2">Nursery</h3>
                <p class="text-white text-sm mb-6">Where imagination takes flight! Children build confidence and express
                    themselves through art, storytelling, and creative play.</p>
                <a href="{{ route('nursery') }}" class="text-white font-semibold flex items-center gap-2">Read More
                    <span>➜</span></a>
            </div>

            <!-- Card 3 -->
            <div class="bg-amber-300 rounded-2xl p-8 shadow-lg flex flex-col items-center">
                <img src="{{asset('images/din.png')}}" alt="Kindergarten Program" class="w-32 h-32 mb-6">
                <h3 class="text-amber-950 font-bold text-xl mb-2">Kindergarten</h3>
                <p class="text-amber-900 text-sm mb-6">Big steps for bright futures! We explore math, letters, and
                    science through hands-on activities that make school prep exciting.</p>
                <a href="{{ route('kindergartencollins') }}"
                    class="text-amber-950 font-semibold flex items-center gap-2">Read More <span>➜</span></a>
            </div>



        </div>
    </section>



</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.carousel-track');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevButton = document.querySelector('.carousel-btn.prev');
        const nextButton = document.querySelector('.carousel-btn.next');
        const indicators = document.querySelectorAll('.indicator');

        let currentIndex = 0;
        const totalSlides = slides.length;
        let autoPlayInterval;

        // Function to update carousel position
        function updateCarousel() {
            track.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        // Next slide function
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
            resetAutoPlay();
        }

        // Previous slide function
        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
            resetAutoPlay();
        }

        // Add event listeners to buttons
        nextButton.addEventListener('click', nextSlide);
        prevButton.addEventListener('click', prevSlide);

        // Add event listeners to indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
                resetAutoPlay();
            });
        });

        // Auto-play functionality
        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 5000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        startAutoPlay();

        // Pause auto-play when hovering over carousel
        const carouselContainer = document.querySelector('.carousel-container');
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            startAutoPlay();
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });

        // Swipe support for touch devices
        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            clearInterval(autoPlayInterval);
        });

        track.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoPlay();
        });

        function handleSwipe() {
            const swipeThreshold = 50;

            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
            }
        }
    });
</script>